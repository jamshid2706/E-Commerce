<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Sale;

class DashboardController extends Controller
{
    public function index() {
        return view('admin.dashboard.index');
    }

    public function dashboard(){
        $dataForm = request()->all();

        switch ($dataForm['dataForm']) {
            case 'Today':
                $start = date("Y-m-d");
                $end = date("Y-m-d", strtotime("tomorrow"));
                $active = 'today';
                break;
            case 'Monthly':
                $start = date('Y-m-01');
                $end = date('Y-m-t');
                $active = 'month';
                break;
            case 'Weekly':
                $start = date("Y-m-d", strtotime("monday"));
                $end = date("Y-m-d", strtotime("sunday"));
                $active = 'week';
                break;
            case 'date':
                $date = explode(' - ', str_replace(',', '', $dataForm['calendar']));
                $start = date('Y-m-d', strtotime($date[0]));
                $end = date('Y-m-d', strtotime($date[1]));
                $active = 'date';
                break;
            default:
                $start = date('Y-m-01');
                $end = date('Y-m-t');
                $active = 'month';
        }

//        $date['start_lastweek'] = date("Y-m-d", strtotime("last monday", strtotime("-1 week")));
//        $date['end_lastweek'] = date("Y-m-d", strtotime("sunday", strtotime("-1 week")));
//        $m = date('m', strtotime("-1 month"));
//        $date['start_lastMonth'] = date("Y-$m-01");
//        $date['end_lastMonth'] = date('Y-m-d', strtotime($start. ' -1 day'));
        $calendar = $start.' - '.$end;
        $sales = Sale::whereBetween('created_at', [$start, $end])->get();
        $client = [];
        $debts = 0;
        $cost = 0;
        $productSold = 0;
        if(count($sales) !== 0){
            foreach ($sales as $sale){
                foreach ($sale->products as $sold){
                    $product = Product::withTrashed()->find($sold['product_id']);
                    $cost += $sold['count'] * $product['buy'];
                    $productSold += $sold['count'];
                }
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
                $debts += $sale->finance['debt'];
            }

            $activeClients = count($client);
            $profit = $sales->pluck('amount')->sum() - $cost;
            $profitPercentage = 100 - ($cost / $sales->pluck('amount')->sum() * 100);
            $profitPercentage = number_format($profitPercentage, 1);
            $profit = number_format($profit, 0, '.', ' ');
            return view('admin.dashboard.showCard', compact('active', 'debts', 'profit', 'profitPercentage', 'productSold', 'activeClients', 'cost', 'sales', 'client', 'calendar'));
        } else{
            $profit = 0;
            $profitPercentage = 0;
            $activeClients = 0;
            return view('admin.dashboard.showCard', compact('active', 'debts', 'profit', 'profitPercentage', 'productSold', 'activeClients', 'cost', 'sales', 'client', 'calendar'));
        }
    }
}
