<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;



class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:categories.index')->only('index');
        $this->middleware('can:categories.create')->only('create');
        $this->middleware('can:categories.store')->only('store');
        $this->middleware('can:categories.edit')->only('edit', 'update');
        $this->middleware('can:categories.show')->only('show');
        $this->middleware('can:categories.destroy')->only('destroy');
    }
    public function index()
    {
        $categories = Category::get();
        return view('users.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('users.categories.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* dd($request); */
        $category = Category::create([
            'name' => $request->name,
            'icon' => $request->icon,

        ]);
        return redirect()->route('admin.categories.edit', $category)->with('info', 'La categoria se a creado con éxito');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('users.categories.edit', compact('category'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->update([
            'name' => $request->name,
            'icon' => $request->icon,

        ]);
        /* dd($proceedings); */
        return redirect()->route('admin.categories.edit', $category)->with('info', 'La categoria se a editado con éxito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.categories.index')->with('info', 'La Categoria se eliminó con éxito');
    }
}
