<?php
include('include/tabCategories.php');
include('include/tabProduits.php');
include('include/fonctions/tva.php');
include('include/fonctions/panier.php');

// $basket=[];
// $basket = panier($basket, "1", "5");
// var_dump($basket);

// $prixHTduProduit = 20;
// $taux = 20;
// $prixTTCduProduit = prixTTC($prixHTduProduit, $taux);
// $qte = 3;
// $panier = panier($prixHTduProduit, $taux, $qte);
// // echo $prixTTCduProduit;
// echo $panier;


  // print_r($produits);

  // $produits[0]['categorie']=$categories[4];
  // $produits[0]['categorie']=$categories[0];
  // $produits[1]['categorie']=$categories[0];
  // $produits[2]['categorie']=$categories[0];
  

  // foreach ($produits as $cle => $produit) :
  //   foreach ($categories2 as $key => $categorie) :
  //     echo($produit['categorie'].'--'.$categorie['nom'].'<br>');
  //     if ($produit['categorie'] == $categorie['nom']) :
  //       $produits[$cle]=$categorie['nom'];
  //     endif;
  //   endforeach;
  // endforeach;

  // foreach ($produits as $produit) :
  //   foreach ($categories2 as $key => $categorie) :
  //   if ($produit['categorie'] == $categorie[$key]['id']) :

  //   endif;
  // endforeach;
  // endforeach;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TD e-commerce procédurale</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<?php include('include/menu.php');?>
<?php include('include/categories.php');?>
<?php include('include/produits.php');?>

</body>
</html>