<?php
$original = "Loop for com strings";
$invertida = "";

for ($i = strlen($original) - 1; $i >= 0; $i--) {
    $char = $original[$i];
    $invertida .= $char;
}

echo "String original: $original <br>";
echo "String invertida: $invertida <br>";
?>