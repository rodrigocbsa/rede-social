<?php
include('systems/verify.php');
include('systems/publicar.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>nova | Página Inicial</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/c421d17f0a.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/cores.js"></script>
	<link href="home.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/menus-lateral-topo.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/animaçoes.css">
	<link rel="stylesheet" type="text/css" href="css/card-post.css">
	<link rel="stylesheet" type="text/css" href="css/card-ad.css">
	<link rel="stylesheet" type="text/css" href="css/card-news.css">
	<link rel="stylesheet" type="text/css" href="css/card-venda.css">
	<link rel="stylesheet" type="text/css" href="css/body-html.css">
</head>
<body id="body">

	<!-- BARRA SUPERIOR  -->
	<nav class="nav-top animated fadeInDown" id="navTop">
		<label class="label">
			<a href="#">
				<i class="fab fa-firefox-browser" style="position: absolute; font-size: 2.25rem;top: 0;background-color: unset;"></i>
			</a>
			<a href="?sair" onclick="return confirm('Deseja realmente sair?')">
				<i class="fas fa-power-off" data-toggle="tooltip" title="Sair"></i>
			</a>
			<i class="fas fa-question-circle" data-toggle="tooltip" title="Sobre"></i>
			<i class="fas fa-bell" data-toggle="tooltip" title="Notificações"></i>
		</label>
		<input type="text" name="search" placeholder="Pesquise por um perfil 🔎">
	</nav>

	<!-- CORES -->
	<div class="card animated fadeInRight">
		<div onclick="changeLight()" class="cardLabel" style="background-color: white;"></div>
		<div onclick="changeDark()" class="cardLabel" style="background-color: black;"></div>

		<div onclick="changeColorRed()" class="cardLabel" style="background-color: red;margin-top: 50px;"></div>
		<div onclick="changeColorYellow()" class="cardLabel" style="background-color: yellow;"></div>
		<div onclick="changeColorGreen()" class="cardLabel" style="background-color: green;"></div>
		<div onclick="changeColorCyan()" class="cardLabel" style="background-color: cyan;"></div>
		<div onclick="changeColorBlue()" class="cardLabel" style="background-color: blue;"></div>
		<div onclick="changeColorPurple()" class="cardLabel" style="background-color: purple;"></div>
		<div onclick="changeColorPink()" class="cardLabel" style="background-color: pink;"></div>
		<div onclick="changeColorLime()" class="cardLabel" style="background-color: lime;"></div>
		<div onclick="changeColorOrange()" class="cardLabel" style="background-color: orange;"></div>
		<div onclick="changeColorBrown()" class="cardLabel" style="background-color: brown;"></div>
	</div>

	<!-- BARRA LATERAL -->
	<div id="sideNav" class="menu-left animated fadeInLeft is-active" style="">
		<div class="bar">
			<i id="unlock" class="fas fa-lock-open is-locked" onclick="toggleLock()" data-toggle="tooltip" title="Travar barra lateral"></i>
			<i id="lock" class="fas fa-lock" style="display: none;" onclick="toggleUnlock()" data-toggle="tooltip" title="Destravar barra lateral"></i>
		</div>
		<hr>
		<ul>
			<p>
				Seu Perfil
			</p>
			<a href="profile.php" style="text-decoration: none;color: black;cursor: pointer;">
				<li data-toggle="tooltip" title="Visualizar seu perfil">
					<i class="fas fa-user"></i>
					Acessar Perfil
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

	<!-- OVERLAY PUBLICAR -->
	<div id='overlay' class="overlay" style="display: none;">
		<i id="close" class="fas fa-times" onclick="closeOverlay()"></i>
		<div class="overlay-main">
			<form method="POST">
				<div class="overlay-descricao">
					<p>Eu quero dizer algo</p>
					<input type="text" name="descricao" maxlength="890">
				</div>
				<div class="overlay-imagem">
					<p>Minha produção</p>
					<input type="file" name="imagem">
				</div>
				<div>
					<button type="submit" class="btn-publicar" name="publicar">
						Mostrar à todos
					</button>
				</div>
			</form>
		</div>
	</div>

	<!-- TEXTO INICIAL -->
	<div class="start animated fadeInUp animate delay-1s slow">
		<h1 id="txt1">
			Olá!
		</h1>
		<p id="txt2">
			Para começar, leia os <strong>4 tipos de post</strong> abaixo!
		</p>
		<!--
		<p id="txt2">
			Você tem <strong>4</strong> posts novos, <strong>1</strong> anúncios e <strong>3</strong> notificações
		</p>
		-->
	</div> 

	<div>
		<!-- CARDS -->
		<div class="main" data-anime="up" style="margin-top: 400px;">
			<div>
				<div class="icons-right">
					<div><i class="fas fa-chevron-up"></i></div>
					<div><i class="far fa-heart"></i></div>
					<div><i class="far fa-star"></i></div>
				</div>
				<div class="grid-superior">
					<div id="first-tag" class="tag-superior">
						<i class="fas fa-hashtag"></i>
						desenho
					</div>
					<div class="tag-superior">
						<i class="fas fa-hashtag"></i>
						design
					</div>
					<div class="tag-superior">
						<i class="fas fa-hashtag"></i>
						fotografia
					</div>
					<div class="tag-superior">
						<i class="fas fa-hashtag"></i>
						artes
					</div>
					<div class="tag-superior">
						<i class="fas fa-hashtag"></i>
						paisagem
					</div>
					<div class="tag-superior">
						<i class="fas fa-hashtag"></i>
						inspiraçao
					</div>
				</div>
				<img src="imgs/8k.jpg" width="920px" height="400px;" style="border-radius: 5px;margin-top: 10px;margin-bottom: 10px;object-fit: cover;">
				<img class="selo" src="imgs/selo.png">
				<img class="profile" src="imgs/profile.png">
				<div class="follow">
					<p>Apreciar</p>
					<i class="fas fa-user-plus"></i>
				</div>

				<div class="quote">
					<i class="fas fa-quote-right"></i>
					<i class="fas fa-quote-left"></i>
					<p>Minha publicação padrão</p>
				</div>
				<div class="job">
					<i class="fas fa-pen-fancy"></i>
					<p>nova.com.br</p>
				</div>
				<p class="publish">data: <a>-/-/-</a></p>
				<div class="horizontal-line"></div>
				<div class="description">
					<p>Seja muito bem vindo a nova, a nova rede social 100% brasileira, sem algoritimos que coletam informações pessoais, voltada aqueles que buscam conhecer mais. Somos motivados em resgatar o intuito inicial das redes sociais e em preservar a privacidade dos usuários. Desenvolvemos um ambiente propício a produções artísticas, com publicações em estilo "cartões" e classificações por meio de tags pré definidas pela rede. As publicações padrões são exatamente como essas, que você está lendo agora!
					<a class="name"> ~ nova.com.br</a>
					</p>
				</div>
				<div class="comment-highlight">
					<i class="far fa-comment-alt"></i>
				</div>
			</div>
		</div>

		<div class="main-ad" data-anime="up">
			<div>
				<div class="icons-right">
					<div><i class="fas fa-chevron-up"></i></div>
					<div><i class="far fa-heart"></i></div>
					<div><i class="fas fa-star" style="color: yellow;"></i></i></div>
				</div>
				<div class="grid-superior">
					<div id="first-tag" class="tag-superior">
						<i class="fas fa-hashtag"></i>
						desenho
					</div>
					<div class="tag-superior">
						<i class="fas fa-hashtag"></i>
						design
					</div>
					<div class="tag-superior">
						<i class="fas fa-hashtag"></i>
						fotografia
					</div>
					<div class="tag-superior">
						<i class="fas fa-hashtag"></i>
						artes
					</div>
					<div class="tag-superior">
						<i class="fas fa-hashtag"></i>
						paisagem
					</div>
					<div id="ad" class="tag-superior">
						<i class="fas fa-hashtag"></i>
						ad
					</div>
				</div>
				<img src="imgs/8k.jpg" width="920px" height="400px;" style="border-radius: 5px;margin-top: 10px;margin-bottom: 10px;object-fit: cover;">
				<img class="selo" src="imgs/selo.png">
				<img class="profile" src="imgs/profile.png">
				<div class="follow-ad">
					<p>Apreciar</p>
					<i class="fas fa-user-plus"></i>
				</div>

				<div class="quote-ad">
					<i class="fas fa-quote-right"></i>
					<i class="fas fa-quote-left"></i>
					<p>Minha publicação promovida</p>
				</div>
				<div class="job-ad">
					<i class="fas fa-pen-fancy"></i>
					<p>nova.com.br</p>
				</div>
				<p class="publish-ad">data: <a>-/-/-</a></p>
				<div class="horizontal-line-ad"></div>
				<div class="description-ad">
					<p>Este é o cartão de post promovido, ou "ad". Ele poderá aparecer, ocasionalmente, assim como o cartão padrão, em sua linha do tempo, a medida em que você interagir com outros posts.  Você que acabou de criar a sua conta tem direito a 1 post promovido para 100 pessoas gratuitamente! Cortesia da nova, aproveite esta oportunidade única de crescer o que você faz e receber Apreciações.
					<a class="name"> ~ nova.com.br</a>
					</p>
				</div>
				<div class="comment-highlight-ad">
					<i class="far fa-comment-alt"></i>
				</div>
			</div>
		</div>

		<div class="main-news" data-anime="up">
			<div>
				<div class="icons-right">
					<div><i class="fas fa-chevron-up"></i></div>
					<div><i class="fas fa-heart" style="color: red;"></i></div>
					<div><i class="far fa-star"></i></div>
				</div>
				<div class="grid-superior">
					<div id="tag-news" class="tag-superior">
						<i class="fas fa-hashtag"></i>
						news
					</div>
				</div>
				<img src="imgs/mindset.jpg" width="920px" height="400px;" style="border-radius: 5px;margin-top: 10px;margin-bottom: 10px;object-fit: cover;">
				<img class="selo" src="imgs/selo.png">
				<img class="profile" src="imgs/profile.png">
				<div class="follow-news">
					<p>Apreciar</p>
					<i class="fas fa-user-plus"></i>
				</div>

				<div class="quote-news">
					<i class="fas fa-quote-right"></i>
					<i class="fas fa-quote-left"></i>
					<p>Anúncios Oficiais e Atualizações</p>
				</div>
				<div class="job-news">
					<i class="fas fa-pen-fancy"></i>
					<p>nova.com.br</p>
				</div>
				<p class="publish-news">data: <a>-/-/-</a></p>
				<div class="horizontal-line-news"></div>
				<div class="description-news">
					<p>O cartão vermelho é de exclusivo uso da nova. Somente membros oficiais podem utilizá-los, para comunicar atualizações, correções e super novidades para a nossa rede. Ele aparecerá automaticamente em seu feed.
					<a class="name-news"> ~ nova.com.br</a>
					</p>
				</div>
				<div class="comment-highlight-news">
					<i class="far fa-comment-alt"></i>
				</div>
			</div>
		</div>

		<div class="main-venda" data-anime="up">
			<div>
				<div class="icons-right">
					<div><i class="fas fa-chevron-up" style="color: cyan;"></i></div>
					<div><i class="far fa-heart"></i></div>
					<div><i class="far fa-star"></i></div>
				</div>
				<div class="grid-superior">
					<div id="first-tag" class="tag-superior">
						<i class="fas fa-hashtag"></i>
						desenho
					</div>
					<div class="tag-superior">
						<i class="fas fa-hashtag"></i>
						design
					</div>
					<div class="tag-superior">
						<i class="fas fa-hashtag"></i>
						fotografia
					</div>
					<div class="tag-superior">
						<i class="fas fa-hashtag"></i>
						artes
					</div>
					<div class="tag-superior">
						<i class="fas fa-hashtag"></i>
						paisagem
					</div>
					<div id="tag-venda" class="tag-superior">
						<i class="fas fa-hashtag"></i>
						venda
					</div>
				</div>
				<img src="imgs/sonho.jpg" width="920px" height="400px;" style="border-radius: 5px;margin-top: 10px;margin-bottom: 10px;object-fit: cover;">
				<img class="selo" src="imgs/selo.png">
				<img class="profile" src="imgs/profile.png">
				<div class="follow-venda">
					<p>Apreciar</p>
					<i class="fas fa-user-plus"></i>
				</div>

				<div class="quote-venda">
					<i class="fas fa-quote-right"></i>
					<i class="fas fa-quote-left"></i>
					<p>Meu anúncio</p>
				</div>
				<div class="job-venda">
					<i class="fas fa-pen-fancy"></i>
					<p>nova.com.br</p>
				</div>
				<p class="publish-venda">data: <a>-/-/-</a></p>
				<div class="horizontal-line-venda"></div>
				<div class="description-venda">
					<p>Por último, este é o anúncio de vendas!! (Ainda em desenvolvimento para implementação), mas todos aqueles que desejam vender seus produtos mais artísticos, aqui é o lugar. <<<3 Nosso sistema previne fraudes, anúncios maliciosos, conteúdo tendencioso, incluindo as famosas "fake news". Aqui, na nova, é o lugar perfeito, que você esperava, de uma verdadeira rede social. Seja você profissional ou amador, apreciador da arte ou simplesmente alguém de passagem, temos certeza que irá ter uma experiência inovadora conosco. #AArteReinaNaNova
					<a class="name-venda"> ~ nova.com.br</a>
					</p>
				</div>
				<div class="comment-highlight-venda">
					<i class="far fa-comment-alt"></i>
				</div>
			</div>
		</div>
	</div>

	<!-- TEXTO FINAL -->
	<div class="end">
		<i class="far fa-check-circle" data-anime="up" id="txt3"></i>
		<h1 id="txt4">
			Parabéns!
		</h1>
		<p id="txt5">
			Agora
			<a style="color: inherit; cursor: pointer; text-decoration: underline;" href="profile.php">complete o seu perfil</a>
			e explore a rede!
		</p>
		<!-- 	
		<h1 id="txt4">
			Não pare por aqui :)
		</h1>
		<a style="cursor: pointer; text-decoration: underline;" onclick="toggleLock()" id="txt5">
			Acesse qualquer tema
		</a>
		-->
	</div>
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