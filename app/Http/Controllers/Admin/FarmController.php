<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\Farm;
use App\Models\User;

class FarmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $farms = Farm::all();
        return view('admin.users.farms.index', compact('farms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $users = User::all();

        return view('admin.users.farms.create', compact('users'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'ubicacion' => 'required',
        ]);

        $farm = Farm::create($request->all());

        $farm->users()->sync($request->users);

        return redirect()->route('admin.users.farms.edit', $farm)->with('info', 'La Finca se Creo con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Farm $farm)
    {
        $farms = Farm::all();
        return view('admin.users.farms.show', compact('farms'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Farm $farm)
    {
        $users = User::all();
        return view('admin.users.farms.edit', compact('farm', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Farm $farm)
    {
        $request->validate([
            'name' => 'required',
            'ubicacion' => 'required',
        ]);

        $farm->update($request->all());

        $farm->users()->sync($request->users);

        return redirect()->route('admin.users.farms.edit', $farm)->with('info', 'La Finca se actualizo con Exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Farm $farm)
    {
        $farm->delete();

        return redirect()->route('admin.users.farms.index', $farm)->with('info', 'La Finca se elimino con Exito');
    }
}
