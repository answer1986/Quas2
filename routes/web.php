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
    return view('/index');
});

Route::get('/nuestros_servicios', function(){
    return view ('/nuestros_servicios');
});

Route::get('/casos_exito', function(){
    return view ('/casos_exito');
});

Route::get('/sobre_nosotros', function(){
    return view ('/sobre_nosotros');
});

Route::get('/contacto', function(){
    return view ('/contacto');
});
