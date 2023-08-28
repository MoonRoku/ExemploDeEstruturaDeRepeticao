<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport">
    <title>Exemplo de aplicação de ForEach</title>

    <style>
        body{
            text-align: center;
        }
    </style>

</head>
<body>
    <h1>Exemplos de Aplicação do ForEach</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $texto = $_POST["entrada"];
        
        $arr = [-1 => 'São Paulo', 'Rondônia', 'Acre', 'Campo minado'];

        array_push($arr, $texto);

        foreach($arr as $indice => $fim){
            echo "$indice => $fim  <br>";
        }
    }
    ?>

    <form method="POST">
        <input type="text" name='entrada'>
        <button type='submit' id='But'>GO!!!</button>
    </form>

</body>
</html>