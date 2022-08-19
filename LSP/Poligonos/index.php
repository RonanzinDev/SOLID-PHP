<?php

use App\Poligono;
use Poligono\Poligonos\Retangulo;

require __DIR__."/vendor/autoload.php";

$poligono = new Poligono();
$poligono->setForma(new Retangulo());
$poligono->getForma()->setAltura(5);
$poligono->getForma()->setLargura(10);
echo "<pre>";
print_r($poligono);
echo "</pre>";
echo '<h3>Aréa do retangulo ' . $poligono->getArea().' </h3>';