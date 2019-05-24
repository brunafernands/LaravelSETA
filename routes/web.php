<?php


Route::get('/', function () {
    return view('principal');
});


Route::get('/alunos', function () {
    return view('alunos');
});


Route::get('/cursos', function () {
    return view('cursos');
});


Route::get('/disciplinas', function () {
    return view('disciplinas');
});


Route::get('/professores', function () {
    return view('professores');
});


Route::get('/home', function () {
    return view('home');
});

