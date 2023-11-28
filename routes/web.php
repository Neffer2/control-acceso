<?php

use Illuminate\Support\Facades\Route;
use App\Models\Invitado;

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
    return view('dashboard');
})->middleware(['auth']);

Route::get('/sorteo', function () {
    return view('sorteo');
})->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard'); 
})->middleware(['auth'])->name('dashboard');

Route::get('/metricas', function (){
    $invitados = Invitado::where('asistencia', 1)->count();
    return view('metricas', ['invitados' => $invitados]);
})->middleware(['auth']);

require __DIR__.'/auth.php';
