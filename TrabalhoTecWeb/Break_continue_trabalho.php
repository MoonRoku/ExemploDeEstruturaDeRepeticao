<h2>Break/continue</h2>
<p>Pode parar um laço de repetição por completo ou pular um passo de repetição.</p>

<?php 
#Brinquedo com altura minima de 1.65 m com capacidade maxima de 4 pessoas
$c = 4; #capacidade
$fila_altura = [1.53, 1.64, 1.75, 2.01, 1.88, 1.76, 1.79]; #fila para entrar
foreach ($fila_altura as $num){
    if ($c === 0) break; #Quebra a repetição
    if ($num <=  1.65) continue; #Pular pessoas com altura menor que 1.65
    echo "$num m <br>"; #pessoas que entraram
    $c -= 1; #capacidade reduzida
}  
?>

