<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Tipos de fuentes del documento.-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,375;1,375&family=Overpass:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Rubik+Vinyl&family=Special+Gothic+Expanded+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Overpass:ital,wght@0,100..900;1,100..900&family=Rubik+Vinyl&display=swap" rel="stylesheet">
    
    <!-- Hoja de estilos -->
    <link rel="stylesheet" href="./css/styles.css">

    <!-- Favicon -->

    <link rel="icon" type="image/vnd.microsoft.icon" href="favicon/utensils-solid.svg">

    <!-- Carta del restaurante "Mundo por España" -->

    <title>Carta</title>
</head>
<body>
<?php
  if (file_exists('./xml/menu.xml')){
      $menus = simplexml_load_file('./xml/menu.xml');
  } else{
      exit('Error abriendo el archivo de datos');
  }
?>

<h1>MENÚ: EL MUNDO POR ESPAÑA</h1>

<div class="menu-container">
    <!-- Entrantes -->
    <table class="Entrantes">
        <thead>
            <tr>
                <th>ENTRANTES</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach($menus->menu as $menuplato){
            if($menuplato['plato'] == 'Entrante'){
                echo '<tr>';
                echo '<td>'.$menuplato->title.'</td>';
                echo '</tr>';
            }
        }
        ?>
        </tbody>
    </table>

    <!-- Platos Principales -->
    <table class="Principales">
        <thead>
            <tr>
                <th>PLATOS PRINCIPALES</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach($menus->menu as $menuplato){
            if($menuplato['plato'] == 'Principal'){
                echo '<tr>';
                echo '<td>'.$menuplato->title.'</td>';
                echo '</tr>';
            }
        }
        ?>
        </tbody>
    </table>

    <!-- Postres -->
    <table class="Postres">
        <thead>
            <tr>
                <th>POSTRES</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach($menus->menu as $menuplato){
            if($menuplato['plato'] == 'Postre'){
                echo '<tr>';
                echo '<td>'.$menuplato->title.'</td>';
                echo '</tr>';
            }
        }
        ?>
        </tbody>
    </table>
</div>


</body>
</html>
