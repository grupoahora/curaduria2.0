<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blade;
use Illuminate\Http\Request;

class BladeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.folders.blades.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.folders.blades.create');
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
            'folder_id' => 'required'
        ]);

        $blade = Blade::create([
            'name' => $request['name'],
            'folder_id' => $request['folder_id']
        ]);

        return redirect()->route('admin.users.folders.blades.index', compact('blade'))->with('info', 'La plantilla se creó con éxito');
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
    public function edit(Blade $blade, Request $request)
    {
        return view('admin.users.folders.blades.edit', compact('blade'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blade $blade)
    {
        $request->validate([
            'name' => 'required',
            'folder_id' => 'required'
        ]);

        $blade->update($request->all());
        return redirect()->route('admin.users.folders.blades.index', $blade)->with('info', 'La plantilla se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blade $blade)
    {
        $blade->delete();
        return redirect()->route('admin.users.folders.blades.index', $blade)->with('info', 'La plantilla se eliminó con éxito');

    }
}
