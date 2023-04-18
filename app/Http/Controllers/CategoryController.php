<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('category.index')->with(['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $description = $request->input('description');

        Category::insert([
            'description' => $description,
            'created_at' => date('Y-m-d'),
        ]);
        return redirect('category');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Edit the specified resource.
     */
    public function edit(string $id)
    {
        $findCategory = Category::findOrFail($id);
        $selectExample = DB::table('categories')
        ->select('*')
        ->where('id', '=', $id)
        ->get();
     /*   echo "findExample <br>";
        printf($findCategory);
        echo "selectExample <br>";
        printf($selectExample);
        */
        return view('category.edit')->with(['category'=>$findCategory]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        date_default_timezone_set('America/Costa_Rica');

        $category = Category::findOrFail($id);

        $id = $request->input('id');
        $description = $request->input('description');

       $category->description= $description;
       $category->updated_at = date('Y-m-d');
       $category->save();
        return redirect('category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect('category');
    }
}
