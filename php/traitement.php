<!DOCTYPE HTML>
  <html lang="fr">
    <head>
      <title>Connexion</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="ISO-8859-1" />
    </head>
    <body>
      <?php
        if (isset($_POST['mail']) && isset($_POST['psw'])) {
          echo '<p>Le mail est ' . htmlspecialchars($_POST['mail']) . '.</p>';
          echo '<p>Le mot de passe est ' . htmlspecialchars($_POST['psw']) . '.</p>';
          echo '<p>Votre adresse ip est ' . $_SERVER['REMOTE_ADDR'] . '.</p>';
          echo '<p>L\'url de cette page est ' . $_SERVER['PHP_SELF'] . '.</p>';
        }
      ?>
    </body>
  </html>
