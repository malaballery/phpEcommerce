<?php
function addProduct ($product, $designation, $prixHT, $description, $TVA, $image, $categorie, $stock) {
  $array = array(array('désignation' => "$designation",'prix HT' => $prixHT, 'description' => "$description",'TVA' => $TVA, 'image' => "$image",'categorie' => $categorie, 'stock' => $stock ));
  $result = array_merge($product, $array);
  return $result;
};
?>