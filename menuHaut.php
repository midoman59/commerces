
		<?php
		/*
		 * To change this license header, choose License Headers in Project Properties.
		 * To change this template file, choose Tools | Templates
		 * and open the template in the editor.
		 */
		$link = mysqli_connect("localhost", "root", "", "formation")
				or die("Impossible de se connecter : " . mysql_error());
		mysqli_query($link, "SET NAMES UTF8");
		$resultat = mysqli_query($link, 'SELECT * FROM `menu`');
		echo'<ul>';
		echo'<a href="http://localhost/commerces/ajouterMenu.php">Ajouter</a>';
		while ($data = mysqli_fetch_assoc($resultat)) {
			echo '<li>'
			. '<ul>'
			. '<li><a href="http://localhost/commerces/gestionMenu.php?id=' . $data['id'] . '">' . $data['titre'] . '</a></li>'
			. '<li><a href="http://localhost/commerces/modifTitre.php?editer=' . $data['id'] . '">Editer</a></li>'
			. '<li><a href="http://localhost/commerces/ajouterMenu.php?supprimer=' . $data['id'] . '">Supprimer</a></li>'
			. '</ul>'
			. '</li>';
		}
		echo'</ul>';

		mysqli_close($link);
		?>
