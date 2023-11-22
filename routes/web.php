<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CineStarController;

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

Route::controller(CineStarController::class)->group(function () {
	Route::get('/', 'Index')						    ->name('Index');
	Route::get('Cines', 'Cines')						->name('Cines');
	Route::get('Cine/{id}', 'Cine')					    ->name('Cine');
	Route::get('Peliculas/{id}', 'Peliculas')           ->name('Peliculas');
	Route::get('Pelicula/{id}', 'Pelicula')	            ->name('Pelicula');
});