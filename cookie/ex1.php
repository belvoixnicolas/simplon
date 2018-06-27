<?php
  if (isset($_GET['nom']) && isset($_GET['prenom'])) {
    setcookie('nom', $_GET['nom'], time() + 365 * 24 * 3600, null, null, false, true);
    setcookie('prenom', $_GET['prenom'], time() + 365 * 24 * 3600, null, null, false, true);
  }
 ?>
<!DOCTYPE HTML>
  <html lang="fr">
    <head>
      <title>exo 1</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="ISO-8859-1" />
    </head>
    <body>
      <?php
        if (isset($_COOKIE['prenom']) && isset($_COOKIE['nom'])) {
      ?>
       <p>Bonjour <?php echo $_COOKIE['prenom'] . ' ' . $_COOKIE['nom']; ?>.</p>
      <?php
        }else {
      ?>
      <form action="#" method="get">
        <p>
          <label for="nom">Nom : </label>
          <input type="text" name="nom" id="nom"/>
        </p>

        <p>
          <label for="prenom">Prénom : </label>
          <input type="text" name="prenom" id="prenom"/>
        </p>

        <p>
          <input type="submit" value="Envoyer"/>
        </p>
      </form>
      <?php
        }
      ?>
    </body>
  </html>
