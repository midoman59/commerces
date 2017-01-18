<?php
include_once('/modeles/titreBDD.php');
$titres = recupTitres($link);
?>
<table>
	<thead>
		<tr>
			<th>Titre de menu</th>
			<th width="100"></th>
			<th width="100"></th>

		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($titres as $key => $value) {
			?>
			<tr>
				<td> <?php echo $value ?></td>
				<td><a href="http://localhost/commerces/gestionMenu.php?editer=<?php echo $key ?>">Editer</a> </td>
				<td>Suprimmer</td>
			</tr>
		<?php } ?>
	</tbody>
</table>
