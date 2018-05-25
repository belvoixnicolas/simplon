<!DOCTYPE HTML>
  <html lang="fr">
    <head>
      <title>CV</title>
      <meta charset="UTF-8">
      <meta charset="ISO-8859-1" />
      <meta name="theme-color" content="red">
      <link rel="icon" type="image/x-icon" href="img/favicon.ico">
      <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" /><![endif]-->
      <link rel="stylesheet" type="text/css" href="css/css.css" />
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
          $souvenir2 = 'Se souvenir de moi';
          $souvenir = 1;
        }
        else {
          $souvenir2 = 'Ne pas se souvenir de moi';
          $souvenir = 0;
        }

        $message =
        '<div class ="corp"><h1>Demande prise en compte</h1>
        Titre : ' . $sexe . '.<br/>
        Prénom : ' . $prenom . '.<br/>
        Nom : ' . $nom . '.<br/>
        E-mail : ' . $mail . '.<br/>
        ' . $souvenir2 . '.</p></div>';

        echo $message;

        $headers = 'Content-type: text/html; charset=UTF-8';
        mail('belvoixnicolas1997@gmail.com', 'mail', $message, $headers);


        $link = mysqli_connect ("localhost","root","","test");

        if (!$link) {
          die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        $sql = "INSERT INTO truc(titre, nom, prenom, mail, souvenir, date) VALUES ('$sexe', '$nom', '$prenom', '$mail', '$souvenir', NOW())";

        mysqli_query($link, $sql);

        mysqli_close($link);
      }
      else {
        echo '<h1>Erreur</h1>';
      }

      ?>

    </body>
  </html>
