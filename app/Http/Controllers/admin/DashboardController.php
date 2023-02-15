<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Product;
use App\Models\Sale;
use App\Models\SaleProduct;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $dataForm = request()->all();
        $product_list ='';
        if (!array_key_exists('dataForm', $dataForm)){
            $start = date('Y-m-01');
            $end = date('Y-m-t');
            echo $start.'  ||  '.$end;
            $active = 'month';
        }else{
            switch ($dataForm['dataForm']) {
                case 'Weekly':
                    $start = date("Y-m-d", strtotime("last monday"));
                    $end = date("Y-m-d", strtotime("sunday"));
                    echo $start."  ".$end;
                    $active = 'week';
                    break;
                case 'date':
                    echo $dataForm['calendar']."  \n";
                    $date = explode(' - ', str_replace(',', '', $dataForm['calendar']));
                    $start = date('Y-m-d', strtotime($date[0]));
                    $end = date('Y-m-d', strtotime($date[1]));
                    $active = 'date';
                    break;
                default:
                    $active = 'Not found';
                    echo "WTF is that?!";
            }
        }
        $date['start_lastweek'] = date("Y-m-d", strtotime("last monday", strtotime("-1 week")));
        $date['end_lastweek'] = date("Y-m-d", strtotime("sunday", strtotime("-1 week")));

        $m = date('m', strtotime("-1 month"));
        $date['start_lastMonth'] = date("Y-$m-01");
        $date['end_lastMonth'] = date('Y-m-d', strtotime($start. ' -1 day'));
        $calendar = $start.' - '.$end;
        $sales = Sale::whereBetween('created_at', [$start, $end])->get();
        $saleProduct = SaleProduct::whereBetween('created_at', [$start, $end])->get();
        if (count($sales) !== 0){
            $cost = 0;
            foreach ($saleProduct as $sold){
                $product = Product::withTrashed()->find($sold['product_id']);
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
            $debts = 0;

            foreach ($sales as $sale){
                if(!array_key_exists($sale['client_id'], $client)){
                    $client[$sale['client_id']]['id'] = $sale['client_id']?? '';
                    $client[$sale['client_id']]['name'] = $sale->client->name?? '';
                    $client[$sale['client_id']]['address'] = $sale->client->address?? '';
                    $client[$sale['client_id']]['overall_amount'] = $sale['amount']?? 0;
                    $client[$sale['client_id']]['overall_debt'] = $sale->finance['debt']?? 0;
                } else{
                    $client[$sale['client_id']]['overall_amount'] += $sale['amount']?? 0;
                    $client[$sale['client_id']]['overall_debt'] += $sale->finance['debt']?? 0;
                }
                $debts += $sale->finance['debt']?? 0;
            }


            $activeClients = count($client);
            $profit = $sales->pluck('amount')->sum() - $cost;
            $profitPercentage = 100 - ($cost / $sales->pluck('amount')->sum() * 100);
            $profitPercentage = number_format($profitPercentage, 1);
            $profit = number_format($profit, 0, '.', ' ');
            return view('admin.dashboard.index', compact('active', 'debts', 'profit','product_list', 'profitPercentage', 'saleProduct', 'activeClients', 'cost', 'sales', 'client', 'calendar'));
        } else{
            return view('admin.dashboard.404', compact('active', 'calendar'));
        }

    }
}
