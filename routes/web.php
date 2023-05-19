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
    $data = [
        'page_title' => 'About classe 92',
        'description' => 'lorem ipsum dolor',
        'students' => [
            'Mario Rossi',
            'Luigi Verdi',
            'Silvia Neri',
            'Antonio Bianchi',
        ],
        'teachers' => [],
    ];
    return view('home', $data);
});
Route::get('/contacts', function () {
    $page_title = 'Contatti';
    $boolean_class = 'Classe 92';
    return view('contact', compact('page_title', 'boolean_class'));
})->name('contatti');