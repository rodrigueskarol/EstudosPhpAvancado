<?php

require 'calculadora.php';

$notas = [9, 3, 10, 5, 10];

$calculadora = new calculadora();
$media = $calculadora->calculaMedia ($notas);

if ($media) {
    echo "<p>A média de notas é: $media</p>";
} else {
    echo "<p> Não foi possível calcular a média</p>";
}

 