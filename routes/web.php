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
    return view('index');
})->name('inicio');

Route::get('/about', function () {
    return view('about');
})->name('quienes_somos');

Route::get('/services', function () {
    return view('services');
})->name('servicios');

Route::get('/contact', function () {
    return view('contact');
})->name('contacto');

Route::get('/login', function () {
    return view('login');
})->name('iniciar_sesion');

Route::get('/registerUser', function () {
    return view('registerUser');
})->name('registrar_usu');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('panel_adm');

Route::get('/users', function () {
    return view('user');
})->name('lista_usuarios');

Route::get('/Userregister', function () {
    return view('Userregister');
})->name('registrar_usuario');

Route::get('/product', function () {
    return view('product');
})->name('lista_productos');

Route::get('/registerProd', function () {
    return view('registerProd');
})->name('registrar_producto');

