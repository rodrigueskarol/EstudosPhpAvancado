<?php

$nomes = "Giovanni, João Maria, Pedro";

$array_nomes = explode(", ", $nomes);

foreach ($array_nomes as $nomes) {
    echo "<p> Olá $nomes</p>";

}