<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Transact;
use App\Models\Form;
use App\Models\User;
use Illuminate\Http\Request;

class TransactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.transacts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Transact $transact)
    {
        return view('admin.users.transacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Transact $transact)
    {
        $request->validate([
            'name_products' => 'required',
            'category_name' => 'required',
            'update_at' => 'required'
            
        ]);

        $transact = Transact::create([
            'name_products' => $request['name_products'],
            'category_name' => $request['category_name'],
            'updated_at' => $request['update_at'],

        ]);

        return redirect()->route('admin.users.transacts.edit', $transact)->with('info', 'El trámite se creó con éxito');


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
    public function edit(Transact $transact, Request $request)
    {
        
        $forms = Form::where('id')->where('transact_id', $transact->id)->get();
        return view('admin.users.transacts.edit', compact('transact', 'forms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transact $transact)
    {
        $request->validate([
            'name_products' => 'required',
            'category_name' => 'required',
            'updated_at' => 'required'
            
        ]);

        $transact->update($request->all());

        return redirect()->route('admin.users.transacts.edit', $transact)->with('info', 'El trámite se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transact $transact)
    {
        $transact->delete();

        return redirect()->route('admin.users.transacts.index', $transact)->with('info', 'El trámite se eliminó con éxito');
    }
}
