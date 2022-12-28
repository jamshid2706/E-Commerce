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
}
