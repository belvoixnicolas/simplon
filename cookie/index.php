<?php
  setcookie('nom', 'Belvoix', time() + 365 * 24 * 3600);
  setcookie('prenom', 'Nicolas', time() + 365 * 24 * 3600);
  setcookie('age', '20', time() + 365 * 24 * 3600);
?>
<!DOCTYPE HTML>
  <html lang="fr">
    <head>
      <title>Cookie</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="ISO-8859-1" />
    </head>
    <body>
      <p>Création de cookie. Clique <a href="pages.php">ici</a> pour voir.</p>
    </body>
  </html>
