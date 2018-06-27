<!DOCTYPE HTML>
  <html lang="fr">
    <head>
      <title>Cookie</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="ISO-8859-1" />
    </head>
    <body>
      <?php
        echo '<p>' . $_COOKIE['prenom'] . '</p>';
        echo '<p>' . $_COOKIE['nom'] . '</p>';
        echo '<p>' . $_COOKIE['age'] . 'ans</p>';
      ?>
    </body>
  </html>
