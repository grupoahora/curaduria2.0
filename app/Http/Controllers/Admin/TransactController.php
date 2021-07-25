<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Transact;
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
        return view('admin.transacts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.transacts.create');
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
            'user_id' => 'required',
            'name_products' => 'required',
            'category_id' => 'required',
            
        ]);

        $transact = Transact::create([
            'user_id' => $request['user_id'],
            'name_products' => $request['name_products'],
            'category_id' => $request['category_id'],

        ]);

        return redirect()->route('admin.transacts.edit', $transact)->with('info', 'El trámite se creó con éxito');


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
    public function edit(Transact $transact)
    {
        return view('admin.transacts.index', $transact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

        return redirect()->route('admin.transacts.index', $transact)->with('info', 'El trámite se eliminó con éxito');
    }
}
