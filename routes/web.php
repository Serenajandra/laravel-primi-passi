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
    $family = "La nostra famiglia";
    return view('home', compact('family'));
});
Route::get('/aboutUs', function () {
    $members = [
        "humans" => ["serena", "Marco", "David", "Michele"],
        "dogs" => ["Lupen", "Mia"],
        "cats" => ["Mina", "Frank"]
    ];

    return view('aboutUs', $members);
});
