<!DOCTYPE HTML>
  <html lang="fr">
    <head>
      <title>CV</title>
      <meta charset="UTF-8">
      <meta charset="ISO-8859-1" />
      <meta name="theme-color" content="lightgrey">
      <link href="https://fonts.googleapis.com/css?family=Inconsolata|Itim" rel="stylesheet">
      <link rel="icon" type="image/x-icon" href="resource/img/favicon.ico">
      <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="resource/img/favicon.ico" /><![endif]-->
      <link rel="stylesheet" type="text/css" href="resource/css/style.css" />
    </head>
    <body>

      <div id="truc">
        <section id="belvoix_nicolas">
          <img id="img" src="resource/img/profil.jpg" alt="Belvoix Nicolas" onclick="connect()" />
          <h6>Belvoix</h6>
          <p>Nicolas</p>
          <div id="connect">
            <input id="mdp" type="password" />
            <button type="button" onclick="ident()">connexion</button>
          </div>
        </section>
      </div>

      <!-- header -->
      <?php include('resource/php/header.php'); ?>

      <!-- corp -->
      <?php include('resource/php/corp.php'); ?>

      <script src="resource/js/javascript.js"></script>
    </body>
</html>
