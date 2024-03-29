<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CatalogoController;


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



Route::get('/nuestros_servicios', function(){
    return view ('/nuestros_servicios');
});



Route::get('/sobre_nosotros', function(){
    return view ('/sobre_nosotros');
});

Route::get('/contacto', [ContactanosController::class, 'index'])->name('contacto.index');

Route::post('/contacto', [ContactanosController::class, 'store'])->name('contacto.store');

Route::get('/', function () {
    return view('/index');
});
Route::get('/index', [ContactController::class, 'showForm'])->name('contacto.index');
Route::post('/index', [ContactController::class, 'submitForm'])->name('contact.submit');





Route::get('/terminos', function(){
    return view ('/terminos');
});

Route::get('/casos_exito', [CatalogoController::class, 'showForm'])->name('casos_exito');
Route::post('/casos', [CatalogoController::class, 'store'])->name('casos.store');

Route::get('/casos', [CatalogoController::class, 'downloadFile'])->name('casos.downloadFile');
