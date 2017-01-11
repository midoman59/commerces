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
			.conteneur-admin .column:first-child{height: 100px;background-color: rgba(0,0,0,0.5);text-align: center;}
			.conteneur-admin .column:first-child h1{line-height: 100px;}
			.conteneur-admin .column:nth-child(2){padding-left: 0px;}
			.conteneur-admin .column:nth-child(2) p{padding: 17px;text-align: center;font-size: 20px;background-color: #22bb5b;color: wheat;margin-bottom: 0px;font-weight: bold;}
			.conteneur-admin .column:nth-child(2) ul{margin-left: 0px;}
			.conteneur-admin .column:nth-child(2) li{padding: 17px;border: 1px solid #157539;cursor: pointer;text-align: center;font-weight: bold;}
			.conteneur-admin .column:nth-child(2) li:hover{background-color: #22bb5b;color: wheat;}
			.conteneur-admin .column:nth-child(2) li div{display: inline-block;text-align: center;margin-right: 50px;}
			.conteneur-admin .column:nth-child(2) li div:first-child{width: 100px;height: 30px;background-color: grey;border: 1px solid gray;}
			ul{list-style: none;}
			.conteneur-admin .column:nth-child(3) ul li ul li{display: inline-block;width: 33%;}
			.conteneur-admin .column:nth-child(3) ul li ul:hover li:first-child{background-color: #22bb5b;color: wheat;}
	

		</style>
	</head>
	<body>
		<div class="row conteneur-admin">
			<div class="column small-12 medium-12 large-12">
				<h1>Administration du site</h1>
			</div>
			<div class="column small-12 medium-12 large-4">
				<p>MENU</p>
				<ul>
					<li><a href="http://localhost/commerces/gestionMenu.php?page=menuHaut">MENU HAUT</a></li>
					<li><a href="http://localhost/commerces/gestionMenu.php?page=slider">SLIDER</a></li>
					<li><a href="http://localhost/commerces/gestionMenu.php?page=produits">LISTE DES PRODUITS/PAGINATION</a></li>
					<li><a href="http://localhost/commerces/gestionMenu.php?page=items">FEATURED ITEMS</a></li>
					<li><a href="http://localhost/commerces/gestionMenu.php?page=menuBas">MENU BAS</a></li>
					<li><a href="http://localhost/commerces/gestionMenu.php?page=categories">CATEGORIES POPULAIRES</a></li>
				</ul>
			</div>
			<div class="column small-12 medium-12 large-8">

				<?php
				if (isset($_GET['page'])) {
					switch ($_GET['page']) {
						case 'menuHaut':
							include('menuHaut.php');
							break;
						case 'slider':
							include_once 'slider.php';
							break;
						case 'produits':
							include_once 'produits.php';
							break;
						case 'items':
							include_once 'items.php';
							break;
						case 'menuBas':
							include_once 'menuBas.php';
							break;
						case 'categories':
							include_once 'categories.php';
							break;
						default :
							echo 'cest lahhess';
					}
				}
				?>
			</div>
		</div>
	</body>
</html>  


