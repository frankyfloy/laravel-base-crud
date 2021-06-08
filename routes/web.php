<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\{
    ComicController
};
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


/*
  Controller RESOURCE (CRUD) che gestisce le route in automatico
*/
Route::resource('comics', 'ComicController');

// Route::get('comics/{comic}', 'ComicController','show');

/*
  Sintassi nuova per mostrare le view,
  + possibilità di passare valori come argomenti
  + possibilità di utilizzare le -- Request -- come argomenti da passare alle VIEW;
*/
// Route::view('/', 'home', ['articles' => config('comics')])->name('home');
// ---------------------------------------------------------------------------------


// Metodo senza utilizzare un conttroller resource
// Route::get('/', [ComicController::class , 'index']);
// ---------------------------------------------------------------------------------



// Route::view('/details/{id}', 'details', ['article', config('comics')])->name('details');







// Sintassi base view
// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function () {
//     // $dataArticles = config('comics');
//     // $pageActive = 'comics';
//     return view('home')->with('articles', config('comics'));
// })->name('home');
//
// Route::get('/details/{id}', function ($id) {
//     $dataArticles = config('comics');
//     // $pageActive = 'comics';
//     return view('details')->with('article', $dataArticles[$id]);
// })->name('details');
