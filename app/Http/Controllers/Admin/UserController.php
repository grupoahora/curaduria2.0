<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Models\Farm;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.users.index')->only('index');
        $this->middleware('can:admin.users.edit')->only('edit', 'edit2', 'update', 'update2');
        
    }

    public function index() {
        return view('admin.users.index');
    }

    public function edit(User $user)
    {

        $roles = Role::all();
        

        Return view('admin.users.edit', compact('user', 'roles'));
    }

    public function editdos(User $user)
    {

        $farms = Farm::all();

        Return view('admin.users.edit', compact('user', 'farms'));
    }

    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
       

        return redirect()->route('admin.users.edit', $user)->with('info', 'se asigno los roles correctamente');
    }
    
    public function updatefarms(Request $request, User $user)
    {
        $user->farms()->sync($request->farms);

        return redirect()->route('admin.users.editfarms', $user)->with('info', 'se asigno las fincas correctamente');
    }
}
