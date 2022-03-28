<?php

namespace App\Http\Controllers;

use App\Models\Format;
use App\Http\Requests\StoreFormatRequest;
use App\Http\Requests\UpdateFormatRequest;
use App\Models\Archive;
use App\Models\Image;
use Illuminate\Http\Request;

class FormatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formats = Format::get();
        return view('users.formats.index', compact('formats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.formats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFormatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $format = Format::create([
            'name' => $request->name,
            'description' => $request->description,

        ]);
        return redirect()->route('formats.edit', $format)->with('info', 'El acta se a creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proceeding  $proceeding
     * @return \Illuminate\Http\Response
     */
    public function show(Format $format)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proceeding  $proceeding
     * @return \Illuminate\Http\Response
     */
    public function edit(Format $format)
    {

        return view('users.formats.edit', compact('format'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProceedingRequest  $request
     * @param  \App\Models\Proceeding  $proceeding
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Format $format)
    {
        $format->update([
            'name' => $request->name,
            'description' => $request->description,

        ]);
        /* dd($proceedings); */
        return redirect()->route('formats.index')->with('info', 'El acta se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proceeding  $proceeding
     * @return \Illuminate\Http\Response
     */
    public function destroy(Format $format)
    {
        $format->delete();

        return redirect()->route('formats.index')->with('info', 'El acta se eliminó con éxito');
    }
    public function upload_image(Request $request, $id)
    {

        if ($request->ajax()) {
            $format = Format::find($id);
            $urlimages = [];
            $filesLink = array();
            if ($request->hasFile('files')) {
                $images = $request->file('files');

                foreach ($images as $key => $image) {
                    $image_name = time() . '_' . $image->getClientOriginalName();
                    $ruta = public_path() . '/image/';
                    $image->move($ruta, $image_name);
                    $urlimages[]['url'] = '/image/' . $image_name;;
                    $url = '/image/' . $image_name;
                    array_push($filesLink, $url);
                }
            }
            $format->images()->createMany($urlimages);
            return $filesLink;
        }
    }
    public function file_delete(Request $request)
    {
        $image = Image::find($request->key);
        $image->delete();
        return true;
    }
    public function upload_archive(Request $request, $id)
    {

        if ($request->ajax()) {
            $format = Format::find($id);
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
            $format->archives()->createMany($urlarchives);
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
