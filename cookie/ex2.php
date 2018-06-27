<!DOCTYPE HTML>
  <html lang="fr">
    <head>
      <title>exo 2</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="ISO-8859-1" />
      <link rel="stylesheet" type="text/css" href="ex2.css" />
    </head>
    <body>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <div id="cookie">
        <p>Se site web utilise des cookie. Clicker sur accepter pour approuver l'utilisation de cookies.</p>
        <input type="button" value="Accepter" onclick="ok()"/>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript">
        function ok() {
          $('#cookie').animate({height: 'toggle'}, 'slow');
        }
      </script>
    </body>
  </html>
