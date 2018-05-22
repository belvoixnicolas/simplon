<?php
if (isset($_POST['sexe']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['age']) && isset($_POST['adresse']) && isset($_POST['ville']) && isset($_POST['loisir']) && isset($_POST['contenu'])) {
  $sexe = (string) $_POST['sexe'];
  $nom = (string) $_POST['nom'];
  $prenom = (string) $_POST['prenom'];
  $age = (string) $_POST['age'];
  $adresse = (string) $_POST['adresse'];
  $ville = (string) $_POST['ville'];
  $loisir = (string) $_POST['loisir'];
  $contenu = (string) $_POST['contenu'];

  $message = 'Sexe : ' . $sexe . '<br/>' . $nom . ' ' . $prenom . '<br/>Age : ' . $age . ' ans<br/>' . $adresse . '<br/>' . $ville . '<br/>Loisir : <br/>' . $loisir . '<br/>Text : <br/>' . $contenu;

  mail('belvoixnicolas1997@gmail.com', 'mail', $message);
}
else {
  echo "<h1>Les informations requise ne sont pas informer.";
  iclude('../index.html');
}
?>
