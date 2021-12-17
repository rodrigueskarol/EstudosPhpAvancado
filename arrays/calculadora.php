<?php

class Calculadora
 {
     public function calculaMedia(array $notas): ?float
     {
        $quantidaDeNotas = sizeof($notas);

    if($quantidaDeNotas !== 0) {
        $soma = 0;
        for ($i= 0; $i < $quantidaDeNotas; $i++) { 
            $soma = $soma + $notas[$i];
        }
        
        $media = $soma / $quantidaDeNotas;
        
        return $media;
             
    } else {
        return null;
    }
    }
}