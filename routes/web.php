<?php

$this->resource('alunos','AlunoController');
$this->get('alunos/pg/{page}','AlunoController@paginate')->name('alunos.paginate');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
