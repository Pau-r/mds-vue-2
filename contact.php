<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact</title>
	<link rel="stylesheet" href="contact.css">
	<link rel="stylesheet" href="header.css">
	<link rel="stylesheet" href="footer.css">
	<link rel="stylesheet" href="index.css">

</head>
<body>
	<main>
	<div class="one">
		<header>

			<?php include ("header.php"); ?>

					<?php include ("menu-burger.php"); ?>

				</nav>
			
		</header>

		<section >

			<h1>Contact</h1>

			<form method="post" action="formulaire-contact.php">
				<label for="nom">Nom</label>
				<input type="text" id="nom" name="nom" placeholder="Noël Flantier">
				<label for="email">E-mail</label>
				<input type="text" id="email" name="email" placeholder="cadeau@noel.com">
				<label for="message">Message</label>
				<textarea id="message" name="message" placeholder="Comment est votre blanquette ?" rows="20"></textarea>

				<div class="g-recaptcha" data-sitekey="6LcncNsUAAAAAN71PqjbsXKMEhUwV97utccSZn4n"></div>

				<input type="submit" value="Envoyer">

			</form>
			
		</section>  

		<footer>
			<?php include ("footer.php"); ?>

		</footer>
	</div>
	</main>	
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="index.js"></script>
		<script src="https://www.google.com/recaptcha/api.js"></script>
	
</body>
</html>