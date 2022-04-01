<?php

namespace App\Http\Controllers;

use App\Models\Proceeding;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProceedingRequest;
use App\Http\Requests\UpdateProceedingRequest;
use App\Models\Archive;

class ProceedingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proceedings = Proceeding::get();
        return view('users.proceedings.index', compact('proceedings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.proceedings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProceedingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proceedings = Proceeding::create([
            'radicado' => $request->radicado,
            'cc' => $request->cc,
            'classproceeding' => $request->classproceeding,
            'descriptionclassproceeding' => $request->descriptionclassproceeding,
            'fechaexpedicion' => $request->fechaexpedicion,
        ]);
        return redirect()->route('admin.proceedings.edit', compact('proceedings'))->with('info', 'El Procedimiento se a creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proceeding  $proceeding
     * @return \Illuminate\Http\Response
     */
    public function show(Proceeding $proceeding)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proceeding  $proceeding
     * @return \Illuminate\Http\Response
     */
    public function edit(Proceeding $proceedings)
    {
        return view('users.proceedings.edit', compact('proceedings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProceedingRequest  $request
     * @param  \App\Models\Proceeding  $proceeding
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proceeding $proceedings)
    {
        $proceedings->update([
            'radicado' => $request->radicado,
            'classproceeding' => $request->classproceeding,
            'descriptionclassproceeding' => $request->descriptionclassproceeding,
        ]);
        /* dd($proceedings); */
        return redirect()->route('admin.proceedings.index')->with('info', 'El procedimiento se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proceeding  $proceeding
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proceeding $proceedings)
    {
        $proceedings->delete();

        return redirect()->route('admin.proceedings.index')->with('info', 'El procedimiento se eliminó con éxito');

    }
    public function upload_archive(Request $request, $id)
    {

        if ($request->ajax()) {
            $proceeding = proceeding::find($id);
            $urlarchives = [];
            $filesLink = array();
            if ($request->hasFile('files')) {
                $archives = $request->file('files');

                foreach ($archives as $key => $archive) {
                    $archive_name = time() . '_' . $archive->getClientOriginalName();
                    $ruta = public_path() . '/archive/';
                    $archive->move($ruta, $archive_name);
                    $urlarchives[]['url'] = '/archive/' . $archive_name;;
                    $url = '/archive/' . $archive_name;
                    array_push($filesLink, $url);
                }
            }
            $proceeding->archives()->createMany($urlarchives);
            return $filesLink;
        }
    }
    public function file_delete_archive(Request $request)
    {
        $archive = Archive::find($request->key);
        $archive->delete();
        return true;
    }
}
