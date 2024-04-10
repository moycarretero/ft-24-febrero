<?php


class Coche
{
    private string $matricula;
    private string $marca;
    private string $modelo;
    private float $cantidadCombustible;
    private int $numKilometroRecorridos;

    public function __construct(string $marca, string $modelo)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;

        $this->cantidadCombustible = 0;
        $this->numKilometroRecorridos = 0;
    }

    function mover(int $distancia)
    {
        $this->numKilometroRecorridos += $distancia;
        $this->cantidadCombustible -= $distancia*0.05;
    }

    function repostarCombustible(float $cantidadCombustible)
    {
        $this->cantidadCombustible += $cantidadCombustible;
    }

    function pasarITV()
    {

    }

    public function getMatricula(): string
    {
        return $this->matricula;
    }

    public function setMatricula(string $matricula): void
    {
        $this->matricula = $matricula;
    }

    public function getMarca(): string
    {
        return $this->marca;
    }

    public function setMarca(string $marca): void
    {
        $this->marca = $marca;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function setModelo(string $modelo): void
    {
        $this->modelo = $modelo;
    }

    public function getCantidadCombustible(): float
    {
        return $this->cantidadCombustible;
    }

    public function setCantidadCombustible(float $cantidadCombustible): void
    {
        $this->cantidadCombustible = $cantidadCombustible;
    }

    public function getNumKilometroRecorridos(): int
    {
        return $this->numKilometroRecorridos;
    }

    public function setNumKilometroRecorridos(int $numKilometroRecorridos): void
    {
        $this->numKilometroRecorridos = $numKilometroRecorridos;
    }

    function pintaInfo()
    {
        echo "<ul>";
        echo "<li>Marca: $this->marca</li>";
        echo "<li>Modelo: $this->modelo</li>";
        echo "<li>CantidadCombustible: $this->cantidadCombustible</li>";
        echo "<li>KmRecorridos: $this->numKilometroRecorridos</li>";
        echo "</ul>";
    }

}
