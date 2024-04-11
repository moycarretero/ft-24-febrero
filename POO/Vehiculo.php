<?php

class Vehiculo
{
    private int $numRuedas;

    protected string $matricula;

    public function getNumRuedas(): int
    {
        return $this->numRuedas;
    }

    public function setNumRuedas(int $numRuedas): void
    {
        $this->numRuedas = $numRuedas;
        echo $this->getMatricula();
    }

    private function getMatricula(): string
    {
        return $this->matricula;
    }

    private function setMatricula(string $matricula): void
    {
        $this->matricula = $matricula;
    }

}
