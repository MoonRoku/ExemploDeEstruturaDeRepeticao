<h2>Foreach</h2>
<p>É uma função que percorre todos os elemntos de um array e os usa.</p>
<?php
//Foreach para descobrir se um número é par ou ímpar
$algarismos = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]; // array que será usado
foreach ($algarismos as $num){
    if ($num % 2 == 0){
        echo "O número {$num} é par! <br>";
    }
    else{
        echo "O número {$num} é impar! <br>";
    }
}

//Foreach que mostra o resultado dos números divididos por 10
$numeros = [190, 225, 357, 498, 500];
foreach ($numeros as &$soma){
    $soma = $soma / 10;
    echo "{$soma} <br>";
}
print_r($numeros);
?>