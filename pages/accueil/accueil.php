<div class = "title">
  <h2>Nos produits</h2>
</div>

  <?php 

    $categories = AccueilController::getCategorie();
    $cat = $categories['id_categorie'];

    $produits = AccueilController::getProdByCat($cat);
    

  ?>

  <?php

    foreach($categories as $cate){

      ?>

    <!-- on affiche le nom de la catégorie -->
    <div class="h3"><?php echo $cate->getNomCategorie() ?></div>  
    <div class="container-md pt-5 overflow-hidden">		
    <div class="row gy-5 my-2">

      
    <?php foreach($produits as $prod){
      
      if($cate = 1 && $prod->getIdCategorie()== 1) {
        ?>


      <div class="col-12 col-md-6 col-lg-3">
        <a href="" class="content-food text-muted nav-link text-center">
        <div class="card" style="width: 18rem;">
          <img src="assets/images/produits/<?php echo $prod->getPathPhoto() ?>" class="card-img-top" style="height: 320px;" alt="">
          <div class="card-body">
            <h5 class="card-title"><?php echo $prod->getNomProduit() ?></h5>
            <p class="card-text">Prix : <?php echo $prod->getPrix() ?></p>
            <?php if(!empty($_SESSION['id_client'])){ ?>
            <a href="#" class="btn btn-primary">Ajouter au panier</a>
            <?php } ?>
          </div>
        </div>
        </a>
      </div>

      <?php 
      }            
      
      ?>

      <?php if($cate == 2 && $prod->getIdCategorie() == 2){ ?>
      
          <div class="col-12 col-md-6 col-lg-3">
            <a href="" class="content-food text-muted nav-link text-center">
            <div class="card" style="width: 18rem;">
              <img src="assets/images/produits/<?php echo $prod->getPathPhoto() ?>" class="card-img-top" style="height: 320px;" alt="">
              <div class="card-body">
                <h5 class="card-title"><?php echo $prod->getNomProduit() ?></h5>
                <p class="card-text">Prix : <?php echo $prod->getPrix() ?></p>
                <?php if(!empty($_SESSION['id_client'])){ ?>
                <a href="#" class="btn btn-primary">Réserver</a>
                <?php } ?>
              </div>
            </div>
            </a>
          </div>
        
      <?php
            }
            
          }

        }
      ?>
    </div>	
  </div>

<?php 
  if(!empty($_SESSION['id_client'])){
?>




<!-- about -->
<section class = "about-section" id = "about-section">
  <div class = "container">
    <div class = "about-content">
      <div>
        <img src = "images/about-bg.jpg" alt = "">
      </div>
      <div class = "about-text">
        <div class = "title">
          <h2>Let's Presta</h2>
          <p>PrestaChope, la boutique qui vous aidera à faire de bons apéros</p>
        </div>
        <p>Nous existons depuis 2 ans, PrestaChope part d'une idée mise au point autour d'une table de quelques bière et 3 amis décidés à réaliser leur rêve d'enfant.
          L'un doué en entrepreunariat, l'un en marketing, l'un en communication, et les trois en informatique : un bon mélange permettant de créer la boutique sur laquelle vous êtes.
        </p>
        <p>Horaires : <br><br>
        Nous sommes disponibles 24/7 en ligne. <br>
      En magasin, nous sommes ouverts :
      Lundi, Mardi, Jeudi et Vendredi : 9h30 - 18h<br>
      Le Mercredi et le Samedi : 9h30 - 14h</p>
      </div>
    </div>
  </div>
</section>
<!-- end of about -->

<?php  
  }
?>

