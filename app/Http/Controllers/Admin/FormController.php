<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.folders.forms.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.folders.forms.create');
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
            'form_id' => 'required',
            'name' => 'required',
            'url' => 'required'
        ]);

        $form = Form::create([
            'form_id' => $request['form_id'],
            'name' => $request['name'],
            'url' => $request['url']
        ]);

        return redirect()->route('admin.users.folders.forms.index', compact('form'))->with('info', 'El formulario se creó con éxito');
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
    public function edit(Form $form, Request $request)
    {
        return view('admin.users.folders.forms.edit', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        $request->validate([
            'form_id' => 'required',
            'name' => 'required',
            'url' => 'required'
        ]);

        $form->update($request->all());
        return redirect()->route('admin.users.folders.forms.index', compact('form'))->with('info', 'El formulario se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        $form->delete();
        return redirect()->route('admin.users.folders.forms.index', $form)->with('info', 'El formulario se eliminó con éxito');
    }
}
