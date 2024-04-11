<?php
    require_once "Coche.php";

    require_once "head.html";

    $miCoche = new Coche(
        "Ford", "Focus");


    $otroCoche = new Coche(
        "Seat", "Ibiza");

    $ferrari = new Coche(
        "Ferrari", "Testarrosa");


    $miCoche->repostarCombustible(20);
    $miCoche->mover(100);
    $miCoche->mover(250);

    $miCoche->setMatricula("4456XCV");

    // miCoche.cantidadCombustible
    // $miCoche->cantidadCombustible

    $miCoche->pintaInfo();



    $otroCoche->repostarCombustible(50);
    $otroCoche->mover(100);
    //echo $otroCoche->getCantidadCombustible();

    $otroCoche->pintaInfo();




    $ferrari->pintaInfo();
