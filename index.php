<?php
ob_start();
session_start();

if(isset($_SESSION['usuario']) && (isset($_SESSION['senhausuario']))){
	header('Location: home.php');
	exit();
}

include('systems/conexao.php');
include('systems/cadastro.php');
include('systems/login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>| nova.com.br | Arte & Cultura</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/animate.css">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
		<script src="https://kit.fontawesome.com/c421d17f0a.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>
	<body>
		
		<style type="text/css">
			.insight{
				background: url('<?php
					$a = array("imgs/insight.jpg","imgs/insight3.jpeg");
					echo $a[array_rand($a)];?>');
				width: 100%;
				height: 100vh;
				background-repeat: no-repeat;
				background-size: 1920px 1080px;
				position: fixed;
				border-style: none;
				top: 0;
				left: 0;
				opacity: 0.7;
			}
		</style>
		<img class="insight">
		<h3 class="logo animated fadeInUp animate delay-1s" onclick='scrolldown()'>nova </h3>
		<p class="quote animated fadeInDown animate delay-2s"></p>

		<div class="conteiner">
			<div id="fadeouttoggle" class="content register animated fadeInDown animate delay-2s">
				<h2 class="title">Crie a sua conta!</h2>
				<form class="form" method="POST">
					<label class="label">
						<i class="fas fa-envelope"></i>
						<input type="email" name="email" placeholder="Seu Melhor Email" required>
					</label>
					<label class="label">
						<i class="fas fa-key"></i>
						<input type="password" name="senha" placeholder="Senha" required>
					</label>
					<button type="submit" name="cadastrar" class='btn'>Registrar</button>
				</form>
				<button class="btn" onclick='toggleLogin()'> Já tenho uma conta</button>
			</div>
			<div  id="fadeintoggle" class="content login animated">
				<h2 class="title">Bem-vindo!</h2>
				<form class="form" method="POST">
					<label class="label">
						<i class="fas fa-envelope"></i>
						<input id='focus-login' type="email" placeholder="Email" name="email" required>
					</label>
					<label class="label">
						<i class="fas fa-key"></i>
						<input type="password" placeholder="Senha" name="senha" required>
					</label>
					<button type="submit" name="logar" class='btn'>
						Login
					</button>
				</form>
				<button class="btn" onclick='toggleRegister()'> 
					Não tenho uma conta
				</button>
			</div>
			<div class="card animated fadeInRight">
				<div class="tooltip">
					<a class="cardLabel cardLabel-ig" href='' target='_blank'>
						<i class="fab fa-instagram"></i>
						<span class="tooltipText">Atualizações e Sugestões</span>
					</a>
				</div>
				<div class="tooltip">
					<a class="cardLabel cardLabel-in" href='' target='_blank'>
						<i class="fab fa-linkedin-in"></i>
						<span class="tooltipText">Saiba mais</span>	
					</a>
				</div>
				<div class="tooltip">
					<a class="cardLabel cardLabel-yt" href='' target='_blank'>
						<i class="fab fa-youtube"></i>
						<span class="tooltipText">Fique por dentro</span>
					</a>
				</div>
			</div>
			<div class="doubleArrow animated fadeInUp" onclick="scrolldown()">
				<i class="fas fa-angle-double-down"></i>
			</div>
		</div>
	
		<div class="parallax">
			<div>
				<h1 id='fadein1' class="">A nova rede social.<br>Feita para artistas como você.</h1>
				<iframe id='fadein2' width="1000" height="500" src="https://www.youtube.com/embed/H0cZmykv_Gk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<button id="fadein3" class="btn btn2" onclick='scrolltop()'>Ainda não criou uma conta? Nós te esperamos lá! </button>
			</div>
		</div>
	</body>
	<script>
		window.onscroll = scroll;
		function scroll(){
			document.getElementById('fadein1').classList.add('animated', 'fadeInUp');
			document.getElementById('fadein2').classList.add('animated', 'fadeInUp');
			document.getElementById('fadein3').classList.add('animated', 'fadeInUp', 'animate', 'delay-1s');
		};
		function scrolltop(){
			window.scrollTo(0, 0);
			document.getElementById('focus-cadastro').focus();

			var element = document.getElementById('fadeintoggle');
			element.classList.remove('fadeInUp');
			var element2 = document.getElementById('fadeouttoggle');
			element2.classList.remove('fadeOutUp');
			
			document.getElementById('fadeintoggle').classList.add('fadeOutDown');
			var y = document.getElementById('fadeouttoggle');
			y.style.display = 'flex';
			document.getElementById('fadeouttoggle').classList.add('fadeInDown');
			document.getElementById('focus-cadastro').focus();

		};
		function scrolldown(){
			window.scrollTo(0, 1000);
		};

		function toggleLogin(){
			var element = document.getElementById('fadeouttoggle');
			element.classList.remove('fadeInDown', 'animate', 'delay-2s');
			var element2 = document.getElementById('fadeintoggle');
			element2.classList.remove('fadeOutDown');

			document.getElementById('fadeouttoggle').classList.add('fadeOutUp');
			var x = document.getElementById('fadeintoggle');
			x.style.display = 'flex';
			document.getElementById('fadeintoggle').classList.add('fadeInUp');
			document.getElementById('focus-login').focus();
		}

		function toggleRegister(){
			var element = document.getElementById('fadeintoggle');
			element.classList.remove('fadeInUp');
			var element2 = document.getElementById('fadeouttoggle');
			element2.classList.remove('fadeOutUp');
			
			document.getElementById('fadeintoggle').classList.add('fadeOutDown');
			var y = document.getElementById('fadeouttoggle');
			y.style.display = 'flex';
			document.getElementById('fadeouttoggle').classList.add('fadeInDown');
			document.getElementById('focus-cadastro').focus();
		}
	</script>
</html>