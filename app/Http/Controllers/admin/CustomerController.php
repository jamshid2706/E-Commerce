<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::orderBy('created_at', 'desc')->paginate(8);
        return view('admin.customer.index', compact('customers'));
    }

    public function create()
    {
        $customers = Customer::all();
        return view('admin.customer.create', compact('customers'));
    }

    public function store(CustomerRequest $request)
    {
        $insertion = Customer::create($request->all());

        return redirect()->route('admin.customers');
    }

    public function edit(CustomerRequest $request, $id)
    {
        $data = $request->validated();
        $customer = Customer::find($id);
        $customer->update($data);
        return redirect()->back();
    }

    public function destroy($id)
    {
        Customer::destroy($id);
        return redirect()->route('admin.customers');
    }

    public function search(Request $request)
    {
        $customers = Customer::where('name', 'Like', '%' . $request['search'] . '%')->get();
        $output = '';
        foreach ($customers as $customer) {
            $output .= view('admin.customer.client-box', compact('customer'));
        }
        return $output;
    }
}
