<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Folder;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('can:admin.users.index')->only('index');
        $this->middleware('can:admin.users.edit')->only('edit', 'update');
        
    }

    public function index() {
        return view('admin.users.index');
    }

    public function edit(User $user)
    {

        
        $roles = Role::all();

        Return view('admin.users.edit', compact('user', 'roles'));
    }
    public function show(User $user, Folder $folder)
    {

        $folder = Folder::all();
        Return view('admin.users.show', compact('user', 'folder'));
    }

    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
       
        

        return redirect()->route('admin.users.edit', $user)->with('info', 'Se asignó el rol correctamente');
    }
}