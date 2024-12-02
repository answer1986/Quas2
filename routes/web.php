<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CatalogoController;

use App\Http\Controllers\Admin\LoginController;

use App\Http\Controllers\Admin\PostController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;


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



#blog

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{post:slug}', [BlogController::class, 'show'])->name('blog.show');

// Rutas de autenticación
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rutas del panel de administración
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    
    // Rutas para el CRUD de posts
    Route::get('/posts', [PostController::class, 'index'])->name('admin.posts.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('admin.posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('admin.posts.store');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('admin.posts.update');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('admin.posts.destroy');
});