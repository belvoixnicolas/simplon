<?php
  if (isset($_POST['nb'])) {
    setcookie('nb', $_POST['nb'], time() + 365 * 24 * 3600, null, null, false, true);
  }
?>
<!DOCTYPE HTML>
  <html lang="fr">
    <head>
      <title>exo 3</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="ISO-8859-1" />
      <link rel="stylesheet" type="text/css" href="ex3.css" />
    </head>
    <body>
      <header>
        <h1>Images</h1>
      </header>
      <main>
        <?php
        if (isset($_COOKIE['nb'])) {
        $nbimg = $_COOKIE['nb'];
        }else {
        $nbimg = 9;
        }

        for ($i=0; $i < $nbimg; $i++) {
          echo '<img src="img/img.jpg" alt="img"/>';
        } ?>
      </main>
      <footer>
        <?php
        if (isset($_COOKIE['nb'])) {
          echo '<p>Vous avez choisie ' . $_COOKIE['nb'] . ' images</p>';
        }else {
          echo '<p>Notre site utilise des cookies. <input type="button" value="ok" onclick="ok()"/></p>';
        }
        ?>
      </footer>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript">
        function ok() {
          document.querySelector('footer').innerHTML = '<form action="#" method="post"><label for="nb">Nombre d\'images : </label><input type="number" name="nb" id="nb"/><br/><input type="submit" value="envoyer"/></form>';
        }
      </script>
    </body>
  </html>
