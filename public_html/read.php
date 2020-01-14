<?php
$link = mysqli_connect("localhost", "id8181529_advinhafut", "123456", "id8181529_advinhafut");

if (!$link) {
    echo "Erro: Não foi possível conectar-se ao MySQL." . PHP_EOL;
    echo "Debug num erro: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debug msg erro: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Conexão com mySQL estabelecida com sucesso <BR>" . PHP_EOL;
echo "Informação do Host: " . mysqli_get_host_info($link) . PHP_EOL;



// $mysqli_query faz a execução da query e guarda o resultado na variável $res
// $res guarda um conjunto de dados e vai servir de parâmentros para outras funções
$res = mysqli_query($link, "SELECT email, login, senha FROM usuarios");

//Obtem uma linha do conjunto de resultados como uma matriz associativa 
//em que a chave é o nome do campo no banco de dados (metadados) e
//o valor é o valor do registro.
while ($row = mysqli_fetch_assoc($res)) {
        printf ("<BR>%s (%s)", $row["nome"], $row["login"]);
}

//encerrar a conexãos
mysqli_close($link);
?>