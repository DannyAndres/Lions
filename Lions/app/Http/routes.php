<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home/home');
});

//siguen las reglas de un CRUD en php

//crear un item -> mandar un post o contenido
//Route::post();

//leer un item -> mostrarlo por pantalla
//Route::get();

//actualizar un item -> para que cargue denuevo
//Route::put();

//borrar un item
//Route::delete();

// si queremos crear una nueva ruta no tenemos por que darle una funcion como sale mas arriba
// le puedes dar un controllador que conecte la vista con la ruta
// Route::get('test', 'TestController@index');
// la idea es que la logica quede en los controladores y aqui solo el ruteo
