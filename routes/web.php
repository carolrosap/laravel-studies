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


Route::get('/',['as' => 'site.home','uses' => 'Site\HomeController@index']);

Route::get('/contato/{id?}', ['uses'=>'ContatoController@index']);
Route::post('/contato', ['uses'=>'ContatoController@criar']);
Route::put('/contato', ['uses'=>'ContatoController@editar']);

Route::get('/admin/cursos',['as' => 'admin.cursos','uses' => 'Admin\CursoController@index']); //lista todos os cursos cadastrados, admin.cursos é apelido
Route::get('/admin/adicionar',['as' => 'admin.cursos.adicionar','uses' => 'Admin\CursoController@adicionar']); 
Route::post('/admin/salvar',['as' => 'admin.cursos.salvar','uses' => 'Admin\CursoController@salvar']); 
Route::get('/admin/editar/{id}',['as' => 'admin.cursos.editar','uses' => 'Admin\CursoController@editar']); 
Route::put('/admin/atualizar/{id}',['as' => 'admin.cursos.atualizar','uses' => 'Admin\CursoController@atualizar']); //atualizar o que for alterado no editar
Route::get('/admin/deletar/{id}',['as' => 'admin.cursos.deletar','uses' => 'Admin\CursoController@deletar']);


/*Route::post('/contato', function(){
    //var_dump($_POST);
    dd($_POST); //var_dump do laravel e dá exit
    return "Contato POST";
});
Route::put('/contato', function(){
    return "Contato PUT";
});*/
