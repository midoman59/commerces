<?php

include_once('/modeles/titreBDD.php');
include_once '/vues/vueEditerTitreMenuHaut.php';
if (isset($_POST['newTitre']) && $_POST['newTitre'] != '') {
	editerTitre($_GET['editer'], $_POST['newTitre']);
	header('location:gestionMenu.php?page=menuHaut');
}