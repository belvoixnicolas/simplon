<?php
  $jour = '01';
  $mois = '06';
  $an = '1980';

  $truc = $mois . $jour;

  if ($truc < 0522) {
    echo 2018 - $an;
  }
  else {
    echo 2018 - $an -1;
  }

 ?>
