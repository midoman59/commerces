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
      li div
      {
        display: inline-block;
        text-align: center;
        margin-right: 50px;
      }
      li div:first-child{
        width: 100px;
        height: 30px;
        background-color: grey;
        border: 1px solid gray; 
      }
      ul{list-style: none}

    </style>
  </head>
  <body>

    <div>
      <?php
      $link = mysqli_connect("localhost", "root", "", "formation")
              or die("Impossible de se connecter : " . mysql_error());
      mysqli_query($link, "SET NAMES UTF8");




      $resultat = mysqli_query($link, 'SELECT * FROM `menu`');
      echo'<ul>';
      echo'<a href="http://localhost/commerces/ajouterMenu.php">Ajouter</a>';
      while ($data = mysqli_fetch_assoc($resultat)) {
        echo '<li>'
        . '<div>'
        . '<a href="http://localhost/commerces/gestionMenu.php?id=' . $data['id'] . '">' . $data['titre'] . '</a>'
        . '</div>'
        . '<div>'
        . '<a href="http://localhost/commerces/modifTitre.php?editer=' . $data['id'] . '">Editer</a>'
        . '</div>'
        . '<div>'
        . '<a href="http://localhost/commerces/ajouterMenu.php?supprimer=' . $data['id'] . '">Supprimer</a>'
        . '</div>'
        . '</li>';
      }

      echo'</ul>';

      mysqli_close($link);
      ?>

    </div>


  </body>
</html>  


