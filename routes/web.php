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

//ruta bienvenido
Route::get('/', function () {
    return view('principal');
});

//histortia
Route::get('hotel/historia', function () {
    return view('hotel.historia');

    
});

//ubicacion
Route::get('hotel/ubicación', function () {
    return view('hotel.ubicación');
});

//ruta mision vision
Route::get('hotel/vision-mision', function () {
    return view('hotel.vision');
});


//eventos
Route::get('servicios/eventos/{id}', function ($id) {
    return view('servicios.eventos', array('id'=>$id));
  });

//habitaciones
Route::get('servicios/habitaciones', function () {
    return view('servicios.habitaciones');
});



//eventos
Route::get('reservas', function () {
    return view('reservas.reservas');
});

//contactos
Route::get('contactos', function () {
    return view('contacto');
});

