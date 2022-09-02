<?php
include('systems/verify.php');
include('systems/publicar.php');
include('systems/insert.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>nova | World Hello Hi</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/c421d17f0a.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/cores.js"></script>
	<link href="css/menus-lateral-topo.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/animaçoes.css">
	<link rel="stylesheet" type="text/css" href="css/body-html.css">
	<link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body id="body">

	<!-- BARRA SUPERIOR  -->
	<nav class="nav-top animated fadeInDown" id="navTop">
		<label class="label">
			<a href="home.php">
				<i class="fab fa-firefox-browser" style="position: absolute; font-size: 35px;top: 0;"></i>
			</a>
			<a href="?sair" onclick="return confirm('Deseja realmente sair?')">
				<i class="fas fa-power-off" data-toggle="tooltip" title="Sair"></i>
			</a>
			<i class="fas fa-question-circle" data-toggle="tooltip" title="Sobre"></i>
			<i class="fas fa-bell" data-toggle="tooltip" title="Notificações"></i>
		</label>
		<input type="text" name="search" placeholder="Pesquise por um perfil 🔎">
	</nav>

	<!-- BARRA LATERAL -->
	<div id="sideNav" class="menu-left animated fadeInLeft" style="">
		<div class="bar">
			<i id="unlock" class="fas fa-lock-open" onclick="toggleLock()" data-toggle="tooltip" title="Travar barra lateral"></i>
			<i id="lock" class="fas fa-lock" style="display: none;color: rgba(0, 0, 0, 0.8);" onclick="toggleUnlock()" data-toggle="tooltip" title="Destravar barra lateral"></i>
		</div>
		<hr>
		<ul>
			<p>
				Seu Perfil
			</p>
			<li data-toggle="tooltip" title="Visualizar seu perfil">
				<i class="fas fa-user"></i>
				Seu nome
			</li>
			<li data-toggle="tooltip" title="Editar seu Perfil" onclick="edit()" style="cursor: pointer;">
				<i class="fas fa-pencil-alt"></i>
				Editar Informações
			</li>
		</ul>
		<ul>
			<p>
				Hashtags - Top 6
				<i class="fas fa-fire" style="font-size: 20px;"></i>
			</p>
			<li id="news">
				<i class="fas fa-hashtag"></i>
				news
				<i class="fas fa-lock" data-toggle="tooltip" title="Essa é uma tag privada" style="cursor: pointer;"></i>
			</li>
			<hr>
			<li>
				<i class="fas fa-hashtag"></i>
				artes
				<i class="fas fa-users" data-toggle="tooltip" title="Essa é uma tag pública" style="cursor: pointer;"></i>
			</li>
			<li>
				<i class="fas fa-hashtag"></i>
				musica
				<i class="fas fa-users" data-toggle="tooltip" title="Essa é uma tag pública" style="cursor: pointer;"></i>
			</li>
			<li>
				<i class="fas fa-hashtag"></i>
				fotografia
				<i class="fas fa-users" data-toggle="tooltip" title="Essa é uma tag pública" style="cursor: pointer;"></i>
			</li>
			<li>
				<i class="fas fa-hashtag"></i>
				dança
				<i class="fas fa-users" data-toggle="tooltip" title="Essa é uma tag pública" style="cursor: pointer;"></i>
			</li>
			<li>
				<i class="fas fa-hashtag"></i>
				arquitetura
				<i class="fas fa-users" data-toggle="tooltip" title="Essa é uma tag pública" style="cursor: pointer;"></i>
			</li>
			<li>
				<i class="fas fa-hashtag"></i>
				desenho
				<i class="fas fa-users" data-toggle="tooltip" title="Essa é uma tag pública" style="cursor: pointer;"></i>
			</li>
			<hr>
			<a href="tags.php">
				<li id="last" style="margin-top: 10px;padding: 0;cursor: pointer;text-decoration: underline;text-align: center;" data-toggle="tooltip" title="Mostrar todas as tags em grid">
					<i class="fas fa-hashtag"></i>
				</li>
			</a>
		</ul>
	</div>

	<!-- PERFIL -->
	<div class="conteiner animated fadeIn slow">
		<p class="p.edit"><a href="">Clique aqui</a>para editar o seu perfil</p>
		<div class="banner"></div>
		<div class="profile-img"></div>
		<form method="POST">
			<div class="informations">
				<div class="user">
					<!-- max-lenght="44" -->
					<p>
						<?php 
						if(isset($_SESSION['usuario'])){
							echo $usuario;
						}else{
							echo "(Seu nome)";
						}
						?>
					</p>
					<input type="text" name="usuario" maxlength="44" style="display: ;" required placeholder="Seu Nome">
				</div>
				<div class="nickname edit">
					<p>
						<?php
						if(isset($_SESSION['usuario'])){
							echo $tagUsuario;
						}else{
							echo "(#tag_de_usuario)";
						}
						?>
					</p>
					<input type="text" name="tag" maxlength="14" style="display: ;" required placeholder="Sua Tag de Identificação">
				</div>
				<div class="location">
					<p>
						de
						<strong>
						<?php
						if(isset($_SESSION['usuario'])){
							echo $cidade;
						}else{
							echo "Cidade";
						}
						?>
						</strong> - 
						<?php
						if(isset($_SESSION['usuario'])){
							echo $estado;
						}else{
							echo "Estado";
						}
						?>
					</p>
				</div>
				<div class="myQuote">
					<i class="fas fa-quote-right"></i>
					<i class="fas fa-quote-left"></i>
					<p style="white-space: normal;">
						<?php
						if(isset($_SESSION['usuario'])){
							echo $frase;
						}else{
							echo "A frase que te move";
						}
						?>
					</p>
					<input type="text" name="frase" maxlength="200" style="display: ;" required placeholder="Sua Frase">
				</div>
				<div class="ocupation">
					<i class="fas fa-pen-fancy"></i>
					<p style="display: ">
						<?php
						if(isset($_SESSION['usuario'])){
							echo $job;
						}else{
							echo "Entusiasta!";
						}
						?>
					</p>
					<input type="text" name="job" maxlength="20" style="display: ;" required placeholder="Eu Sou...">
					<input type="submit" name="salvar">
				</div>
			</div>
		</form>
	</div>

	<!-- PUBLICAÇÕES DO USUÁRIO -->
	<?php 
		$select = "SELECT * FROM web_postagens ORDER BY id DESC";

		try{
			$result = $pdo->prepare($select);
			$result->execute();
			$contar = $result->rowCount();
			if($contar>0){
				while($mostrar = $result->FETCH(PDO::FETCH_OBJ)){
	?>

	<?php
		}
		}else{
			echo "Não há obras visíveis";
			}
		}catch(PDOException $e){
			echo "Ocorreu um erro grave.";
		}
	?>
</body>

<script type="text/javascript">

	function toggleLock(){
		var x = document.getElementById('unlock');
		x.style.display = 'none';
		var y = document.getElementById('lock');
		y.style.display = 'block';
		var z = document.getElementById('sideNav');
		z.style.marginLeft = '-10px';
	}
	function toggleUnlock(){
		var x = document.getElementById('lock');
		x.style.display = 'none';
		var y = document.getElementById('unlock');
		y.style.display = 'block';
		var z = document.getElementById('sideNav');
		z.style.marginLeft = '-220px';
		document.getElementById('sideNav').style.marginLeft = null;

	}

	function edit(){
	}
	function closeEdit(){
	}

	const target = document.querySelectorAll('[data-anime]');
	const animationClass = 'anime';

	function animeScroll(){
		const windowTop = window.pageYOffset + (window.innerHeight * 3 / 4);
		target.forEach(function(element){
			if((windowTop) > element.offsetTop){
				element.classList.add(animationClass);
			}
		})
	}
	animeScroll();
	window.addEventListener('scroll', function(){
		animeScroll();
	})
</script>
</html>