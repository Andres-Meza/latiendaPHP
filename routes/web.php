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
            "BANDERA"   => "https://media.istockphoto.com/photos/colombias-flag-picture-id508515841?k=20&m=508515841&s=612x612&w=0&h=fQ7fexfVO7hp2nmRUmvJcv6fm37aC0UaYnDWkbc5x_o=",
            "CAPITAL"   => "Bogota",
            "MONEDA"    => "Peso",
            "POBLACION" => "50,88 millones",
            "CIUDAD"  => [
                "Ibague",
                "Cali",
                "Medellin"
            ]
        ],

        "Peru"     => [
            "BANDERA"   => "https://www.1zoom.me/big2/874/329175-alexfas01.jpg",
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
            "BANDERA"   => "https://thumbs.dreamstime.com/b/ejemplo-de-la-bandera-paraguay-128878179.jpg",
            "CAPITAL"   => "Asuncion",
            "MONEDA"    => "Guarani Paraguayo",
            "POBLACION" => "7,133 millones",
            "CIUDAD"  => [
                "Ciudad del este",
                "Encarnacion",
                "Asuncion"
            ]
        ],

        "Portugal" => [
            "BANDERA"   => "https://i.pinimg.com/originals/73/a1/fe/73a1fe3f2b54c3a6e19244afc79a0b29.jpg",
            "CAPITAL"   => "Lisboa",
            "MONEDA"    => "Euro",
            "POBLACION" => "10,31 millones",
            "CIUDAD"  => [
                "Ciudad del este",
                "Encarnacion",
                "Asuncion"
            ]
        ],

        "España" => [
            "BANDERA"   => "https://thumbs.dreamstime.com/b/ejemplo-realista-de-la-bandera-espa%C3%B1a-137962625.jpg",
            "CAPITAL"   => "Madrid",
            "MONEDA"    => "Euro",
            "POBLACION" => "47,35 millones",
            "CIUDAD"  => [
                "Ciudad del este",
                "Encarnacion",
                "Asuncion"
            ]
        ],

        "Argentina" => [
            "BANDERA"   => "https://ofiud15vr8emqg3q66yua12g-wpengine.netdna-ssl.com/wp-content/uploads/2020/07/argentinean-flag-1024x569-1.jpg",
            "CAPITAL"   => "Buenos Aires",
            "MONEDA"    => "Peso",
            "POBLACION" => "45,38 millones",
            "CIUDAD"  => [
                "Ciudad del este",
                "Encarnacion",
                "Asuncion"
            ]
        ],

        "Brasil" => [
            "BANDERA"   => "https://media.istockphoto.com/photos/colombias-flag-picture-id508515841?k=20&m=508515841&s=612x612&w=0&h=fQ7fexfVO7hp2nmRUmvJcv6fm37aC0UaYnDWkbc5x_o=",
            "CAPITAL"   => "Brasilia",
            "MONEDA"    => "Real Brasileño",
            "POBLACION" => "212,6 millones",
            "CIUDAD"  => [
                "Ciudad del este",
                "Encarnacion",
                "Asuncion"
            ]
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
