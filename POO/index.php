<?php
    require_once "Coche.php";
    require_once "Vehiculo.php";

    require_once "head.html";

    $miCoche = new Coche(
        modelo: "Focus", marca:"Ford");


    $otroCoche = new Coche(
        "Seat", "Ibiza");

    $ferrari = new Coche(
        "Ferrari", "Testarrosa");


    $miCoche->repostarCombustible(20);
    $miCoche->mover(100);
    $miCoche->mover(250);

    echo $miCoche->cantidadCombustible;


    // miCoche.cantidadCombustible
    // $miCoche->cantidadCombustible

    $miCoche->pintaInfo();



    $otroCoche->repostarCombustible(50);
    $otroCoche->mover(100);
    //echo $otroCoche->getCantidadCombustible();

    $otroCoche->pintaInfo();

    $otroCoche->mover(5000);

    $otroCoche->pintaInfo();

    $ferrari->pintaInfo();

    $vehiculo = new Vehiculo();
