<html lang="fr">
  <head>
    <title>CV</title>
    <meta charset="UTF-8">
    <meta charset="ISO-8859-1" />
    <meta name="theme-color" content="red">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" /><![endif]-->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
  </head>
  <body>
    <header><img src="img/logo.png" alt="logo"></header>

    <?php
    ini_set("display_errors",0);error_reporting(0);
    if (isset($_POST['titre']) && isset($_POST['nom']) && isset($_POST['prenom'])) {
      $sexe = (string) $_POST['titre'];
      $nom = (string) $_POST['nom'];
      $prenom = (string) $_POST['prenom'];
      $mail = (string) $_POST['mail'];
      $souvenir = $_POST['souvenir'];

      if (isset($souvenir)) {
        $souvenir = 'Se souvenir de moi';
      }
      else {
        $souvenir = 'Ne pas se souvenir de moi';
      }

      $message =
      '<div class ="corp"><h1>Demande prise en compte</h1>
      <p>Titre : ' . $sexe . '.</p>
      <p>Prénom : ' . $prenom . '.</p>
      <p>Nom : ' . $nom . '.</p>
      <p>E-mail : ' . $mail . '.</p>
      <p>' . $souvenir . '.</p></div>';

      $message2 = 'Demande prise en compte
      Titre : ' . $sexe . '
      Prénom : ' . $prenom . '.
      Nom : ' . $nom . '.
      E-mail : ' . $mail . '.
      ' . $souvenir . '.';

      echo $message;

      mail('belvoixnicolas1997@gmail.com', 'mail', $message2);
    }
    else {
      include('index.html');
    }
    ?>

  </body>
</html>
