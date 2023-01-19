<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use App\Models\Category;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('admin.client.index', compact('clients'));
    }

    public function show($id)
    {
        $client = Client::find($id);
        return view('admin.client.show', compact('client'));
    }

    public function create()
    {
        $clients = Client::all();
        return view('admin.client.create', compact('clients'));
    }

    public function store(ClientRequest $request)
    {
        $insertion = Client::create($request->all());

        return redirect()->route('admin.clients');
    }

    public function edit(ClientRequest $request, $id)
    {
        $data = $request->validated();
        $client = Client::find($id);
        $client->update($data);
        return redirect()->back();
    }

    public function destroy($id)
    {
        Client::destroy($id);
        return redirect()->route('admin.clients');
    }

    public function search(Request $request)
    {
        $array = explode('/', $request->search['url']);
        $clients = DB::table(end($array))
            ->where('title', 'Like', '%' . $request->search['search'] . '%')
            ->orderBy($request->search['sort'])->get();
        $output = '';
        $categories = Category::all();
        foreach ($clients as $product) {
            $output .= view('admin.partials.cards.products', compact('product', 'categories'));
        }
        return $output;
    }
}
