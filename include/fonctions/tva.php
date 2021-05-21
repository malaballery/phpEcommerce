<?php

function prixTTC ($prixHT, $TVA, $taux=20) {
  if (empty($TVA)) :
    $taux = 20;
    else : 
      $taux = $TVA;
    endif;
  $prixTTC = $prixHT * ($taux/100+1);

  return round($prixTTC,2);
}
?>