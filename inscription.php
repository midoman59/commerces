<!DOCTYPE html>
<html>
	<head>
		<title>INSCRIPTION</title>
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
			<h2>INSCRIPTION</h2> 
			<form action="submit" method="post">
				<label for="prenom">Votre prenom : </label><input type="text" name="prenom"/>
				<label for="nom">Votre nom : </label><input type="text" name="nom"/>
				<label for="mail">Votre Mail : </label><input type="text" name="mail"/>
				<label for="password">Votre Password : </label><input type="text" name="password"/>
				<input type="submit" value="Inscription"/>
			</form>
		</div>
	</body>
</html> 

<?php