<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h2>Essas foram as configurações escolhidas para seu Notebook:</h2>
    <?php
    $processador = $_GET["intel"];
    $memoria = $_GET["memoria"];
    $hd = $_GET["hd"];
    $sysop = $_GET["sys"];
    
    echo "$processador";
       
        echo "<br>";
        echo "$memoria";
        echo "<br>";
        echo "$hd";
        echo "<br>";
        echo "$sysop";
        echo "<br>";
        echo "<br>";
        
    ?>
    </center>
    
</body>
</html>