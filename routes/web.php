<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $comics_array = config('comics');

    $comics = [];

    foreach ($comics_array as $comic) {
        $comics[] = $comic;
    }

    $data = [
        'comics' => $comics
    ];

    return view('home', $data);
})->name('homepage');


Route::get('/comic/{id}', function ($id) {

    $comics_array = config('comics');
    $selected_comic = null;

    foreach ($comics_array as $comic){
        if ($comic['id'] == $id ){
            $selected_comic = $comic;
        }
    }

    if (!$selected_comic) {
        abort('404');
    }

    $data = [
        'comic_info' => $selected_comic
    ];

    return view('comic', $data);
})->name('comic_details');