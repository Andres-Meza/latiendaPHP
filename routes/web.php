<?php

use Illuminate\Support\Facades\Route;

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

//primera ruta
Route::get('hola', function () {
    return "Hello World";
});

Route::get('arreglos', function () {
    $estudiantes = 
    [
        "An" => "Ana",
        "Ju" =>"Juana",
        "Pa"=>"Paola"
    ];
    echo "<pre>";
    var_dump ($estudiantes);
    echo "<hr/>";

    //agregar posicion
    $estudiantes["Cr"] = "Cristian";
    $estudiantes["Ad"] = "Andres";

    var_dump ($estudiantes);
    echo "<hr/>";
    
    unset($estudiantes ["Ju"]);
    var_dump ($estudiantes);
    echo "</pre>";


});

//Ruta de paises
Route::get('paises', function () {
    // echo "Paises";
    $paises = 
    [
        "Colombia" => [
            "CAPITAL"   => "Bogota",
            "MONEDA"    => "Peso",
            "POBLACION" => "50,88 millones",
            "Ciudad"  => [
                "Ibague",
                "Cali",
                "Medellin"
            ]
        ],

        "Peru"     => [
            "CAPITAL"   => "Lima",
            "MONEDA"    => "Sol",
            "POBLACION" => "32,97 millones",
            "CIUDAD"  => [
                "Lima",
                "Cusco",
                "Arequipa"
            ]
        ],

        "Paraguay" => [
            "CAPITAL"   => "Asuncion",
            "MONEDA"    => "Guarani Paraguayo",
            "POBLACION" => "7,133 millones",
            "Ciudad"  => [
                "Ciudad del este",
                "Encarnacion",
                "Asuncion"
            ]
        ],

        "Portugal" => [
            "CAPITAL"   => "Lisboa",
            "MONEDA"    => "Euro",
            "POBLACION" => "10,31 millones"
        ],

        "España" => [
            "CAPITAL"   => "Madrid",
            "MONEDA"    => "Euro",
            "POBLACION" => "47,35 millones"
        ],

        "Argentina" => [
            "CAPITAL"   => "Buenos Aires",
            "MONEDA"    => "Peso",
            "POBLACION" => "45,38 millones"
        ],

        "Brasil" => [
            "CAPITAL"   => "Brasilia",
            "MONEDA"    => "Real Brasileño",
            "POBLACION" => "212,6 millones"
        ],

    ];
    
    // echo "<pre>";
    // var_dump ($paises);
    // echo "<hr/>";

    // foreach($paises as $pais => $infopais){
    //     var_dump ($pais);
    //     echo "<h1> $pais </h1>";
    //     echo "CAPITAL:".$infopais["CAPITAL"];
    //     echo "MONEDA:".$infopais["MONEDA"];
    //     echo "POBLACION:".$infopais["POBLACION"];
    //     echo "<hr/>";
    // }

    // foreach($paises as $pais => $infopais){
    //     echo "<h1> $pais </h1>";
        
    //     foreach($infopais as $clave => $valor){
    //         echo "$clave : $valor <br/>";
    //     }
    //     echo "<hr/>";
    // }

    //Mostrar la vista de los paises
    Return view('paises') -> with("paises" , $paises);
    echo "</pre>";
});
