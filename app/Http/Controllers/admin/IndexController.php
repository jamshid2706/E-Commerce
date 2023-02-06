<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Product;
use App\Models\Sale;
use App\Models\SaleProduct;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
//        $date['start_lastweek'] = date("Y-m-d", strtotime("last monday", strtotime("-1 week")));
//        $date['end_lastweek'] = date("Y-m-d", strtotime("sunday", strtotime("-1 week")));
//        $date['start_week'] = date("Y-m-d", strtotime("last monday"));
//        $date['end_week'] = date("Y-m-d", strtotime("sunday"));

        $m = date('m', strtotime("-1 month"));
        $date['start_month'] = date('Y-m-01');
        $date['end_month'] = date("Y-m-t");
        $date['start_lastMonth'] = date("Y-$m-01");
        $date['end_lastMonth'] = date('Y-m-d', strtotime($date['start_month']. ' -1 day'));

        $saleProduct = SaleProduct::whereBetween('created_at', [$date['start_month'], $date['end_month']])->get();
        $sales = Sale::whereBetween('created_at', [$date['start_month'], $date['end_month']])->get();

        $cost = 0;
        foreach ($saleProduct as $sold){
            $product = Product::find($sold['product_id']);
            $cost += $sold['count'] * $product['buy'];
        }

        $clients = Client::all();

        foreach ($clients as $client){
            $total = 0;
            foreach ($client->sales as $sale){
                $total += $sale->amount;
            }
        }

        $client = [];
        foreach ($sales as $sale){
            if(!array_key_exists($sale['client_id'], $client)){
                $client[$sale['client_id']]['id'] = $sale['client_id'];
                $client[$sale['client_id']]['name'] = $sale->client->name;
                $client[$sale['client_id']]['address'] = $sale->client->address;
                $client[$sale['client_id']]['overall_amount'] = $sale['amount'];
                $client[$sale['client_id']]['overall_debt'] = $sale->finance['debt'];
            } else{
                $client[$sale['client_id']]['overall_amount'] += $sale['amount'];
                $client[$sale['client_id']]['overall_debt'] += $sale->finance['debt'];
            }
        }

        $activeClients = count($client);
        $profit = $sales->pluck('amount')->sum() - $cost;
        $profitPercentage = 100 - ($cost / $sales->pluck('amount')->sum() * 100);
        $profitPercentage = number_format($profitPercentage, 1);
        $profit = number_format($profit, 0, '.', ' ');

        return view('admin.index', compact('profit', 'profitPercentage', 'saleProduct', 'activeClients', 'cost', 'sales', 'client'));
    }
}

