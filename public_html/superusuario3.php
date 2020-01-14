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

			</ul>
		</div>

		<div class="btn-group ml-auto">
		  <button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Usuário
		  </button>
		  <div class="dropdown-menu dropdown-menu-right">
		   <button class="dropdown-item" type="button"><a href="index.html">Sair</a></button>
		  </div>
		</div>

	</div>
</div>
<div class="container-fluid center mt-3">
	<div class="row">
				<div class="col-md-4 box ">
			<h5>Bem vindo ao Adivinha<span style="color: lime">Fut!</span></h5>
			<p class="mt-3 display-4">
				Projete os jogos!
			</p>

			<p class="mt-3" style="text-align: justify;">
				Escreva nos campos de texto em ordem:
				<div class="ml-2">
				<span style="color: lime">Primeiro</span> a foto do primeiro time!<br>
				<span style="color: lime">Segundo</span> o nome do primeiro time!<br>
				<span style="color: lime">Terceiro</span> o nome do segundo time!<br>
				<span style="color: lime">Quarto</span> a foto do segundo time!<br><br>
				</div>

				A cada resultado <span style="color: lime">acertado</span> será acrescido 10 pontos ao usuário!<br>
				A cada resultado <span style="color: lime">errado</span> será diminuido 5 pontos do usuário!<br>
			</p>

			<hr>
			<h2 class="mt-3" align="center">Você <span style="color: lime">programa</span> a alegria de todos!</h2>
			<hr>
			
			<img src="escudos/america.png"> <img src="escudos/bahia.png"> <img src="escudos/bambi.png">
			<img src="escudos/bota.png"> <img src="escudos/ceara.png"> <img src="escudos/chape.png">
			<img src="escudos/fla.png"> <img src="escudos/flu.png"> <img src="escudos/furacao.png">
			<img src="escudos/galo.png"> <img src="escudos/gremio.png"> <img src="escudos/inter.png">
			<img src="escudos/maria.png"> <img src="escudos/peixe.png"> <img src="escudos/timao.png">
			<img src="escudos/parana.png"> <img src="escudos/sport.png"> <img src="escudos/vasco.png">
			<img src="escudos/verdao.png"> <img src="escudos/vitoria.png"> 

		</div>

		<div class="col-md-7 ml-3">
			<h5>Campeonato Brasileiro <span style="color: lime">2018</span></h5>
			<p class="mt-3 display-4">
				Área de apostas!
			</p>

			<p class="mt-3" style="text-align: justify;">
				<h5><span style="color: lime">Jogos</span></h5>
			</p>

		<form method="GET" action="writetab3.php">
			<table align="center">
				<tr>
					<td><input name="foto1" value="escudos/time.png">
					</td>
					<td><input type="text" width="50" name="time1"></td>
					<td align="center">X</td>
					<td><input type="text" width="50" name="time2"></td>
					<td><input name="foto2" value="escudos/time.png">
					</td>
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
					<td><input name="foto3" value="escudos/time.png">
					</td>
						<td><input type="text" name="time3"></td>
						<td align="center">X</td>
						<td><input type="text" name="time4"></td>
					<td><input name="foto4" value="escudos/time.png">
					</td>
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
					<tr>
					<td><input name="foto5" value="escudos/time.png">
					</td>
						<td><input type="text" name="time5"></td>
						<td align="center">X</td>
						<td><input type="text" name="time6"></td>
					<td><input name="foto6" value="escudos/time.png">
					</td>
					</tr>
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
					<tr>
					<td><input name="foto7" value="escudos/time.png">
					</td>
						<td><input type="text" name="time7"></td>
						<td align="center">X</td>
						<td><input type="text" name="time8"></td>
					<td><input name="foto8" value="escudos/time.png">
					</td>
					</tr>
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
					<tr>
					<td><input name="foto9" value="escudos/time.png">
					</td>
						<td><input type="text" name="time9"></td>
						<td align="center">X</td>
						<td><input type="text" name="time10"></td>
					<td><input name="foto10" value="escudos/time.png">
					</td>
					</tr>
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
					<tr>
					<td><input name="foto11" value="escudos/time.png">
					</td>
						<td><input type="text" name="time11"></td>
						<td align="center">X</td>
						<td><input type="text" name="time12"></td>
					<td><input name="foto12" value="escudos/time.png">
					</td>
					</tr>
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
					<tr>
					<td><input name="foto13" value="escudos/time.png">
					</td>
						<td><input type="text" name="time13"></td>
						<td align="center">X</td>
						<td><input type="text" name="time14"></td>
					<td><input name="foto14" value="escudos/time.png">
					</td>
					</tr>
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
					<tr>
					<td><input name="foto15" value="escudos/time.png">
					</td>
						<td><input type="text" name="time15"></td>
						<td align="center">X</td>
						<td><input type="text" name="time16"></td>
					<td><input name="foto16" value="escudos/time.png">
					</td>
					</tr>
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
					<tr>
					<td><input name="foto17" value="escudos/time.png">
					</td>
						<td><input type="text" name="time17"></td>
						<td align="center">X</td>
						<td><input type="text" name="time18"></td>
					<td><input name="foto18" value="escudos/time.png">
					</td>
					</tr>
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
					<tr>
					<td><input name="foto19" value="escudos/time.png">
					</td>
						<td><input type="text" name="time19"></td>
						<td align="center">X</td>
						<td><input type="text" name="time20"></td>
					<td><input name="foto20" value="escudos/time.png">
					</td>
					</tr>
			</table>

			<div class="mt-5 text-right">
				<button class="btn btn-outline-light" type="submit">Enviar apostas</button>
			</div>
		</form>
			<hr>
			<h2 class="mt-3 display-4 text-center">Confrontos <span style="color: lime">programados</span>!</h2>
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
