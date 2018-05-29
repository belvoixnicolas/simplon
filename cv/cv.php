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
      <?php
        if ($_POST['password'] == '23e3k23e3k') {
          include('resource/php/header.php');
          include('resource/php/corp.php');
        }
        else {
          include('index.html');
        }
       ?>
    </body>
</html>
