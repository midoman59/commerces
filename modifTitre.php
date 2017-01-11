<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$link = mysqli_connect("localhost", "root", "", "formation")
		or die("Impossible de se connecter : " . mysql_error());
mysqli_query($link, "SET NAMES UTF8");

if (isset($_GET['editer'])) {
	echo '<form method="POST" action"modifTitre.php?editer=' . $_GET['editer'] . '">';
	echo'<input type="text" name="toto" />';
	echo'<input type="submit" value="valider"/>';
	echo '</form>';
}
if (isset($_POST['toto'])) {
	mysqli_query($link, "UPDATE `menu` SET `titre`='" . $_POST['toto'] . "' WHERE `id`='" . $_GET['editer'] . "'");
	header('location:gestionMenu.php?page=menuHaut');
}

mysqli_close($link);
