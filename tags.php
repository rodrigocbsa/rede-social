<?php
include('systems/verify.php');
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>nova | #</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/c421d17f0a.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/menus-lateral-topo.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="tags.css">
	<link rel="stylesheet" type="text/css" href="css/animaçoes.css">
	<link rel="stylesheet" type="text/css" href="css/cards-posts.css">
	<link rel="stylesheet" type="text/css" href="css/body-html.css">
</head>
<body id="body">

	<nav class="nav-top">
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

	<div id="fixToggle" class="menu-left animated fadeInLeft" style="">
		<div class="bar">
			<i id="unlock" class="fas fa-lock-open" onclick="toggleLock()" data-toggle="tooltip" title="Travar barra lateral"></i>
			<i id="lock" class="fas fa-lock" style="display: none;" onclick="toggleUnlock()" data-toggle="tooltip" title="Destravar barra lateral"></i>
		</div>
		<hr>
		<ul>
			<p>
				Seu Perfil
			</p>
			<a href="profile.php" style="text-decoration: none;color: black;">
				<li data-toggle="tooltip" title="Gerenciar seu perfil" style="cursor: pointer;">
					<i class="fas fa-user"></i>
					UNDEFINED
				</li>
			</a>
			<li data-toggle="tooltip" title="Fazer uma publicação" onclick="overlay()">
				<i class="fas fa-pencil-alt"></i>
				Publicar
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
				autoconhecimento
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
			<li id="last" style="margin-top: 10px;padding: 0;cursor: pointer;text-decoration: underline;text-align: center;" 	data-toggle="tooltip" title="Mostrar todas as tags em grid">
				<i class="fas fa-hashtag"></i>
			</li>
		</ul>
	</div>

	<div class="conteiner animated fadeInUp animate slow">
		<div class="tags tag1">
			<i class="fas fa-hashtag"></i>
			<p>arquitetura</p>
		</div>
		<div class="tags tag2">
			<i class="fas fa-hashtag"></i>
			<p>musica</p>
		</div>
		<div class="tags tag3">
			<i class="fas fa-hashtag"></i>
			<p>dança</p>
		</div>
		<div class="tags tag4">
			<i class="fas fa-hashtag"></i>
			<p>fotografia</p>
		</div>
		<div class="tags tag5">
			<i class="fas fa-hashtag"></i>
			<p>desenho</p>
		</div>
		<div class="tags tag6">
			<i class="fas fa-hashtag"></i>
			<p>artes</p>
		</div>
		<div class="tags tag7">
			<i class="fas fa-hashtag"></i>
			<p>cultura</p>
		</div>
		<div class="tags tag8">
			<i class="fas fa-hashtag"></i>
			<p>brasil</p>
		</div>
		<div class="tags tag9">
			<i class="fas fa-hashtag"></i>
			<p>autoconhecimento</p>
		</div>
		<div class="tags tag10">
			<i class="fas fa-hashtag"></i>
			<p>literatura</p>
		</div>
	</div>
</body>
<script type="text/javascript">

	function toggleLock(){
		var x = document.getElementById('unlock');
		x.style.display = 'none';
		var y = document.getElementById('lock');
		y.style.display = 'block';
		var z = document.getElementById('fixToggle');
		z.style.marginLeft = '-10px';
	}
	function toggleUnlock(){
		var x = document.getElementById('lock');
		x.style.display = 'none';
		var y = document.getElementById('unlock');
		y.style.display = 'block';
		var z = document.getElementById('fixToggle');
		z.style.marginLeft = '-220px';
		document.getElementById('fixToggle').style.marginLeft = null;

	}

	function overlay(){
		var x = document.getElementById('overlay');
		x.style.display = null;
		var y = document.getElementById('body');
		y.style.overflow = 'hidden';

		document.getElementById('overlay-main').classList.add('fadeInUp');
	}
	function closeOverlay(){
		var x = document.getElementById('overlay');
		x.style.display = 'none';
		var y = document.getElementById('body');
		y.style.overflow = null;

		document.getElementById('overlay-main').classList.remove('fadeInUp');
	}
</script>
</html>