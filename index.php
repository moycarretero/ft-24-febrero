<?php
    declare( strict_types = 1 );

    //echo "Hola mundo";

    $numero = 3;
    $pi = 3.1416;
    $nombre = 'Moises';
    $apellidos = "Carretero";

    //echo "Me llamo $nombre $apellidos";

    $verdadero = true;
    $falso = false;

    $nulo = null;

    $frutas = [
        "fresa",
        "manzana",
        "naranja",
        44 => "aguacate",
        "45XF98" => "sandia",
        22 => "pera",
        "plátano",
        2 => "higo"
    ];

    //echo $frutas[44];
    $frutas[66] = "mandarina";

    $frutas[] = "ciruela";
    array_push($frutas, "cereza");

    echo "<ul>";
    foreach ($frutas as $clave => $fruta){
        echo "<li>La clave de $fruta es $clave</li>";
    }



    /*
     * for (let i=0; i<10; i++)
     * {
     *
     * }
     * */

    echo "</ul>";

    $name = $_GET['name'];
    $apellidos = $_GET['apellidos'];

    $resultado = 5;

    //echo "Me llamo $name $apellidos";

    require_once "utils.php";


    $res = sumar(5,"4");

    echo "El resultado de la suma es $res";
    saludo("Anita");
    echo dameFecha();

