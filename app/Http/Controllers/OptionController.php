<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;
use Illuminate\Support\Facades\DB;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $options = Option::all();
        return view('option.index')->with(['options'=>$options]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('option.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $option = $request->input('option');
        $category_id = $request->input('category_id');

        Option::insert([
            'option' => $option,
            'category_id' => $category_id,
            'created_at' => date('Y-m-d'),
        ]);
        return redirect('option');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $findOption = Option::findOrFail($id);
        $selectExample = DB::table('options')
        ->select('*')
        ->where('id', '=', $id)
        ->get();
     /*   echo "findExample <br>";
        printf($findCategory);
        echo "selectExample <br>";
        printf($selectExample);
        */
        return view('option.edit')->with(['option'=>$findOption]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        date_default_timezone_set('America/Costa_Rica');

        $option = Option::findOrFail($id);

        $id = $request->input('id');
        $optionDesc = $request->input('option');
        $category_id = $request->input('category_id');

        $option -> option = $optionDesc;
        $option -> category_id = $category_id;

       $option->updated_at = date('Y-m-d');
       $option->save();
        return redirect('option');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $option = Option::findOrFail($id);
        $option->delete();
        return redirect('option');
    }
}
