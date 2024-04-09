<?php

function sumar(int $num1, int $num2): int
{
    $resultado = $num1 + $num2;

    return $resultado;
}

function saludo (string $nombre): void
{
    echo "Buenas tardes $nombre";
}

function dameFecha(): string
{
    return date("d-m-Y");
}
