<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\DocSale;
use Illuminate\Http\Request;

class DocSaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clients.sales.docsales.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.sales.docsales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, DocSale $docsale)
    {
        $request->validate([
            'name' => 'required',
            'url' => 'required',
            'form_id' => 'required',
            'sale_id' => 'required',
        ]);

        $docsale = DocSale::create([
            'name' => $request['name'],
            'url' => $request['url'],
            'form_id' => $request['form_id'],
            'sale_id' => $request['sale_id'],
        ]);

        return redirect()->route('clients.sales.docsales.index', $docsale)->with('info', '¡LOS DOCUMENTOS SE CARGARON CON ÉXITO!');
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
    public function edit(Request $request, DocSale $docsale)
    {
        return view('clients.sales.docsales.edit', $docsale);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DocSale $docsale)
    {
        $request->validate([
            'name' => 'required',
            'url' => 'required',
            'form_id' => 'required',
            'sale_id' => 'required',
        ]);

        $docsale->update($request->where('user_id', auth()->user()->id)->paginate());
        return redirect()->route('clients.sales.docsales.index', compact('sale'))->with('info', '¡LOS DOCUMENTOS SE ACTUALIZARON CON ÉXITO!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DocSale $docsale)
    {
        $docsale->delete();
        return redirect()->route('clients.sales.docsales.index', $docsale)->with('info', '¡EL DOCUMENTO SE ELIMINÓ CON ÉXITO!');
    }
}
