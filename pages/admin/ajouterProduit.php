<div>
  <img src="assets/images/produit.jpg" alt="">
</div>  	



	<br>
	<br>
	<br>

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-50 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Nouveau produit</h2>
              <p class="text-white-50 mb-5">De la nouveauté !</p>
              <form action="" method="POST">

			  	<div class="form-outline form-white mb-4">
                  <input type="file" name="photo" class="form-control form-control-lg" />
                  <label class="form-label">Photo du Produit</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="text" name="nom_produit" class="form-control form-control-lg" />
                  <label class="form-label">Nom du produit</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="number" name="quantite" class="form-control form-control-lg" />
                  <label class="form-label">Quantité</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <textarea type="text" name="description" class="form-control form-control-lg"></textarea> 
                  <label class="form-label">Description du produit</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="number" name="prix" class="form-control form-control-lg" />
                  <label class="form-label">Prix</label>
                </div>              

				<div class="form-outline form-white mb-4">
                  <input type="number" name="id_cat" class="text-center form-control form-control-lg" placeholder="inscrire le chiffre correspondant"/>
				  <label class="form-label">Categorie</label>
				  <br>
				 <?php
				 
				 	$tabcat = DatabaseCategorieDAO::getAllCat();

					 foreach($tabcat as $cat){
				 
						echo $cat->getIdCategorie() . " - "; echo $cat->getNomCategorie() . "<br> ";

					} 
				 ?>			   
				 				 
                  
                </div>  

                <input type="submit" name="submit" value="Ajouter" class="btn btn-outline-light btn-lg px-5"/>
			</form>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>	