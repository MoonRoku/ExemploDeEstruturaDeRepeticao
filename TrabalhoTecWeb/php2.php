<html>
    <head>
        <title>php</title>
        <style>
            form{
                display: flex;
                flex-direction: column;
                gap: 10px;
            }
           
        </style>
    </head>
    <body>
        
        <h1>Exemplo 1:</h1>
            <?php
                $c = 0;
                while($c < 10){
                    echo $c, "<br>";
                    $c++;
                }
            ?>
        <br>
        <h1>Exemplo 2</h1>
        <form name="while" method="get" action="php.php">
            <label>Digite seu verbo:</label>
            <input type="text" name="htmlnome" size="40px">


            <label>Digite um numero</label>
            <input type="number" name="htmlnum" width='40px'>
            <div>
                <button type="submit" name="enviar">Enviar</button>
                <button type="reset" name="limpar" placeholder="Limpar">Limpar</button>
            </div>
        </form>
    </body>
    
</html>


    
    