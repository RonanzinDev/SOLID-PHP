<?php

namespace Poligono\Poligonos;

class Quadrado extends Retangulo {
    protected float $largura;
    protected float $altura;
    public function setLargura(float $largura): void
    {
        $this->largura = $largura;
        $this->altura = $largura;
    }
    public function setAltura(float $altura): void
    {
        $this->largura = $altura;
        $this->altura = $altura;
    }
    public function getLargura(): float {return $this->largura;}

    public function getAltura(): float {return $this->altura;}
}