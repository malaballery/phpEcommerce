<!-- <div class="row row-cols-4 text-center g-0">
  <?php foreach ($produits as $produit) :
  
  if (is_array($produit['categorie'])) :
    $afficherCat="";
    foreach ($produit['categorie'] as $value) :
      $afficherCat.= $value.', ';
    endforeach;
    if (substr($afficherCat, -2, 1) == ',') :
      $afficherCat = substr($afficherCat, 0, -2);
    endif;
    else : 
    $afficherCat=$produit["categorie"];
    endif;
    ?>
      <div class="col">
        <h2><?php echo strtoupper($produit["désignation"]) ?></h2>
        <p><?php echo $produit["description"] ?></p>
        <p>Prix TTC : <?php echo round(($produit["prix HT"]+($produit["prix HT"]*$produit["TVA"])), 2) ?> €</p>
        <p><?php echo $afficherCat ?></p>
        <img src="<?php echo $produit["image"] ?>" alt="<?php echo $afficherCat ?>" width="50%">
      </div>
    <?php
        endforeach;
  ?>
</div> -->



<!-- remplace boucle foreach lignes6-8 : 
  for ($i=0; $i < count($produit['categorie']); $i++) :
      $afficherCat.= $produit['categorie'][$i].', ';
    endfor;
    if (substr($afficherCat, -2, 1) == ',') :
      $afficherCat = substr($afficherCat, 0, -2);
    endif;-->
<!-- 
    if (is_array($produit['categorie'])) :
      $afficherCat="";
      foreach ($produit['categorie'] as $value) :
        $afficherCat.= $value.', ';
      endforeach;
      if (substr($afficherCat, -2, 1) == ',') :
        $afficherCat = substr($afficherCat, 0, -2);
      endif;
      else : 
      $afficherCat=$produit["categorie"];
    endif; -->