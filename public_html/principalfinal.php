<?php
session_start();
$loginsession = $_SESSION['login'];
$pontos = $_SESSION['pontos'];

$conexao = mysqli_connect("localhost", "id8181529_advinhafut", "123456", "id8181529_advinhafut") or trigger_error(mysql_error());


################ JOGO #########################

#NOMETIME

$sqltime1 = "SELECT nome FROM tab4times WHERE idjogo = 1";
$querytime1 = mysqli_query($conexao,$sqltime1);

$resultadotime1 = mysqli_fetch_array($querytime1);
$time1 = $resultadotime1['nome']; 

#FOTO TIME
$sqlfoto1 = "SELECT foto FROM tab4times WHERE idjogo = 1";
$queryfoto1 = mysqli_query($conexao,$sqlfoto1);

$resultadofoto1 = mysqli_fetch_array($queryfoto1);
$foto1 = $resultadofoto1['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime2 = "SELECT nome FROM tab4times WHERE idjogo = 2";
$querytime2 = mysqli_query($conexao,$sqltime2);

$resultadotime2 = mysqli_fetch_array($querytime2);
$time2 = $resultadotime2['nome']; 

#FOTO TIME
$sqlfoto2 = "SELECT foto FROM tab4times WHERE idjogo = 2";
$queryfoto2 = mysqli_query($conexao,$sqlfoto2);

$resultadofoto2 = mysqli_fetch_array($queryfoto2);
$foto2 = $resultadofoto2['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime3 = "SELECT nome FROM tab4times WHERE idjogo = 3";
$querytime3 = mysqli_query($conexao,$sqltime3);

$resultadotime3 = mysqli_fetch_array($querytime3);
$time3 = $resultadotime3['nome']; 

#FOTO TIME
$sqlfoto3 = "SELECT foto FROM tab4times WHERE idjogo = 3";
$queryfoto3 = mysqli_query($conexao,$sqlfoto3);

$resultadofoto3 = mysqli_fetch_array($queryfoto3);
$foto3 = $resultadofoto3['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime4 = "SELECT nome FROM tab4times WHERE idjogo = 4";
$querytime4 = mysqli_query($conexao,$sqltime4);

$resultadotime4 = mysqli_fetch_array($querytime4);
$time4 = $resultadotime4['nome']; 

#FOTO TIME
$sqlfoto4 = "SELECT foto FROM tab4times WHERE idjogo = 4";
$queryfoto4 = mysqli_query($conexao,$sqlfoto4);

$resultadofoto4 = mysqli_fetch_array($queryfoto4);
$foto4 = $resultadofoto4['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime5 = "SELECT nome FROM tab4times WHERE idjogo = 5";
$querytime5 = mysqli_query($conexao,$sqltime5);

$resultadotime5 = mysqli_fetch_array($querytime5);
$time5 = $resultadotime5['nome']; 

#FOTO TIME
$sqlfoto5 = "SELECT foto FROM tab4times WHERE idjogo = 5";
$queryfoto5 = mysqli_query($conexao,$sqlfoto5);

$resultadofoto5 = mysqli_fetch_array($queryfoto5);
$foto5 = $resultadofoto5['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime6 = "SELECT nome FROM tab4times WHERE idjogo = 6";
$querytime6 = mysqli_query($conexao,$sqltime6);

$resultadotime6 = mysqli_fetch_array($querytime6);
$time6 = $resultadotime6['nome']; 

#FOTO TIME
$sqlfoto6 = "SELECT foto FROM tab4times WHERE idjogo = 6";
$queryfoto6 = mysqli_query($conexao,$sqlfoto6);

$resultadofoto6 = mysqli_fetch_array($queryfoto6);
$foto6 = $resultadofoto6['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime7 = "SELECT nome FROM tab4times WHERE idjogo = 7";
$querytime7 = mysqli_query($conexao,$sqltime7);

$resultadotime7 = mysqli_fetch_array($querytime7);
$time7 = $resultadotime7['nome']; 

#FOTO TIME
$sqlfoto7 = "SELECT foto FROM tab4times WHERE idjogo = 7";
$queryfoto7 = mysqli_query($conexao,$sqlfoto7);

$resultadofoto7 = mysqli_fetch_array($queryfoto7);
$foto7 = $resultadofoto7['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime8 = "SELECT nome FROM tab4times WHERE idjogo = 8";
$querytime8 = mysqli_query($conexao,$sqltime8);

$resultadotime8 = mysqli_fetch_array($querytime8);
$time8 = $resultadotime8['nome']; 

#FOTO TIME
$sqlfoto8 = "SELECT foto FROM tab4times WHERE idjogo = 8";
$queryfoto8 = mysqli_query($conexao,$sqlfoto8);

$resultadofoto8 = mysqli_fetch_array($queryfoto8);
$foto8 = $resultadofoto8['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime9 = "SELECT nome FROM tab4times WHERE idjogo = 9";
$querytime9 = mysqli_query($conexao,$sqltime9);

$resultadotime9 = mysqli_fetch_array($querytime9);
$time9 = $resultadotime9['nome']; 

#FOTO TIME
$sqlfoto9 = "SELECT foto FROM tab4times WHERE idjogo = 9";
$queryfoto9 = mysqli_query($conexao,$sqlfoto9);

$resultadofoto9 = mysqli_fetch_array($queryfoto9);
$foto9 = $resultadofoto9['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime10 = "SELECT nome FROM tab4times WHERE idjogo = 10";
$querytime10 = mysqli_query($conexao,$sqltime10);

$resultadotime10 = mysqli_fetch_array($querytime10);
$time10 = $resultadotime10['nome']; 

#FOTO TIME
$sqlfoto10 = "SELECT foto FROM tab4times WHERE idjogo = 10";
$queryfoto10 = mysqli_query($conexao,$sqlfoto10);

$resultadofoto10 = mysqli_fetch_array($queryfoto10);
$foto10 = $resultadofoto10['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime11 = "SELECT nome FROM tab4times WHERE idjogo = 11";
$querytime11 = mysqli_query($conexao,$sqltime11);

$resultadotime11 = mysqli_fetch_array($querytime11);
$time11 = $resultadotime11['nome']; 

#FOTO TIME
$sqlfoto11 = "SELECT foto FROM tab4times WHERE idjogo = 11";
$queryfoto11 = mysqli_query($conexao,$sqlfoto11);

$resultadofoto11 = mysqli_fetch_array($queryfoto11);
$foto11 = $resultadofoto11['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime12 = "SELECT nome FROM tab4times WHERE idjogo = 12";
$querytime12 = mysqli_query($conexao,$sqltime12);

$resultadotime12 = mysqli_fetch_array($querytime12);
$time12 = $resultadotime12['nome']; 

#FOTO TIME
$sqlfoto12 = "SELECT foto FROM tab4times WHERE idjogo = 12";
$queryfoto12 = mysqli_query($conexao,$sqlfoto12);

$resultadofoto12 = mysqli_fetch_array($queryfoto12);
$foto12 = $resultadofoto12['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime13 = "SELECT nome FROM tab4times WHERE idjogo = 13";
$querytime13 = mysqli_query($conexao,$sqltime13);

$resultadotime13 = mysqli_fetch_array($querytime13);
$time13 = $resultadotime13['nome']; 

#FOTO TIME
$sqlfoto13 = "SELECT foto FROM tab4times WHERE idjogo = 13";
$queryfoto13 = mysqli_query($conexao,$sqlfoto13);

$resultadofoto13 = mysqli_fetch_array($queryfoto13);
$foto13 = $resultadofoto13['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime14 = "SELECT nome FROM tab4times WHERE idjogo = 14";
$querytime14 = mysqli_query($conexao,$sqltime14);

$resultadotime14 = mysqli_fetch_array($querytime14);
$time14 = $resultadotime14['nome']; 

#FOTO TIME
$sqlfoto14 = "SELECT foto FROM tab4times WHERE idjogo = 14";
$queryfoto14 = mysqli_query($conexao,$sqlfoto14);

$resultadofoto14 = mysqli_fetch_array($queryfoto14);
$foto14 = $resultadofoto14['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime15 = "SELECT nome FROM tab4times WHERE idjogo = 15";
$querytime15 = mysqli_query($conexao,$sqltime15);

$resultadotime15 = mysqli_fetch_array($querytime15);
$time15 = $resultadotime15['nome']; 

#FOTO TIME
$sqlfoto15 = "SELECT foto FROM tab4times WHERE idjogo = 15";
$queryfoto15 = mysqli_query($conexao,$sqlfoto15);

$resultadofoto15 = mysqli_fetch_array($queryfoto15);
$foto15 = $resultadofoto15['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime16 = "SELECT nome FROM tab4times WHERE idjogo = 16";
$querytime16 = mysqli_query($conexao,$sqltime16);

$resultadotime16 = mysqli_fetch_array($querytime16);
$time16 = $resultadotime16['nome']; 

#FOTO TIME
$sqlfoto16 = "SELECT foto FROM tab4times WHERE idjogo = 16";
$queryfoto16 = mysqli_query($conexao,$sqlfoto16);

$resultadofoto16 = mysqli_fetch_array($queryfoto16);
$foto16 = $resultadofoto16['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime17 = "SELECT nome FROM tab4times WHERE idjogo = 17";
$querytime17 = mysqli_query($conexao,$sqltime17);

$resultadotime17 = mysqli_fetch_array($querytime17);
$time17 = $resultadotime17['nome']; 

#FOTO TIME
$sqlfoto17 = "SELECT foto FROM tab4times WHERE idjogo = 17";
$queryfoto17 = mysqli_query($conexao,$sqlfoto17);

$resultadofoto17 = mysqli_fetch_array($queryfoto17);
$foto17 = $resultadofoto17['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime18 = "SELECT nome FROM tab4times WHERE idjogo = 18";
$querytime18 = mysqli_query($conexao,$sqltime18);

$resultadotime18 = mysqli_fetch_array($querytime18);
$time18 = $resultadotime18['nome']; 

#FOTO TIME
$sqlfoto18 = "SELECT foto FROM tab4times WHERE idjogo = 18";
$queryfoto18 = mysqli_query($conexao,$sqlfoto18);

$resultadofoto18 = mysqli_fetch_array($queryfoto18);
$foto18 = $resultadofoto18['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime19 = "SELECT nome FROM tab4times WHERE idjogo = 19";
$querytime19 = mysqli_query($conexao,$sqltime19);

$resultadotime19 = mysqli_fetch_array($querytime19);
$time19 = $resultadotime19['nome']; 

#FOTO TIME
$sqlfoto19 = "SELECT foto FROM tab4times WHERE idjogo = 19";
$queryfoto19 = mysqli_query($conexao,$sqlfoto19);

$resultadofoto19 = mysqli_fetch_array($queryfoto19);
$foto19 = $resultadofoto19['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime20 = "SELECT nome FROM tab4times WHERE idjogo = 20";
$querytime20 = mysqli_query($conexao,$sqltime20);

$resultadotime20 = mysqli_fetch_array($querytime20);
$time20 = $resultadotime20['nome']; 

#FOTO TIME
$sqlfoto20 = "SELECT foto FROM tab4times WHERE idjogo = 20";
$queryfoto20 = mysqli_query($conexao,$sqlfoto20);

$resultadofoto20 = mysqli_fetch_array($queryfoto20);
$foto20 = $resultadofoto20['foto'];

###############################################
###############################################
###############################################
###############################################
$r31 = $_GET['resultado31'];
$_SESSION['jogo31'] = $r31;

$r32 = $_GET['resultado32'];
$_SESSION['jogo32'] = $r32;

$r33 = $_GET['resultado33'];
$_SESSION['jogo33'] = $r33;

$r34 = $_GET['resultado34'];
$_SESSION['jogo34'] = $r34;

$r35 = $_GET['resultado35'];
$_SESSION['jogo35'] = $r35;

$r36 = $_GET['resultado36'];
$_SESSION['jogo36'] = $r36;

$r37 = $_GET['resultado37'];
$_SESSION['jogo37'] = $r37;

$r38 = $_GET['resultado38'];
$_SESSION['jogo38'] = $r38;

$r39 = $_GET['resultado39'];
$_SESSION['jogo39'] = $r39;

$r40 = $_GET['resultado40'];
$_SESSION['jogo40'] = $r40;

$vitoria = 10;
$derrota = -5;

if ($r31 === 'V') {
	$pjogo31 = $pontos + $vitoria;
}else{
	$pjogo31 = $pontos + $derrota;
}

$pfinal31 = $pjogo31;

if ($r32 === 'E') {
	$pjogo32 = $pfinal31 + $vitoria;
}else{
	$pjogo32 = $pfinal31 + $derrota;
}

$pfinal32 = $pjogo32;

if ($r33 === 'D') {
	$pjogo33 = $pfinal32 + $vitoria;
}else{
	$pjogo33 = $pfinal32 + $derrota;
}

$pfinal33 = $pjogo33;

if ($r34 === 'E') {
	$pjogo34 = $pfinal33 + $vitoria;
}else{
	$pjogo34 = $pfinal33 + $derrota;
}

$pfinal34 = $pjogo34;

if ($r35 === 'D') {
	$pjogo35 = $pfinal34 + $vitoria;
}else{
	$pjogo35 = $pfinal34 + $derrota;
}

$pfinal35 = $pjogo35;

if ($r36 === 'V') {
	$pjogo36 = $pfinal35 + $vitoria;
}else{
	$pjogo36 = $pfinal35 + $derrota;
}

$pfinal36 = $pjogo36;

if ($r37 === 'V') {
	$pjogo37 = $pfinal36 + $vitoria;
}else{
	$pjogo37 = $pfinal36 + $derrota;
}

$pfinal37 = $pjogo37;

if ($r38 === 'V') {
	$pjogo38 = $pfinal37 + $vitoria;
}else{
	$pjogo38 = $pfinal37 + $derrota;
}

$pfinal38 = $pjogo38;

if ($r39 === 'V') {
	$pjogo39 = $pfinal38 + $vitoria;
}else{
	$pjogo39 = $pfinal38 + $derrota;
}

$pfinal39 = $pjogo39;

if ($r40 === 'V') {
	$pjogo40 = $pfinal39 + $vitoria;
}else{
	$pjogo40 = $pfinal39 + $derrota;
}

$pfinal40 = $pjogo40;

$ptotal = $pfinal40;

$link = mysqli_connect("localhost", "id8181529_advinhafut", "123456", "id8181529_advinhafut");

$sqlponto = "UPDATE usuarios SET pontos = '$ptotal' where login = '$loginsession'";
$res = mysqli_query($link, $sqlponto);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AdivinhaFut - O seu site de apostas de jogos!</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<link href="style.css" rel="stylesheet">
</head>
<body>

<!-- Navigation -->
<div class="navbar navbar-expand-md navbar-light bg-light sticky-top">

	<div class="container-fluid">
		<a href="index.html" class="navbar-brand"><span><img width="40" height="30" src="img/bola.png"></span>
			Adivinha<span style="color: lime">Fut!</span>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
      			
      			<span class="navbar-toggler-icon"></span>

      		</button>

		<div class="collapse navbar-collapse" id="navbarSite">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a href="index.html" class="nav-link">Home</a>
				</li>

				<li class="nav-item">
					<a href="login.html" class="nav-link">Login</a>
				</li>

				<li class="nav-item">
					<a href="#regulamento" class="nav-link">Regulamento</a>
				</li>

				<li class="nav-item">
					<a href="#equipe" class="nav-link">Equipe</a>
				</li>

				<li class="nav-item">
					<a href="#contato" class="nav-link">Contato</a>
				</li>
			</ul>
		</div>

		<div class="btn-group ml-auto">
		  <button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<?php echo "$loginsession" ?>
		  </button>
		  <div class="dropdown-menu dropdown-menu-right">
		    <a href="index.html"><button class="dropdown-item" type="button">Sair</button></a>
		    <button class="dropdown-item" type="button">Trocar senha</button>
		  </div>
		</div>

	</div>
</div>
<div class="container-fluid center mt-3">
	<div class="row">
		<div class="col-md-12">
			<h5>Campeonato Brasileiro <span style="color: lime">2018</span></h5>
			<p class="mt-3 display-4">
				Ranking Geral de Jogadores!
			</p>

			<p class="mt-3" style="text-align: justify;">
				<h5><span style="color: lime">Ranking 2018</span></h5>
			</p>

			<p>
				<table>
				<?php

				$conexao = mysqli_connect("localhost", "id8181529_advinhafut", "123456", "id8181529_advinhafut") or trigger_error(mysql_error());

				$sqlrankinglogin = "SELECT login FROM `usuarios` ORDER BY `usuarios`.`pontos` DESC";
				$queryrankinglogin = mysqli_query($conexao,$sqlrankinglogin);

				$sqlrankingpontos = "SELECT pontos FROM `usuarios` ORDER BY `usuarios`.`pontos` DESC";
				$queryrankingpontos = mysqli_query($conexao,$sqlrankingpontos);


				while ($resultadorankinglogin = mysqli_fetch_array($queryrankinglogin) and $resultadorankingpontos = mysqli_fetch_array($queryrankingpontos)) {
					$rankinglogin = $resultadorankinglogin['login'];
					$rankingpontos = $resultadorankingpontos['pontos'];
					echo "<b>Jogador: </b>".$rankinglogin." "."<b>Pontuação: </b>".$rankingpontos."<BR>"; 
				}

				?>
			</p>

			<hr>
			<h2 class="mt-3" align="center">Obrigado por <span style="color: lime">jogar</span>!</h2>
			<hr>
		</div>

	</div>
</div>

<br>
<br>
<footer>
	<div class="row text-center">
		<div class="col-md-4">

			<h1 class="display-4">Adivinha<span style="color: lime;">Fut!</span></h1>
			<hr class="light">
			
		</div>

		<div class="col-md-4">
			<hr class="light">
			<h5>Contato</h5>
			<hr class="light">
			<p>55 (85) 9 9999-9999</p>
			<p>email@email.com.br</p>
		</div>

		<div class="col-md-4">
			<hr class="light">
			<h5>Endereços</h5>
			<hr class="light">
			<p>Fortaleza, Ceará, 00000-000</p>
		</div>

		<div class="col-md-12">
			<hr class="light-100">
			<h5>&copy; AdivinhaFut | Todos os direitos reservados</h5>
		</div>
	</div>
</footer>

</body>
</html>
