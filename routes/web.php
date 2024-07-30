<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Login', function () {
    return view('login');
});
Route::get('/Registro', function () {
    return view('registration');
});
Route::get('/RecuperarSenha', function () {
    return view('password-recovery');
});
Route::get('/MudancaSenha', function () {
    return view('password-change');
});
Route::get('/Cursos', function () {
    return view('courses');
});
