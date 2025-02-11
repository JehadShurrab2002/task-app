<?php

use Carbon\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $name = 'JEHAD';
    $departments = [
        '1' => 'Tic',
        '2' => 'Fin',
        '3' => 'Sales',
    ];
    //return view('about', ['name' => $name]);
    //return view('about')->with('name', $name);

    return view('about', compact('name' , 'departments'));
});

Route::post('/about', function () {
    $name = $_POST['name'];
    $departments = [
        '1' => 'Tic',
        '2' => 'Fin',
        '3' => 'Sales',
    ];
    return view('about', compact('name', 'departments'));
});
