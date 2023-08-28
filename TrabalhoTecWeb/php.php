<?php

    $phpnome = $_GET["htmlnome"];
    $phpnum = $_GET["htmlnum"];

    $cont =0;

    while($cont < $phpnum){
        echo "nome: ".$phpnome, "<br><br>";
        $cont++;
    }

    

?>