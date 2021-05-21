<?php include('include/fonctions/addCategory.php'); ?>
<?php include('include/fonctions/addProduct.php'); ?>
<?php
$categories2 = addCategory($categories2, "lou", "jfjfnf", "https://file1.topsante.com/var/topsante/storage/images/maman-et-enfant/bebe/sante-de-bebe/vitamines-pour-bebe-que-dit-le-pediatre-617444/8808524-2-fre-FR/Vitamines-pour-bebe-que-dit-le-pediatre.jpg?alias=exact1024x768_l");
?>

<div class="row row-cols-<?php echo count($categories2)?> text-center g-0">
  <?php foreach ($categories2 as $categorie2) :
      ?>
  <div class="col">
    <h2><a href="index.php?nom=<?php echo $categorie2['nom'] ?>"><?php echo $categorie2["nom"] ?></a></h2>
    <p><?php echo $categorie2["description"] ?></p>
    <img src="<?php echo $categorie2["image"] ?>" width="50%">
  </div>
      <?php
      endforeach?>
</div>


<?php
$produits = addProduct($produits, "rhubarbe", 2, "gght", 0.2, "https://www.cookomix.com/wp-content/uploads/2018/05/tarte-rhubarbe-thermomix-800x600.jpg", $categories2[5]['nom'], 15);
?>

<div class="row row-cols-<?php echo count($produits)?> text-center g-0">
  <?php foreach ($produits as $produit) :
  // echo ($produit['categorie'][1].'--'.$_GET['nom']);
  if (!empty($_GET)) :
    if ($_GET['nom'] == $produit['categorie']) :
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
        <p><a href="index.php?description=<?php echo $produit["description"] ?>">voir le détail</a></p>
        <p>Prix TTC : <?php echo (prixTTC($produit['prix HT'], $produit['TVA'])) ?> €</p>
        <p><?php echo $afficherCat ?></p>
        <?php
        if ($produit["stock"] <= 3) :
        ?><p class="danger"><strong>Produit en rupture de stock !</strong></p>
        <?php endif;
        ?>
        <img src="<?php echo $produit["image"] ?> " alt="<?php echo $afficherCat ?>" width="50%">
      </div>
    <?php
    endif;
  endif;
        endforeach;

  ?>
</div>


<!-- slide 16 -->
<!-- <?php foreach ($produits as $produit) :


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
        <p><?php
        if (isset($_GET['description'])):
          if ($_GET['description'] == $produit["description"]) :
        echo $produit["description"];
          endif;?></p>
        <p>Prix TTC : <?php echo round(($produit["prix HT"]+($produit["prix HT"]*$produit["TVA"])), 2) ?> €</p>
        <p><?php echo $afficherCat ?></p>
        <img src="<?php echo $produit["image"] ?> " alt="<?php echo $afficherCat ?>" width="50%">

      </div>
    <?php
      endif;
        endforeach;
  ?> -->

  <!-- OU ligne 18-->
<!-- <?php for ($i = 0; $i < count($categories2); $i++) :
?>
<div>
  <h2><?php echo $categories2[$i]["nom"] ?></h2>
  <p><?php echo $categories2[$i]["description"] ?></p>
  <img src="<?php echo $categories2[$i]["image"] ?>">
</div>
<?php
endfor?> -->