<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.transacts.documents.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.transacts.documents.create');
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
            'url' => 'required',
            'form_id' => 'required',
            'user_id' => 'required'
        ]);

        $document = Document::create([
            'name' => $request['name'],
            'url' => $request['url'],
            'form_id' => $request['form_id'],
            'user_id' => $request['user_id']
        ]);

        return redirect()->route('admin.users.transacts.documents.index', compact('document'));
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
    public function edit(Document $document, Request $request)
    {
        return view('admin.users.transacts.documents.index', compact('document'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        $request->validate([
            'name' => 'required',
            'url' => 'required',
            'form_id' => 'required',
            'user_id' => 'required'
        ]);

        $document->update($request->all());
        return redirect()->route('admin.users.transacts.documents.index', $document)->with('info', 'El documento se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        $document->delete();
        return redirect()->route('admin.users.transacts.documents.index', $document)->with('info', 'El documento se eliminó con éxito');
    }
}
