<?php

$email = $_GET['email'];
$user = $_GET['user'];
$senha = $_GET['senha'];

$link = mysqli_connect("localhost", "id8181529_advinhafut", "123456", "id8181529_advinhafut");

if (!$link) {
    echo "Erro: Não foi possível conectar-se ao MySQL." . PHP_EOL;
    echo "Debug num erro: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debug msg erro: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Conexão com mySQL estabelecida com sucesso <BR>" . PHP_EOL;
echo "Informação do Host: " . mysqli_get_host_info($link) . PHP_EOL;


//$sql é uma var que guarda um comando SQL para inserir
//dados no banco 
$sql = "INSERT INTO usuarios (email, login, senha) VALUES ('$email', '$user', '$senha')";

// $mysqli_query faz a execução da query (veja que a query
//está na variável $sql) e guarda o resultado na variável 
//$res guarda um conjunto de dados e vai servir de
//parâmentros para outras funções

$res = mysqli_query($link, $sql);

//Obtem uma linha do conjunto de resultados como uma matriz associativa 
//em que a chave é o nome do campo no banco de dados (metadados) e
//o valor é o valor do registro.

if ($res) {
	echo "<a href = login.php> Os registros foram inseridos com sucesso.</a>";
} else {
    echo "não foi possível executar [$sql] no banco de dados: " . mysqli_error($link);
    exit;
}

//encerrar a conexãos
mysqli_close($link);

header ("Location: login.php");

?>