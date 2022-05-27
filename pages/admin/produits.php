<div>
  <img src="assets/images/produit.jpg" alt="">
</div>

<a style="margin:15px;" href="index.php?page=ajouterProduit" class="btn btn-secondary btn-lg " role="button">Ajouter un Produit</a>

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
				<p class="content-food text-muted nav-link text-center"></p>
				<div class="card" style="width: 18rem;">

					<form action="" method="POST">
						<img src="assets/images/produits/<?php echo $prod->getPathPhoto() ?>" class="card-img-top" style="height: 320px;" alt="">
						<div class="card-body">
							<h5 class="card-title"><input type="text" class=" text-center name mt-2" name="nom" placeholder="<?php echo $prod->getNomProduit();?>"></h5>
							<p class="card-text">Prix : <input type="text" class=" text-center name mt-2" name="prix" placeholder="<?php echo $prod->getPrix();?>"> €</p>
							<p> Description : <br>
							<textarea class="form-control z-depth-1" rows="3" name="description" placeholder="<?php echo $prod->getDescription();?>"></textarea></p>
							<input type="hidden" name="id" value="<?php echo $prod->getIdProduit(); ?>">										
							<input type="submit" class="modify-btn" value="modifier">
							
					
					</form>					
				</div>
			</div>
				
			
			
			
	</div>
      <?php 
        }		
	
      }        
      
      ?>

    </div>	
	</div>