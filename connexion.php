<?php
//on teste si le visiteur a soumis le formulaire de connexion
if (isset($_POST['connexion'])) {
	if ((isset($_POST['mail']) && !empty($_POST['mail'])) && (isset($_POST['password']) && !empty($_POST['password']))) {
		$link = mysqli_connect("localhost", "root", "", "formation")
				or die("Impossible de se connecter : " . mysql_error());
		mysqli_query($link, "SET NAMES UTF8");
		$resultat = mysqli_query($link, 'SELECT * FROM `logintableuser` WHERE `mail`="' . $_POST['mail'] . '" AND `password`="' .(md5($_POST['password'])). '"');
		$data=  mysqli_fetch_assoc($resultat);
		mysqli_close($link);
		
		//si on obtient une seul répense,alors l'utilisateur est un membre
		if (mysqli_num_rows($resultat)==1) {
			session_start();
			$_SESSION['mail'] = $_POST['mail'];
			header('location:gestionMenu.php');
			exit();
		}

		//si on ne trouve aucune répense,le visiteur s'est trompé soit dans son login
		//soit dans son mot de pass
		elseif (mysqli_num_rows($resultat) == 0) {
			$erreur = 'Compte non reconnu.';  
		}
		// si non il y a deux personnes dans la meme base de donnés
		//avec les memes identifiants et mot de passe
		else {
			$erreur = 'Probème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.';
		}
	} else {
		$erreur = 'Au moins un des champs est vide.';
	}
}
?>



<!DOCTYPE html>
<html>
	<head>
		<title>TODO supply a title</title>
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
			input{ width: 500px;    }
		</style>
	</head>
	<body>
		<div class="conteneur">
			<h2>Accés membre</h2> 
			<form action="connexion.php" method="post">
				<label for="mail">Votre Mail : </label><input type="text" name="mail" value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['mail'])); ?>"/>
				<label for="password">Votre Password : </label><input type="text" name="password" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>"/>
				<input type="submit" name="connexion" value="connexion"/>
			</form>
			<p>Pas encore inscrit?</p>
			<form action="inscription.php">
				<input type="submit" value="Inscrivez vous gratuitement"/>
			</form>
			<?php
			if (isset($erreur))
				echo '<br /><br />', $erreur;
			?>
		</div>
	</body>
</html> 

