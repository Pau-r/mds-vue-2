<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page d'accueil</title>
</head>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="footer.css">
<link rel="stylesheet" href="header.css">
<!-- <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"> -->

<body>
	<div class="one">
		<main>
			<header>

				<nav>

					<?php include ("header.php"); ?>

					<?php include ("menu-burger.php"); ?>

				</nav>
				
			</header>

			<section class="f-container">
				<div class="f-titre"><h2>Pauline Raulet</h2><h1>Photographe/Webdesigner</h1></div>
				<img src="images/image-accueil.png" alt="Photographie d'un beagle sur une chaise ">
			</section>

			<section class="presentation-photo">
				<img class="photo" src="images/autoportrait.jpg" alt="photographie de la photographe et webdesigneuse regardant son chapeau dans son assiette">

				<article class="presentation-texte">

					<p class="apropos">
						Diplômée en <span class="couleur">Cycle Supérieur de Photographie</span> en 2014, j'ai réalisé différents stages au Studio Pin up et avec la photographe de mode Anne-Charlotte Moulard sur Paris.
						J'ai également exposé en 2016 à la 19e édition <span class="couleur">Biennale Internationale</span> de l’image de Nancy sur le thème du jeu avec ma série <span class="couleur">"Coin de détente"</span>.
						En 2018 je choisis de me reconvertir dans le <span class="couleur">Web design</span>, j'ai donc intégré l'Atelier iGloo à Villers-les-Nancy.
					</p>

					<p class="apropos">
						Je suis également passionnée de <span class="couleur">DIY</span>. J'ai animé de nombreux <span class="couleur">ateliers</span> tricot, crochet et DIY. Vous pouvez retrouver mes réalisations sur <a class="couleur" href="https://www.instagram.com/pau_raulet/">instagram</a> et sur mon blog <a class="couleur" href="http://www.walkingonthewool.com/">Walking on the wool</a>.
					</p>
				</article>

			</section>
			
			<section class="container">

				<div class="flip-card grid-item">
					<div class="flip-card-inner">
						<a class="flip-card-front canard" href="canard.php"></a>
						<a class="flip-card-back" href="canard.php">Coin de détente</a>
					</div>
				</div>

				<div class="flip-card grid-item">
					<div class="flip-card-inner">
						<a class="flip-card-front appli" href="application.php"></a>
						<a class="flip-card-back" href="application.php">Unique</a>
					</div>
				</div>

				<div class="flip-card grid-item">
					<div class="flip-card-inner">
						<a class="flip-card-front ets" href="ets-raulet.php"></a>
						<a class="flip-card-back" href="ets-raulet.php">Ets Raulet</a>
					</div>
				</div>

				<a class="voirplus grid-item" href="projets.php">Voir plus</a>

			</section>

			<?php include ("footer.php"); ?>

		</main>

	</div>
	
	<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
	<script src="index.js"></script>


</body>
</html>