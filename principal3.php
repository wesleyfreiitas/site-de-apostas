<?php
session_start();
$loginsession = $_SESSION['login'];
$pontos = $_SESSION['pontos'];

$conexao = mysqli_connect("localhost", "id8181529_advinhafut", "123456", "id8181529_advinhafut") or trigger_error(mysql_error());


################ JOGO #########################

#NOMETIME

$sqltime1 = "SELECT nome FROM tab3times WHERE idjogo = 1";
$querytime1 = mysqli_query($conexao,$sqltime1);

$resultadotime1 = mysqli_fetch_array($querytime1);
$time1 = $resultadotime1['nome']; 

#FOTO TIME
$sqlfoto1 = "SELECT foto FROM tab3times WHERE idjogo = 1";
$queryfoto1 = mysqli_query($conexao,$sqlfoto1);

$resultadofoto1 = mysqli_fetch_array($queryfoto1);
$foto1 = $resultadofoto1['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime2 = "SELECT nome FROM tab3times WHERE idjogo = 2";
$querytime2 = mysqli_query($conexao,$sqltime2);

$resultadotime2 = mysqli_fetch_array($querytime2);
$time2 = $resultadotime2['nome']; 

#FOTO TIME
$sqlfoto2 = "SELECT foto FROM tab3times WHERE idjogo = 2";
$queryfoto2 = mysqli_query($conexao,$sqlfoto2);

$resultadofoto2 = mysqli_fetch_array($queryfoto2);
$foto2 = $resultadofoto2['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime3 = "SELECT nome FROM tab3times WHERE idjogo = 3";
$querytime3 = mysqli_query($conexao,$sqltime3);

$resultadotime3 = mysqli_fetch_array($querytime3);
$time3 = $resultadotime3['nome']; 

#FOTO TIME
$sqlfoto3 = "SELECT foto FROM tab3times WHERE idjogo = 3";
$queryfoto3 = mysqli_query($conexao,$sqlfoto3);

$resultadofoto3 = mysqli_fetch_array($queryfoto3);
$foto3 = $resultadofoto3['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime4 = "SELECT nome FROM tab3times WHERE idjogo = 4";
$querytime4 = mysqli_query($conexao,$sqltime4);

$resultadotime4 = mysqli_fetch_array($querytime4);
$time4 = $resultadotime4['nome']; 

#FOTO TIME
$sqlfoto4 = "SELECT foto FROM tab3times WHERE idjogo = 4";
$queryfoto4 = mysqli_query($conexao,$sqlfoto4);

$resultadofoto4 = mysqli_fetch_array($queryfoto4);
$foto4 = $resultadofoto4['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime5 = "SELECT nome FROM tab3times WHERE idjogo = 5";
$querytime5 = mysqli_query($conexao,$sqltime5);

$resultadotime5 = mysqli_fetch_array($querytime5);
$time5 = $resultadotime5['nome']; 

#FOTO TIME
$sqlfoto5 = "SELECT foto FROM tab3times WHERE idjogo = 5";
$queryfoto5 = mysqli_query($conexao,$sqlfoto5);

$resultadofoto5 = mysqli_fetch_array($queryfoto5);
$foto5 = $resultadofoto5['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime6 = "SELECT nome FROM tab3times WHERE idjogo = 6";
$querytime6 = mysqli_query($conexao,$sqltime6);

$resultadotime6 = mysqli_fetch_array($querytime6);
$time6 = $resultadotime6['nome']; 

#FOTO TIME
$sqlfoto6 = "SELECT foto FROM tab3times WHERE idjogo = 6";
$queryfoto6 = mysqli_query($conexao,$sqlfoto6);

$resultadofoto6 = mysqli_fetch_array($queryfoto6);
$foto6 = $resultadofoto6['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime7 = "SELECT nome FROM tab3times WHERE idjogo = 7";
$querytime7 = mysqli_query($conexao,$sqltime7);

$resultadotime7 = mysqli_fetch_array($querytime7);
$time7 = $resultadotime7['nome']; 

#FOTO TIME
$sqlfoto7 = "SELECT foto FROM tab3times WHERE idjogo = 7";
$queryfoto7 = mysqli_query($conexao,$sqlfoto7);

$resultadofoto7 = mysqli_fetch_array($queryfoto7);
$foto7 = $resultadofoto7['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime8 = "SELECT nome FROM tab3times WHERE idjogo = 8";
$querytime8 = mysqli_query($conexao,$sqltime8);

$resultadotime8 = mysqli_fetch_array($querytime8);
$time8 = $resultadotime8['nome']; 

#FOTO TIME
$sqlfoto8 = "SELECT foto FROM tab3times WHERE idjogo = 8";
$queryfoto8 = mysqli_query($conexao,$sqlfoto8);

$resultadofoto8 = mysqli_fetch_array($queryfoto8);
$foto8 = $resultadofoto8['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime9 = "SELECT nome FROM tab3times WHERE idjogo = 9";
$querytime9 = mysqli_query($conexao,$sqltime9);

$resultadotime9 = mysqli_fetch_array($querytime9);
$time9 = $resultadotime9['nome']; 

#FOTO TIME
$sqlfoto9 = "SELECT foto FROM tab3times WHERE idjogo = 9";
$queryfoto9 = mysqli_query($conexao,$sqlfoto9);

$resultadofoto9 = mysqli_fetch_array($queryfoto9);
$foto9 = $resultadofoto9['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime10 = "SELECT nome FROM tab3times WHERE idjogo = 10";
$querytime10 = mysqli_query($conexao,$sqltime10);

$resultadotime10 = mysqli_fetch_array($querytime10);
$time10 = $resultadotime10['nome']; 

#FOTO TIME
$sqlfoto10 = "SELECT foto FROM tab3times WHERE idjogo = 10";
$queryfoto10 = mysqli_query($conexao,$sqlfoto10);

$resultadofoto10 = mysqli_fetch_array($queryfoto10);
$foto10 = $resultadofoto10['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime11 = "SELECT nome FROM tab3times WHERE idjogo = 11";
$querytime11 = mysqli_query($conexao,$sqltime11);

$resultadotime11 = mysqli_fetch_array($querytime11);
$time11 = $resultadotime11['nome']; 

#FOTO TIME
$sqlfoto11 = "SELECT foto FROM tab3times WHERE idjogo = 11";
$queryfoto11 = mysqli_query($conexao,$sqlfoto11);

$resultadofoto11 = mysqli_fetch_array($queryfoto11);
$foto11 = $resultadofoto11['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime12 = "SELECT nome FROM tab3times WHERE idjogo = 12";
$querytime12 = mysqli_query($conexao,$sqltime12);

$resultadotime12 = mysqli_fetch_array($querytime12);
$time12 = $resultadotime12['nome']; 

#FOTO TIME
$sqlfoto12 = "SELECT foto FROM tab3times WHERE idjogo = 12";
$queryfoto12 = mysqli_query($conexao,$sqlfoto12);

$resultadofoto12 = mysqli_fetch_array($queryfoto12);
$foto12 = $resultadofoto12['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime13 = "SELECT nome FROM tab3times WHERE idjogo = 13";
$querytime13 = mysqli_query($conexao,$sqltime13);

$resultadotime13 = mysqli_fetch_array($querytime13);
$time13 = $resultadotime13['nome']; 

#FOTO TIME
$sqlfoto13 = "SELECT foto FROM tab3times WHERE idjogo = 13";
$queryfoto13 = mysqli_query($conexao,$sqlfoto13);

$resultadofoto13 = mysqli_fetch_array($queryfoto13);
$foto13 = $resultadofoto13['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime14 = "SELECT nome FROM tab3times WHERE idjogo = 14";
$querytime14 = mysqli_query($conexao,$sqltime14);

$resultadotime14 = mysqli_fetch_array($querytime14);
$time14 = $resultadotime14['nome']; 

#FOTO TIME
$sqlfoto14 = "SELECT foto FROM tab3times WHERE idjogo = 14";
$queryfoto14 = mysqli_query($conexao,$sqlfoto14);

$resultadofoto14 = mysqli_fetch_array($queryfoto14);
$foto14 = $resultadofoto14['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime15 = "SELECT nome FROM tab3times WHERE idjogo = 15";
$querytime15 = mysqli_query($conexao,$sqltime15);

$resultadotime15 = mysqli_fetch_array($querytime15);
$time15 = $resultadotime15['nome']; 

#FOTO TIME
$sqlfoto15 = "SELECT foto FROM tab3times WHERE idjogo = 15";
$queryfoto15 = mysqli_query($conexao,$sqlfoto15);

$resultadofoto15 = mysqli_fetch_array($queryfoto15);
$foto15 = $resultadofoto15['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime16 = "SELECT nome FROM tab3times WHERE idjogo = 16";
$querytime16 = mysqli_query($conexao,$sqltime16);

$resultadotime16 = mysqli_fetch_array($querytime16);
$time16 = $resultadotime16['nome']; 

#FOTO TIME
$sqlfoto16 = "SELECT foto FROM tab3times WHERE idjogo = 16";
$queryfoto16 = mysqli_query($conexao,$sqlfoto16);

$resultadofoto16 = mysqli_fetch_array($queryfoto16);
$foto16 = $resultadofoto16['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime17 = "SELECT nome FROM tab3times WHERE idjogo = 17";
$querytime17 = mysqli_query($conexao,$sqltime17);

$resultadotime17 = mysqli_fetch_array($querytime17);
$time17 = $resultadotime17['nome']; 

#FOTO TIME
$sqlfoto17 = "SELECT foto FROM tab3times WHERE idjogo = 17";
$queryfoto17 = mysqli_query($conexao,$sqlfoto17);

$resultadofoto17 = mysqli_fetch_array($queryfoto17);
$foto17 = $resultadofoto17['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime18 = "SELECT nome FROM tab3times WHERE idjogo = 18";
$querytime18 = mysqli_query($conexao,$sqltime18);

$resultadotime18 = mysqli_fetch_array($querytime18);
$time18 = $resultadotime18['nome']; 

#FOTO TIME
$sqlfoto18 = "SELECT foto FROM tab3times WHERE idjogo = 18";
$queryfoto18 = mysqli_query($conexao,$sqlfoto18);

$resultadofoto18 = mysqli_fetch_array($queryfoto18);
$foto18 = $resultadofoto18['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime19 = "SELECT nome FROM tab3times WHERE idjogo = 19";
$querytime19 = mysqli_query($conexao,$sqltime19);

$resultadotime19 = mysqli_fetch_array($querytime19);
$time19 = $resultadotime19['nome']; 

#FOTO TIME
$sqlfoto19 = "SELECT foto FROM tab3times WHERE idjogo = 19";
$queryfoto19 = mysqli_query($conexao,$sqlfoto19);

$resultadofoto19 = mysqli_fetch_array($queryfoto19);
$foto19 = $resultadofoto19['foto'];

###############################################
################ JOGO #########################

#NOMETIME

$sqltime20 = "SELECT nome FROM tab3times WHERE idjogo = 20";
$querytime20 = mysqli_query($conexao,$sqltime20);

$resultadotime20 = mysqli_fetch_array($querytime20);
$time20 = $resultadotime20['nome']; 

#FOTO TIME
$sqlfoto20 = "SELECT foto FROM tab3times WHERE idjogo = 20";
$queryfoto20 = mysqli_query($conexao,$sqlfoto20);

$resultadofoto20 = mysqli_fetch_array($queryfoto20);
$foto20 = $resultadofoto20['foto'];

###############################################
###############################################
###############################################
###############################################
$r11 = $_GET['resultado11'];
$_SESSION['jogo11'] = $r11;

$r12 = $_GET['resultado12'];
$_SESSION['jogo12'] = $r12;

$r13 = $_GET['resultado13'];
$_SESSION['jogo13'] = $r13;

$r14 = $_GET['resultado14'];
$_SESSION['jogo14'] = $r14;

$r15 = $_GET['resultado15'];
$_SESSION['jogo15'] = $r15;

$r16 = $_GET['resultado16'];
$_SESSION['jogo16'] = $r16;

$r17 = $_GET['resultado17'];
$_SESSION['jogo17'] = $r17;

$r18 = $_GET['resultado18'];
$_SESSION['jogo18'] = $r18;

$r19 = $_GET['resultado19'];
$_SESSION['jogo19'] = $r19;

$r20 = $_GET['resultado20'];
$_SESSION['jogo20'] = $r20;

$vitoria = 10;
$derrota = -5;

if ($r11 === 'V') {
	$pjogo11 = $pontos + $vitoria;
}else{
	$pjogo11 = $pontos + $derrota;
}

$pfinal11 = $pjogo11;

if ($r12 === 'E') {
	$pjogo12 = $pfinal11 + $vitoria;
}else{
	$pjogo12 = $pfinal11 + $derrota;
}

$pfinal12 = $pjogo12;

if ($r13 === 'D') {
	$pjogo13 = $pfinal12 + $vitoria;
}else{
	$pjogo13 = $pfinal12 + $derrota;
}

$pfinal13 = $pjogo13;

if ($r14 === 'E') {
	$pjogo14 = $pfinal13 + $vitoria;
}else{
	$pjogo14 = $pfinal13 + $derrota;
}

$pfinal14 = $pjogo14;

if ($r15 === 'D') {
	$pjogo15 = $pfinal14 + $vitoria;
}else{
	$pjogo15 = $pfinal14 + $derrota;
}

$pfinal15 = $pjogo15;

if ($r16 === 'V') {
	$pjogo16 = $pfinal15 + $vitoria;
}else{
	$pjogo16 = $pfinal15 + $derrota;
}

$pfinal16 = $pjogo16;

if ($r17 === 'V') {
	$pjogo17 = $pfinal16 + $vitoria;
}else{
	$pjogo17 = $pfinal16 + $derrota;
}

$pfinal17 = $pjogo17;

if ($r18 === 'V') {
	$pjogo18 = $pfinal17 + $vitoria;
}else{
	$pjogo18 = $pfinal17 + $derrota;
}

$pfinal18 = $pjogo18;

if ($r19 === 'V') {
	$pjogo19 = $pfinal18 + $vitoria;
}else{
	$pjogo19 = $pfinal18 + $derrota;
}

$pfinal19 = $pjogo19;

if ($r20 === 'V') {
	$pjogo20 = $pfinal19 + $vitoria;
}else{
	$pjogo20 = $pfinal19 + $derrota;
}

$pfinal20 = $pjogo20;

$ptotal = $pfinal20;

$_SESSION['pontos'] = $ptotal;

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
				<div class="col-md-4 box ml-5">
			<h5>Bem vindo ao Adivinha<span style="color: lime">Fut!</span></h5>
			<p class="mt-3 display-4">
				Como funciona?
			</p>

			<p class="mt-3" style="text-align: justify;">
				Ao lado direito você verá a tabela de confrontos das  próximas quatro rodadas!<br>
				Você então terá espaços vazios como esse: <input style="width: 25px; height: 20px" type="text"> ! <br>
				Nele você colocará <span style="color: lime">V</span>, <span style="color: lime">E</span> ou <span style="color: lime">D</span>!<br><br>

				<div class="ml-5">
				<span style="color: lime">V</span> para vitórias!<br>
				<span style="color: lime">E</span> para empates!<br>
				<span style="color: lime">D</span> para derrotas!<br><br>
				</div>

				A cada resultado <span style="color: lime">acertado</span> será acrescido 10 pontos ao usuário!<br>
				A cada resultado <span style="color: lime">errado</span> será diminuido 5 pontos do usuário!<br>
			</p>

			<hr>
			<h2 class="mt-3" align="center">Venha <span style="color: lime">apostar</span> com a gente!</h2>
			<hr>

			<div class="text-center" style="margin-top: 78px">
				<img width="400" src="img/anuncio.png">
			</div>
			
		</div>

		<div class="col-md-2 ml-5 text-center">
			<table class="mt-2" border="1px solid black">
				<tr align="center">
					<td colspan="2">Times</td>					
				</tr>

				<tr align="center">
					<td><img width="30" height="30" src="escudos/verdao.png"></td>
					<td width="15px">Palmeiras</td>
				</tr>

				<tr align="center">
					<td><img width="30" height="30" src="escudos/inter.png"></td>
					<td>Internacional</td>
				</tr>

				<tr align="center">
					<td><img width="30" height="30" src="escudos/gremio.png"></td>
					<td>Grêmio</td>
				</tr>

				<tr align="center">
					<td><img width="30" height="30" src="escudos/fla.png"></td>
					<td>Flamengo</td>
				</tr>

				<tr align="center">
					<td><img width="30" height="30" src="escudos/bambi.png"></td>
					<td>São Paulo</td>
				</tr>

				<tr align="center">
					<td><img width="30" height="30" src="escudos/galo.png"></td>
					<td>Atlético-MG</td>
				</tr>

				<tr align="center">
					<td><img width="30" height="30" src="escudos/america.png"></td>
					<td>América-MG</td>
				</tr>

				<tr align="center">
					<td><img width="30" height="30" src="escudos/furacao.png"></td>
					<td>Atlético-PR</td>
				</tr>

				<tr align="center">
					<td><img width="30" height="30" src="escudos/maria.png"></td>
					<td>Cruzeiro</td>
				</tr>

				<tr align="center">
					<td><img width="30" height="30" src="escudos/bota.png"></td>
					<td>Botafogo</td>
				</tr>

				<tr align="center">
					<td><img width="30" height="30" src="escudos/peixe.png"></td>
					<td>Santos</td>
				</tr>

				<tr align="center">
					<td><img width="30" height="30" src="escudos/flu.png"></td>
					<td>Fluminense</td>
				</tr>

				<tr align="center">
					<td><img width="30" height="30" src="escudos/bahia.png"></td>
					<td>Bahia</td>
				</tr>

				<tr align="center">
					<td><img width="30" height="30" src="escudos/ceara.png"></td>
					<td>Ceará</td>
				</tr>

				<tr align="center">
					<td><img width="30" height="30" src="escudos/timao.png"></td>
					<td>Corinthians</td>
				</tr>

				<tr align="center">
					<td><img width="30" height="30" src="escudos/vasco.png"></td>
					<td>Vasco</td>
				</tr>

				<tr align="center">
					<td><img width="30" height="30" src="escudos/vitoria.png"></td>
					<td>Vitória</td>
				</tr>

				<tr align="center">
					<td><img width="30" height="30" src="escudos/sport.png"></td>
					<td>Sport-PE</td>
				</tr>

				<tr align="center">
					<td><img width="30" height="30" src="escudos/chape.png"></td>
					<td>Chapecoense</td>
				</tr>

				<tr align="center">
					<td><img width="30" height="30" src="escudos/parana.png"></td>
					<td>Paraná</td>
				</tr>
			</table>
		</div>

		<div class="col-md-5">
			<h5>Campeonato Brasileiro <span style="color: lime">2018</span></h5>
			<p class="mt-3 display-4">
				Área de apostas!
			</p>

			<p class="mt-3" style="text-align: justify;">
				<h5><span style="color: lime">Jogos</span></h5>
			</p>

		<form method="GET" action="principal4.php">
			<table align="center">
					<tr>
						<td> <input style="width: 25px; height: 20px" name="resultado21" type="text"></td>
						<td><img width="30" height="30" align="right" src="<?php echo "$foto1"; ?>"></td>
						<td><?php echo "$time1"; ?></td>
						<td align="center" width="40">X</td>
						<td align="right"><?php echo "$time2"?></td>
						<td><img width="30" height="30" src="<?php echo "$foto2"; ?>"></td>
					</tr>
<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td><input style="width: 25px; height: 20px" name="resultado22" type="text"></td>
					<td><img width="30" height="30" align="right" src="<?php echo "$foto3"; ?>"></td>
						<td><?php echo "$time3"; ?></td>
						<td align="center" width="40">X</td>
						<td align="right"><?php echo "$time4"; ?></td>
						<td><img width="30" height="30" src="<?php echo "$foto4"; ?>"></td>
				</tr>
<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td><input style="width: 25px; height: 20px" name="resultado23" type="text"></td>
					<td><img width="30" height="30" align="right" src="<?php echo "$foto5"; ?>"></td>
						<td><?php echo "$time5"; ?></td>
						<td align="center" width="40">X</td>
						<td align="right"><?php echo "$time6"; ?></td>
						<td><img width="30" height="30" src="<?php echo "$foto6"; ?>"></td>
				</tr>
<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td><input style="width: 25px; height: 20px" name="resultado24" type="text"></td>
					<td><img width="30" height="30" align="right" src="<?php echo "$foto7"; ?>"></td>
						<td><?php echo "$time7"; ?></td>
						<td align="center" width="40">X</td>
						<td align="right"><?php echo "$time8"; ?></td>
						<td><img width="30" height="30" src="<?php echo "$foto8"; ?>"></td>
				</tr>
<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td><input style="width: 25px; height: 20px" name="resultado25" type="text"></td>
					<td><img width="30" height="30" align="right" src="<?php echo "$foto9"; ?>"></td>
						<td><?php echo "$time9"; ?></td>
						<td align="center" width="40">X</td>
						<td align="right"><?php echo "$time10"; ?></td>
						<td><img width="30" height="30" src="<?php echo "$foto10"; ?>"></td>
				</tr>
<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td><input style="width: 25px; height: 20px" name="resultado26" type="text"></td>
					<td><img width="30" height="30" align="right" src="<?php echo "$foto11"; ?>"></td>
						<td><?php echo "$time11"; ?></td>
						<td align="center" width="40">X</td>
						<td align="right"><?php echo "$time12"; ?></td>
						<td><img width="30" height="30" src="<?php echo "$foto12"; ?>"></td>
				</tr>
<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td><input style="width: 25px; height: 20px" name="resultado27" type="text"></td>
					<td><img width="30" height="30" align="right" src="<?php echo "$foto13"; ?>"></td>
						<td><?php echo "$time13"; ?></td>
						<td align="center" width="40">X</td>
						<td align="right"><?php echo "$time14"; ?></td>
						<td><img width="30" height="30" src="<?php echo "$foto14"; ?>"></td>
				</tr>
<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td><input style="width: 25px; height: 20px" name="resultado28" type="text"></td>
					<td><img width="30" height="30" align="right" src="<?php echo "$foto15"; ?>"></td>
						<td><?php echo "$time15"; ?></td>
						<td align="center" width="40">X</td>
						<td align="right"><?php echo "$time16"; ?></td>
						<td><img width="30" height="30" src="<?php echo "$foto16"; ?>"></td>
				</tr>
<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td><input style="width: 25px; height: 20px" name="resultado29" type="text"></td>
					<td><img width="30" height="30" align="right" src="<?php echo "$foto17"; ?>"></td>
						<td><?php echo "$time17"; ?></td>
						<td align="center" width="40">X</td>
						<td align="right"><?php echo "$time18"; ?></td>
						<td><img width="30" height="30" src="<?php echo "$foto18"; ?>"></td>
				</tr>
<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td><input style="width: 25px; height: 20px" name="resultado30" type="text"></td>
					<td><img width="30" height="30" align="right" src="<?php echo "$foto19"; ?>"></td>
						<td><?php echo "$time19"; ?></td>
						<td align="center" width="40">X</td>
						<td align="right"><?php echo "$time20"; ?></td>
						<td><img width="30" height="30" src="<?php echo "$foto20"; ?>"></td>
				</tr>
			</table>

			<div class="mt-5 text-right">
				<button class="btn btn-outline-light" type="submit">Enviar apostas</button>
			</div>
			<hr>
			<h2 class="mt-3 display-4" align="center">Boa <span style="color: lime">sorte</span>!</h2>
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
<?php
	session_start();
?>