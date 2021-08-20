<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Folder;
use App\Models\Sale;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class ClientController extends Controller
{
    public function __construct()
    {
        /* $this->middleware('can:admin.clients.index')->only('index');
        $this->middleware('can:admin.clients.edit')->only('edit', 'update'); */
        
    }

    public function index() 
    {
        return "Hello";
    }

    public function edit(Sale $sale)
    {

        
        $roles = Role::all();

        Return view('admin.clients.edit', compact('client', 'roles'));
    }
    public function show(Client $client, Folder $folder)
    {

        $folder = Folder::all();
        Return view('admin.users.show', $client);
    }

    public function update(Request $request, Client $client)
    {
        $client->roles()->sync($request->roles);
       
        

        return redirect()->route('admin.clients.edit', $client)->with('info', 'Se asignó el rol correctamente');
    }

}
