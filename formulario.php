<?php

    $usuario = $_POST['usuario'];
    $password = $_POST['contraseña'];
    $fichero = $_FILES['fichero'];



    echo "El usuario es $usuario la contraseña $password";

    print_r($fichero);

    //Para leer el fichero -> file_get_contents()
