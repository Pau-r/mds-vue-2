<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portfolio</title>
	<link rel="stylesheet" href="projets.css">
	<link rel="stylesheet" href="header.css">
	<link rel="stylesheet" href="footer.css">
</head>
<body>
	<div class="one">
		<main id="main">

			<header>			
				<nav>
					<?php include ("header.php"); ?>

					<?php include ("menu-burger.php"); ?>

				</nav>				

				<h1>Portfolio</h1>

			</header>

			<section class="menu-filtre">

				<button id="all-projects" class="filtre-projets" 
				:class="{active: active == 'all'}" v-on:click="makeActive('all')">
					Tous les projets
				</button>
				<button id="webdesign" class="filtre-projets" 
				:class="{active: active == 'webdesign'}" v-on:click="makeActive('webdesign')">
					Webdesign
				</button>
				<button id="graphisme" class="filtre-projets" 
				:class="{active: active == 'graphisme'}" v-on:click="makeActive('graphisme')">
					Graphisme
				</button>
				<button id="photographie" class="filtre-projets" 
				:class="{active: active == 'photographie'}" v-on:click="makeActive('photographie')">
					Photographie
				</button>
				<button id="videos" class="filtre-projets" 
				:class="{active: active == 'videos'}" v-on:click="makeActive('videos')">
					Vidéos
				</button>
				<button id="alternance" class="filtre-projets" 
				:class="{active: active == 'alternance'}" v-on:click="makeActive('alternance')">
					Alternance
				</button>
			</section>


			<section class="container">

				<div v-for="p in projets" v-if="p.categorie == active || active == 'all'" class="flip-card grid-item show">
					<div class="flip-card-inner">
						<a class="flip-card-front" :class="p.class" :href="p.image"></a>
						<a class="flip-card-back" :href="p.image">{{p.titre}}</a>
					</div>
				</div>

			</section>

			<footer>
				<?php include ("footer.php"); ?>

			</footer>

			<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.5/vue.min.js"></script>
			<script src="index.js"></script>
			<script>
// Creating a new Vue instance and pass in an options object.
var portfolio = new Vue({

	// A DOM element to mount our view model.
	el: '#main',

	// Define properties and give them initial values.
	data: {
		active: "all",
		projets:[
		{
			titre:"Coin de détente",
			image:"canard.php",
			categorie:"photographie",
			class:"canard"

		},
		{
			titre:"Cantabria",
			image:"cantabria.php",
			categorie:"webdesign",
			class:"cantabria"

		},
		{
			titre:"Unique",
			image:"application.php",
			categorie:"webdesign",
			class:"appli"

		},
		{
			titre:"Les ets Raulet",
			image:"ets.php",
			categorie:"webdesign",
			class:"ets"

		},
		{
			titre:"Dans la famille...",
			image:"portrait.php",
			categorie:"photographie",
			class:"portrait"

		},
		{
			titre:"Communication",
			image:"visuels.php",
			categorie:"webdesign",
			class:"visuel"

		}
		]
	},

	// Functions we will be using.
	methods: {
		makeActive: function(item){
			// When a model is changed, the view will be automatically updated.
			this.active = item;
		}
	}
});
</script>

</main>
</div>

</body>
</html>