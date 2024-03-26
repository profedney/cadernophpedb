<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //teste do php
    echo"PHP funcionando!"."<br>";
    //variaveis de conexão
    $servidor="localhost";
    $usuario="escola";
    $senha="123";
    $nomedb="escola";
    //conexão
    $conn= new mysqli($servidor, $usuario, $senha, $nomedb);
    //checa conexão
    if ($conn->connect_error){
        die("Conexao falhou: " . $conn->connect_error);
    }
    echo"Conectado ao banco de dados"."<br>";

    ?>
    
</body>
</html>