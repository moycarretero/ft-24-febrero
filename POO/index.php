<?php
    require_once "Coche.php";

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

    echo $miCoche->getCantidadCombustible();

    $otroCoche->repostarCombustible(50);
    $otroCoche->mover(100);
    echo $otroCoche->getCantidadCombustible();

