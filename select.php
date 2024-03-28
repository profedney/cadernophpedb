<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexão com banco de Dados</title>
</head>
<body>
    <?php
    //teste do php
    echo"PHP funcionando!"."<br>";

    //inclui um arquivo php
    include 'conecta.php';

    
    //consulta ao banco de dados

    $sql = "SELECT * FROM agenda";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Nome: " . $row["nome"]. " " . $row["sobrenome"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

    ?>
    
</body>
</html>