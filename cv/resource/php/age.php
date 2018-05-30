<?php
if (isset($_POST['date'])) {
  $date = $_POST['date'];
  $jour = $date[8] . $date[9];
  $mois = $date[5] . $date[6];
  $an = $date[0] . $date[1] . $date[2] . $date[3];


  if ($jour < 31 && $jour > 0 && $mois < 12 && $mois > 0) {
    $mois_jour = $mois . $jour;

    if ($mois_jour < date('md')) {
      echo date('Y') - $an . ' ans';
    }
    else {
      echo date('Y') - $an -1 . ' ans';
    }
  }
}
 ?>
