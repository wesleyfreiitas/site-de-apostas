<?php

#time
$time1 = $_GET['time1'];
#foto
$foto1 = $_GET['foto1'];
##################################
#time
$time2 = $_GET['time2'];
#foto
$foto2 = $_GET['foto2'];
##################################
#time
$time3 = $_GET['time3'];
#foto
$foto3 = $_GET['foto3'];
##################################
#time
$time4 = $_GET['time4'];
#foto
$foto4 = $_GET['foto4'];
##################################
#time
$time5 = $_GET['time5'];
#foto
$foto5 = $_GET['foto5'];
##################################
#time
$time6 = $_GET['time6'];
#foto
$foto6 = $_GET['foto6'];
##################################
#time
$time7 = $_GET['time7'];
#foto
$foto7 = $_GET['foto7'];
##################################
#time
$time8 = $_GET['time8'];
#foto
$foto8 = $_GET['foto8'];
##################################
#time
$time9 = $_GET['time9'];
#foto
$foto9 = $_GET['foto9'];
##################################
#time
$time10 = $_GET['time10'];
#foto
$foto10 = $_GET['foto10'];
##################################
#time
$time11 = $_GET['time11'];
#foto
$foto11 = $_GET['foto11'];
##################################
#time
$time12 = $_GET['time12'];
#foto
$foto12 = $_GET['foto12'];
##################################
#time
$time13 = $_GET['time13'];
#foto
$foto13 = $_GET['foto13'];
##################################
#time
$time14 = $_GET['time14'];
#foto
$foto14 = $_GET['foto14'];
##################################
#time
$time15 = $_GET['time15'];
#foto
$foto15 = $_GET['foto15'];
##################################
#time
$time16 = $_GET['time16'];
#foto
$foto16 = $_GET['foto16'];
##################################
#time
$time17 = $_GET['time17'];
#foto
$foto17 = $_GET['foto17'];
##################################
#time
$time18 = $_GET['time18'];
#foto
$foto18 = $_GET['foto18'];
##################################
#time
$time19 = $_GET['time19'];
#foto
$foto19 = $_GET['foto19'];
##################################
#time
$time20 = $_GET['time20'];
#foto
$foto20 = $_GET['foto20'];
##################################

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
$sql = "INSERT INTO tab2times (nome, foto) VALUES ('$time1', '$foto1')";
$sql2 = "INSERT INTO tab2times (nome, foto) VALUES ('$time2', '$foto2')";
$sql3 = "INSERT INTO tab2times (nome, foto) VALUES ('$time3', '$foto3')";
$sql4 = "INSERT INTO tab2times (nome, foto) VALUES ('$time4', '$foto4')";
$sql5 = "INSERT INTO tab2times (nome, foto) VALUES ('$time5', '$foto5')";
$sql6 = "INSERT INTO tab2times (nome, foto) VALUES ('$time6', '$foto6')";
$sql7 = "INSERT INTO tab2times (nome, foto) VALUES ('$time7', '$foto7')";
$sql8 = "INSERT INTO tab2times (nome, foto) VALUES ('$time8', '$foto8')";
$sql9 = "INSERT INTO tab2times (nome, foto) VALUES ('$time9', '$foto9')";
$sql10 = "INSERT INTO tab2times (nome, foto) VALUES ('$time10', '$foto10')";
$sql11 = "INSERT INTO tab2times (nome, foto) VALUES ('$time11', '$foto11')";
$sql12 = "INSERT INTO tab2times (nome, foto) VALUES ('$time12', '$foto12')";
$sql13 = "INSERT INTO tab2times (nome, foto) VALUES ('$time13', '$foto13')";
$sql14 = "INSERT INTO tab2times (nome, foto) VALUES ('$time14', '$foto14')";
$sql15 = "INSERT INTO tab2times (nome, foto) VALUES ('$time15', '$foto15')";
$sql16 = "INSERT INTO tab2times (nome, foto) VALUES ('$time16', '$foto16')";
$sql17 = "INSERT INTO tab2times (nome, foto) VALUES ('$time17', '$foto17')";
$sql18 = "INSERT INTO tab2times (nome, foto) VALUES ('$time18', '$foto18')";
$sql19 = "INSERT INTO tab2times (nome, foto) VALUES ('$time19', '$foto19')";
$sql20 = "INSERT INTO tab2times (nome, foto) VALUES ('$time20', '$foto20')";

// $mysqli_query faz a execução da query (veja que a query
//está na variável $sql) e guarda o resultado na variável 
//$res guarda um conjunto de dados e vai servir de
//parâmentros para outras funções

$res = mysqli_query($link, $sql);
$res2 = mysqli_query($link, $sql2);
$res3 = mysqli_query($link, $sql3);
$res4 = mysqli_query($link, $sql4);
$res5 = mysqli_query($link, $sql5);
$res6 = mysqli_query($link, $sql6);
$res7 = mysqli_query($link, $sql7);
$res8 = mysqli_query($link, $sql8);
$res9 = mysqli_query($link, $sql9);
$res10 = mysqli_query($link, $sql10);
$res11 = mysqli_query($link, $sql11);
$res12 = mysqli_query($link, $sql12);
$res13 = mysqli_query($link, $sql13);
$res14 = mysqli_query($link, $sql14);
$res15 = mysqli_query($link, $sql15);
$res16 = mysqli_query($link, $sql16);
$res17 = mysqli_query($link, $sql17);
$res18 = mysqli_query($link, $sql18);
$res19 = mysqli_query($link, $sql19);
$res20 = mysqli_query($link, $sql20);

//Obtem uma linha do conjunto de resultados como uma matriz associativa 
//em que a chave é o nome do campo no banco de dados (metadados) e
//o valor é o valor do registro.

if ($res) {
	echo "Os registros foram inseridos com sucesso.";
}elseif ($res2) {
	echo "Os registros foram inseridos com sucesso.";
}elseif ($res3) {
	echo "Os registros foram inseridos com sucesso.";
}elseif ($res4) {
	echo "Os registros foram inseridos com sucesso.";
}elseif ($res5) {
	echo "Os registros foram inseridos com sucesso.";
}elseif ($res6) {
	echo "Os registros foram inseridos com sucesso.";
}elseif ($res7) {
	echo "Os registros foram inseridos com sucesso.";
}elseif ($res8) {
	echo "Os registros foram inseridos com sucesso.";
}elseif ($res9) {
	echo "Os registros foram inseridos com sucesso.";
}elseif ($res10) {
	echo "Os registros foram inseridos com sucesso.";
}elseif ($res11) {
	echo "Os registros foram inseridos com sucesso.";
}elseif ($res12) {
	echo "Os registros foram inseridos com sucesso.";
}elseif ($res13) {
	echo "Os registros foram inseridos com sucesso.";
}elseif ($res14) {
	echo "Os registros foram inseridos com sucesso.";
}elseif ($res15) {
	echo "Os registros foram inseridos com sucesso.";
}elseif ($res16) {
	echo "Os registros foram inseridos com sucesso.";
}elseif ($res17) {
	echo "Os registros foram inseridos com sucesso.";
}elseif ($res18) {
	echo "Os registros foram inseridos com sucesso.";
}elseif ($res19) {
	echo "Os registros foram inseridos com sucesso.";
}elseif ($res20) {
	echo "Os registros foram inseridos com sucesso.";
}else {
    echo "não foi possível executar [$sql] no banco de dados: " . mysqli_error($link);
    exit;
}

header ("location: superusuario3.php");
//encerrar a conexãos
mysqli_close($link);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="superusuario3.php">Clique aqui e cadastre outra rodada!</a>
</body>
</html>