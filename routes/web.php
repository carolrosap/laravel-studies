<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato/{id?}', ['uses'=>'ContatoController@index']);
Route::post('/contato', ['uses'=>'ContatoController@criar']);
Route::put('/contato', ['uses'=>'ContatoController@editar']);


/*Route::post('/contato', function(){
    //var_dump($_POST);
    dd($_POST); //var_dump do laravel e dá exit
    return "Contato POST";
});
Route::put('/contato', function(){
    return "Contato PUT";
});*/
