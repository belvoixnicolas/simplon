<?php
  $jour = '03';
  $mois = '07';
  $an = '1997';

  $mois_jour = $mois . $jour;

  if ($mois_jour < date('md')) {
    echo date('Y') - $an . ' ans';
  }
  else {
    echo date('Y') - $an -1 . ' ans';
  }

 ?>
