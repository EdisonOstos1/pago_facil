<?php

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
    return view('welcome');
});
Route::get('arreglosm', function () {

    $paises = [
        "colombia" => [
            "capital" => "Bogota",
            "moneda" => "peso",
            "poblacion" => 50,
        ],

        "alemania" => [
            "capital" => "Berlin",
            "Moneda" => "Euro",
            "Poblacion" => "82,79 Millones"
        ],


        "peru" => [
            "capital" => "Lima",
            "Moneda" => "Sol",
            "Polacion" => "32,17 millones"
        ]
    ];

    //      echo "<pre>";
    //    var_dump($paises);
    //    echo "<pre>";

    // REcorrer Arreglo

    foreach ($paises as $pais => $informacion) {

        echo "<h1> $pais</h1>";
        foreach ($informacion as $clave => $valor) {

            echo"$clave: $valor";
        };
        echo "<hr />";
    };
});
