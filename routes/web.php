<?php
App::setLocale('es');

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


// Route::get('/', function () {
//     return view('welcome');
// });

// /**Route::view('/', 'home', ['nombre' => 'Carlos'])->name('inicio');
// /Route::view('/acercade', 'acercade')->name('acercade');
// /Route::get('catalogo/{id}','CatalogoController@show')->name('producto.show');
// /Route::view('/contacto', 'contacto')->name('contacto');
// /Route::post('contacto','MensajesController@store');
// */
// Route::view('/', 'home')->name('inicio');
// Route::view('/acercade', 'acercade')->name('acercade');

// Route::get('/catalogo', 
//            'ProductoController@index')->name('productos.index');
// Route::get('/catalogo/{id}', 
//            'ProductoController@show')->name('productos.show');

// // Route::view('/contacto', 'contacto')->name('contacto');
// Route::post('contacto', 'MensajeController@store')->name('mensajes.store');

// // Arquitectura REST
// Route::view('/contacto','contacto')->name('contacto');
// Route::get('mensajes/crear', 'MensajesController@create') 
//        ->name('crear-mensaje');
// // Route::get('/catalogo', 
// //            'ProductoController@index')->name('productos.index');

// // Route::get('/catalogo/{id}', 
// //            'ProductoController@show')->name('productos.show');
// Route::get('/catalogo/{producto}', 
//            'ProductoController@show')->name('productos.show');
// Route::post('mensajes', 'MensajesController@store')->name('guardar-mensaje');
// Route::get('mensajes', 'MensajesController@index')
//        ->name('ver-mensajes');
// Route::get('mensajes/{id}', 'MensajesController@show')
//        ->name('buscar-mensaje');
// Route::get('mensajes/{id}/editar', 'MensajesController@edit')
//        ->name('editar-mensaje');
// Route::delete('mensajes/{id}', 'MensajesController@destroy')
//        ->name('eliminar-mensaje');


// Route::get('/catalogo','ProductoController@index')->name('productos.index');
// Route::get('/catalogo/crear', 'ProductoController@create')->name('productos.create');


// Route::post('/catalogo/', 'ProductoController@store')->name('productos.store');


Route::view('/', 'inicio')->name('inicio');


Route::view('/acercade', 'acercade')->name('acercade');

Route::get('/catalogo',
           'ProductoController@index')->name('productos.index');


Route::get('/catalogo/crear', '                
           ProductoController@create')->name('productos.create');


Route::post('/catalogo/', 
            'ProductoController@store')->name('productos.store');


Route::get('/catalogo/{producto}',
            'ProductoController@show')->name('productos.show');

Route::view('/contacto', 'contacto')->name('contacto');


Route::post('contacto',
            'MensajeController@store')->name('mensajes.store');