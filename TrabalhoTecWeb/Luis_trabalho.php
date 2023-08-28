<?php

    for ($chance = 3; $chance >= 1; $chance--){
        echo "Tente adivinhar o número de 0 a 20, você tem $chance chances<br>";
        if ($chance == 2){
            echo "Era isso mesmo...<br>";
            break;
        }
        else{
            echo "Você errou.<br>";
        }
    }
    if ($chance = 1){
        echo "Suas chances acabaram. Fim de Jogo <br>";
    }
?>