<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="damier.css" rel="stylesheet" type="text/css"> 
  <title>LE DAMIER</title>
</head>
  <body>

  <?php
    echo '<div class="damier">';
      $lines = 10;
      $columns = 10;

      for ($l = 0; $l < $lines; $l++) {
          for ($c = 0; $c < $columns; $c++) {
              // Alternance entre "noire" et "blanche"
              $class = (($l + $c) % 2 == 0) ? 'noire' : 'blanche';
              echo '<div class="case ' . $class . '"></div>';
          }
      }
echo '</div>';
  ?>


  </body>
</html>