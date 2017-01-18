<?php

$link = mysqli_connect("localhost", "root", "", "formation")
		or die("Impossible de se connecter : " . mysql_error());
mysqli_query($link, "SET NAMES UTF8");

function recupTitres() {
	global $link;
	$resultat = mysqli_query($link, 'SELECT * FROM `menu`');
	$titres = [];
	while ($data = mysqli_fetch_assoc($resultat)) {
		$titres[$data['id']] = $data['titre'];
		
	}
	return $titres;
	
}

function editerTitre($id, $titre) {
	global $link;
	$query = "UPDATE `menu` SET `titre`='" . $titre . "' WHERE `id`='" . $id . "'";
	mysqli_query($link, $query);
}

function ajouterTitre($titre) {
	global $link;
	$query = "INSERT INTO `menu` (titre) VALUES ('" . $titre . "')";
	mysqli_query($link, $query);
}

function suprimerTitre($id) {
	global $link;
	$query="DELETE FROM `menu` WHERE `id`='" .$id ."'";
	mysqli_query($link, $query);
}
