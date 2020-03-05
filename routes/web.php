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
            "Moneda" => "peso",
            "poblacion" => 50,
            "importantes" => ["Bogota","Medellin","Cali"]
        ],

        "alemania" => [
            "capital" => "Berlin",
            "Moneda" => "Euro",
            "poblacion" => "82,79 Millones",
            "importantes" => ["Berlín","Múnich","bging"]
        ],


        "peru" => [
            "capital" => "Lima",
            "Moneda" => "Sol",
            "poblacion" => "32,17 millones",
            "importantes" => ["Arequipa","Cusco","next"]
        ]
    ];

    //      echo "<pre>";
    //    var_dump($paises);
    //    echo "<pre>";

    // REcorrer Arreglo

    // foreach ($paises as $pais => $informacion) {

    //     echo "<h1> $pais</h1>";
    //     foreach ($informacion as $clave => $valor) {

    //         echo"$clave: $valor";
    //     };
    //     echo "<hr />";
    // };

    // mostrar la vista

    return view('paises')
    ->with('paises' , $paises);
});
