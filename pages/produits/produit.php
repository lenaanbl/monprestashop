<?php 


    $categories = DatabaseCategorieDAO::getAllCat();


    foreach($categories as $cat){

      ?>

    <!-- on affiche le nom de la catégorie -->
    <h3 class="display-6 mt-5 text-center"><?php echo $cat->getNomCategorie() ?></h3>  
    <div class="container-md pt-5 overflow-hidden">		
    <div class="row gy-5 my-2">

      
    <?php 
      
          $tabProduit = DatabaseCategorieDAO::getProduitsByCategorie($cat->getIdCategorie());

          foreach($tabProduit as $prod){
        ?>


      <div class="col-12 col-md-6 col-lg-3">
        <a href="" class="content-food text-muted nav-link text-center">
        <div class="card" style="width: 18rem;">
          <img src="assets/images/produits/<?php echo $prod->getPathPhoto() ?>" class="card-img-top" style="height: 320px;" alt="">
          <div class="card-body">
            <h5 class="card-title"><?php echo $prod->getNomProduit() ?></h5>
            <p class="card-text">Prix : <?php echo $prod->getPrix() ?></p>
            <p class="card-text"> Description : <?php echo $prod->getDescription(); ?></p>


            <?php if(!empty($_SESSION['id_client'])){ ?>

                <form action="" method="POST">				                   
                    <input type="hidden" name="id_produit" value="<?php echo $prod->getIdProduit(); ?>">
                    <input type="number" name="quantite" required>
                    <label class="form-label">Quantité :</label> <br> <br>
                    <input type="submit" value="Acheter" class="btn btn-primary">
                </form>
            <?php } 
            
            else {
                
                echo"<br>";
                
              

             } ?>

          </div>
        </div>
        </a>
      </div>

      <?php 
        }
      }        
      
      ?>

    </div>	
  </div>