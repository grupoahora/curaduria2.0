<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\specificVar;

class SpecificvarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.folders.specificvars.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.folders.specificvars.create');
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
            'varc1' => 'required',
            'varc2' => 'required',
            'varc3' => 'required',
            'varc4' => 'required',
            'varc5' => 'required',
            'varc6' => 'required',
            'varc8' => 'required',
            'varc9' => 'required',
            'varc10' => 'required',
            'varc11' => 'required',
            'varc12' => 'required',
        ]);

        $specificvar = specificVar::create([
            'name' => $request['name'],
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
        
        return redirect()->route('admin.users.folders.specificvars.index', compact('specificvar'))->with('info', 'La variable específica se creó con éxito');

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
    public function edit(specificVar $specificvar, Request $request)
    {
        return view('admin.users.folders.specificvars.edit', compact('specificvar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, specificVar $specificvar)
    {
        $request->validate([
            'name' => 'required',
            'varc1' => 'required',
            'varc2' => 'required',
            'varc3' => 'required',
            'varc4' => 'required',
            'varc5' => 'required',
            'varc6' => 'required',
            'varc8' => 'required',
            'varc9' => 'required',
            'varc10' => 'required',
            'varc11' => 'required',
            'varc12' => 'required',
        ]);

        $specificvar->update($request->all());
        return redirect()->route('admin.users.folders.specificvars.index', $specificvar)->with('info', 'La variable específica se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(specificVar $specificvar)
    {
        $specificvar->delete();
        return redirect()->route('admin.users.folders.specificvars.index', $specificvar)->with('info', 'La variable específica se eliminó con éxito');
    }
}
