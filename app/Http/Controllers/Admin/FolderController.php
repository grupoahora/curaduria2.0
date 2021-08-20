<?php

<<<<<<< HEAD
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Folder;
use App\Models\Form;
use App\Models\User;
=======
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
>>>>>>> 1362026c017fd3811ae4ca4db8dbf5ce33605e85
use Illuminate\Http\Request;

class FolderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        return view('admin.users.folders.index');
=======
        //
>>>>>>> 1362026c017fd3811ae4ca4db8dbf5ce33605e85
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function create(Folder $folder)
    {
        return view('admin.users.folders.create');
=======
    public function create()
    {
        //
>>>>>>> 1362026c017fd3811ae4ca4db8dbf5ce33605e85
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function store(Request $request, Folder $folder)
    {
        
        $request->validate([
            'user_id' => 'required',
            'namefolder' => 'required',
            'category_id' => 'required',
            
        ]);

        $folder = Folder::create([
            'user_id' => $request['user_id'],
            'namefolder' => $request['namefolder'],
            'category_id' => $request['category_id'],

        ]);

        return redirect()->route('admin.users.folders.index', $folder)->with('info', 'El trámite se creó con éxito');


=======
    public function store(Request $request)
    {
        //
>>>>>>> 1362026c017fd3811ae4ca4db8dbf5ce33605e85
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
<<<<<<< HEAD
    public function edit(Folder $folder, Request $request, Form $form)
    {
        
        /* $forms = Form::where('id')->where('folder_id', $folder->id)->get(); */
        return view('admin.users.folders.edit', compact('folder', 'form'));
=======
    public function edit($id)
    {
        //
>>>>>>> 1362026c017fd3811ae4ca4db8dbf5ce33605e85
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function update(Request $request, Folder $folder, Form $form)
    {
        $request->validate([
            'name_products' => 'required',
            'category_name' => 'required',
            
        ]);

        
        $form->update($request->all());

        return redirect()->route('admin.users.folders.edit', $form)->with('info', 'El trámite se actualizó con éxito');
=======
    public function update(Request $request, $id)
    {
        //
>>>>>>> 1362026c017fd3811ae4ca4db8dbf5ce33605e85
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function destroy(Folder $folder)
    {
        $folder->delete();

        return redirect()->route('admin.users.folders.index', $folder)->with('info', 'El trámite se eliminó con éxito');
=======
    public function destroy($id)
    {
        //
>>>>>>> 1362026c017fd3811ae4ca4db8dbf5ce33605e85
    }
}
