<?php

$categories = array(
  "Appareil", "Pellicule", "Décoration", "Cadres", "Développement"
);

$link1 = "https://static.fnac-static.com/multimedia/Images/FR/NR/f5/bc/73/7585013/1540-1/tsp20151026162609/Reflex-Nikon-D750-AF-S-24-120-mm-f-4-VR.jpg";
$link2 = "https://www.digit-photo.com/images/produits/FNBI1700646/1.jpg";
$link3 = "https://cdn.laredoute.com/products/680by680/e/5/0/e50ee58a17c9f9d308c0735948bb51bf.jpg";
$link4 = "https://photos.zodio.fr/zodio-magento/catalog/products/source/1/5/1569446660263225_D.jpg?width=580&height=580&fit=bounds";
$link5 = "https://www.photoservice.com/p3/produits_photo/b/tirage_1.jpg" ;

$categories2 = array(
  array('nom'=> "$categories[0]", 'description' => "Tous les appareils photos argentiques et numériques.", 'image' => "$link1"),
  array('nom'=> "$categories[1]", 'description' => "Toutes les pellicules photos.", 'image' => "$link2"),
  array('nom'=> "$categories[2]", 'description' => "Décorez votre intérieur avec vos photos.", 'image' => "$link3"),
  array('nom'=> "$categories[3]", 'description' => "Cadres photos adaptés.", 'image' => "$link4"),
  array('nom'=> "$categories[4]", 'description' => "Matériel pour développer vous-même vos photos.", 'image' => "$link5"),
  
);

for ($i = 0; $i < count($categories2); $i++) :
  $categories2[$i]['id']=$i;
endfor;
// var_dump($categories2)
?>