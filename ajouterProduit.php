
<!DOCTYPE html>
<html>
	<head>
		<title>Connexion</title>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<link type="text/css" rel="stylesheet" href="style/jquery-ui.css" />
		<link href="style/lightbox.css" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="style/font-awesome.css"  rel="stylesheet" type="text/css" /> 
		<link rel="stylesheet" href="style/foundation.css" type="text/css">
		<link rel="stylesheet" href="style/index.css" type="text/css">
		<script type="text/javascript" src="js/jquery-3.1.1.js" ></script>
		<script type="text/javascript" src="js/jquery-ui.js" ></script>
		<style>

			body{width: 100%;height: 100%;background:white url(style/imageConnexion.jpg) no-repeat; background-size: cover}
			.conteneur{width: 1000px;margin: auto;margin-top: 10%; background: rgba(0,0,0,0.5);padding: 20px;}
			.input{ width: 200px;    }
		</style>
	</head>
	<body>
		<?php
		$link = mysqli_connect("localhost", "root", "", "formation")
				or die("Impossible de se connecter : " . mysql_error());
		mysqli_query($link, "SET NAMES UTF8");
		?>
		<form method="POST" action="AjouterMenu.php">
			<label for="nom">nom
				<input class="input" type="text" name="nom" />
			</label>
			<label for="nom">Marque
				<input class="input" type="text" name="marque" />
			</label>
			<label for="nom">Prix
				<input class="input" type="text" name="prix" />
			</label>
			<label for="nom">Catégorie
				<input class="input" type="text" name="categorie" />
			</label>
			<label for="nom">Sous Catégorie
				<input class="input" type="text" name="sousCategorie" />
			</label>
			<label for="nom">Déscription
				<input class="input" type="text" name="déscription" />
			</label>
			<label for="nom">Image
				<input type="file" name="nom" />
			</label>
			<input class="input" type="submit" value="valider"/>
		</form>
		<?php
		if (isset($_POST['toto'])) {
			mysqli_query($link, "INSERT INTO `menu` (titre) VALUES ('" . $_POST['toto'] . "')");
			header('location:gestionMenu.php?page=menuHaut');
		}

		mysqli_close($link);
		?>
	</body>
</html> 