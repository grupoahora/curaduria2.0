<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:users.index')->only('index');
        $this->middleware('can:users.create')->only('create', 'store');
        $this->middleware('can:users.edit')->only('edit', 'update');
        $this->middleware('can:users.show')->only('show');
        $this->middleware('can:users.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Role $role)
    {
        $users = User::all();
        $users_with_role = Role::with('users')->get();
        $roles = Role::all();
        $permissions = Permission::all()->groupBy('view');
        return view('users.index', compact('users', 'users_with_role', 'roles', 'permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request['name'],
            'surname' => $request['surname'],
            'email' => $request['email'],
            'password' => bcrypt('12345678'),
        ])->assignRole($request->rols);

        return redirect()->route('admin.users.index')->with('info', 'Usuario creado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $iduser = User::find($user->id);
        $roles = Role::all();
        return view('users.edit', compact('user', 'roles', 'iduser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if ($request->get('rols')) {
            $user->roles()->sync($request->get('rols'));
        }
        if ($request->get('roles')) {
            $user->roles()->sync($request->get('roles'));
        }

        $user->update([
            'name' => $request['name'],

            'surname' => $request['surname'],

            'email' => $request['email'],
        ]);

        /* dd($proceedings); */
        return redirect()->route('admin.users.index')->with('info', 'El Usuario se actualiz贸 con 茅xito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.users.index')->with('info', 'El Usuario se elimin贸 con 茅xito');
    }
}
