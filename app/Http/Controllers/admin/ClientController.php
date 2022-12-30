<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use App\Models\Client;

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
}
