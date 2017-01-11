<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$link = mysqli_connect("localhost", "root", "", "formation")
		or die("Impossible de se connecter : " . mysql_error());
mysqli_query($link, "SET NAMES UTF8");


	echo '<form method="POST" action="AjouterMenu.php">';
	echo'<input type="text" name="toto" />';
	echo'<input type="submit" value="valider"/>';
	echo '</form>';

if (isset($_POST['toto'])) {
	mysqli_query($link, "INSERT INTO `menu` (titre) VALUES ('".$_POST['toto']."')" );
	header('location:gestionMenu.php?page=menuHaut');
}

mysqli_close($link);

