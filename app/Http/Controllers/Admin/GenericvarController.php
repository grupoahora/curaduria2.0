<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GenericVar;
use Illuminate\Http\Request;

class GenericvarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.transacts.genericvars.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.transacts.genericvars.create');
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
            'vart1' => 'required',
            'vart2' => 'required',
            'vara1' => 'required',
            'vara2' => 'required',
            'vara3' => 'required',
            'vara4' => 'required',
            'vara5' => 'required',
            'vara6' => 'required',
            'vara7' => 'required',
            'varc1' => 'required',
            'varc2' => 'required',
            'varc3' => 'required',
            'varc4' => 'required',
            'varc5' => 'required',
            'varc6' => 'required',
            'varc7' => 'required',
            'varc8' => 'required',
            'varc9' => 'required',
            'varc10' => 'required',
            'varc11' => 'required',
            'varc12' => 'required',
        ]);

        $genericvar = GenericVar::create([
            'name' => $request['name'],
            'vart1' => $request['vart1'],
            'vart2' => $request['vart2'],
            'vara1' => $request['vara1'],
            'vara2' => $request['vara2'],
            'vara3' => $request['vara3'],
            'vara4' => $request['vara4'],
            'vara5' => $request['vara5'],
            'vara6' => $request['vara6'],
            'vara7' => $request['vara7'],
            'varc1' => $request['varc1'],
            'varc2' => $request['varc2'],
            'varc3' => $request['varc3'],
            'varc4' => $request['varc4'],
            'varc5' => $request['varc5'],
            'varc6' => $request['varc6'],
            'varc7' => $request['varc7'],
            'varc8' => $request['varc8'],
            'varc9' => $request['varc9'],
            'varc10' => $request['varc10'],
            'varc11' => $request['varc11'],
            'varc12' => $request['varc12'],

        ]);
        return redirect()->route('admin.users.transacts.genericvars.index', compact('genericvar'))->with('info', 'La variable genérica se creó con éxito');

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
    public function edit(GenericVar $genericvar, Request $request)
    {
        return view('admin.users.transacts.genericvars.edit', compact('genericvar'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GenericVar $genericvar)
    {
        $request->validate([
            'name' => 'required',
            'vart1' => 'required',
            'vart2' => 'required',
            'vara1' => 'required',
            'vara2' => 'required',
            'vara3' => 'required',
            'vara4' => 'required',
            'vara5' => 'required',
            'vara6' => 'required',
            'vara7' => 'required',
            'varc1' => 'required',
            'varc2' => 'required',
            'varc3' => 'required',
            'varc4' => 'required',
            'varc5' => 'required',
            'varc6' => 'required',
            'varc7' => 'required',
            'varc8' => 'required',
            'varc9' => 'required',
            'varc10' => 'required',
            'varc11' => 'required',
            'varc12' => 'required',
        ]);

        $genericvar->update($request->all());
        return redirect()->route('admin.users.transacts.genericvars.index', $genericvar)->with('info', 'La variable genérica se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(GenericVar $genericvar)
    {
        $genericvar->delete();
        return redirect()->route('admin.users.transacts.specificvars.index', $genericvar)->with('info', 'La variable específica se eliminó con éxito');
    }
}
