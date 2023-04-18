<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::resource('/category', 'App\Http\Controllers\CategoryController');
Route::resource('/option', 'App\Http\Controllers\OptionController');

Route::get('/', function () {
    return view('welcome');
})->name('hi');

Route::get('/msg/{name_param}/center/{last_name_param}/last', function ($name_param, $last_name_param) {
    $data = [
        'name' => $name_param,
        'last_name' => $last_name_param
    ];
    return $data;
});

Route::get('/other/{name?}', function ($name = 'customer not found') {
    return '<h1> data: '.$name.'</h1>';
})->where('name','[A-Za-z]+');

Route::get('/other_route/{name?}', function () {
    return redirect()->route('hi');
});
