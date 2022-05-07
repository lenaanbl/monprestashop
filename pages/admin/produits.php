<link rel="stylesheet" type="text/css" href="assets/css/produits.css" media="all" />

<?php

include_once('pages/accueil/AccueilController.php');

$produits = AccueilController::getProduits();

foreach($produits as $prod){

?>

<section class="manage_produit">					

	<div class="design-content">

		<!-- item -->
		<div class="design-item">

			<div class="design-img">

				<img src="assets/images/images_produit/<?php echo $prod->getPathPhoto(); ?>" alt="">

				<span><i class="far fa-heart"></i></span>

				<span><?php echo $prod->getNomProduit(); ?></span>

			</div>

			<div class="design-title">

				<a><?php echo $prod->getDescription() . "<br/>" . $prod->getPrix(); ?> € / quantité : <?php echo $prod->getQuantite(); ?> </a>
				
			</div>
			
		</div>

		<div class="form-modify">
			<form action="" method="post">
				<input class="modify-produit" type="file" name="picture" placeholder="photo de produit">
				<input type="hidden" name="id" value="<?php echo $prod->getIdProduit(); ?>">
				<input type="submit" class="modify-btn" value="modifier">	
				<br>
				<input class="modify-produit" type="text" name="nom" placeholder="Nouveau nom">
				<input type="hidden" name="id" value="<?php echo $prod->getIdProduit(); ?>">
				<input type="submit" class="modify-btn" value="modifier">
				<br>
				<input class="modify-produit" type="text" name="prix" placeholder="Nouveau prix">
				<input type="hidden" name="id" value="<?php echo $prod->getIdProduit(); ?>">
				<input class="modify-btn" type="submit" value="modifier">
				<br>
				<input class="modify-produit" type="text" name="quantite" placeholder="Nouvelle quantité">
				<input type="hidden" name="id" value="<?php echo $prod->getIdProduit(); ?>">
				<input class="modify-btn" type="submit" value="modifier">
				<br>
				<input class="modify-produit" type="text" name="description" placeholder="Nouvelle description">
				<input type="hidden" name="id" value="<?php echo $prod->getIdProduit(); ?>">
				<input class="modify-btn" type="submit" value="modifier">
				<br>
				<input type="hidden" name="id_produit" value="<?php echo $prod->getIdProduit(); ?>">
				<input class="modify-btn" type="submit" value="supprimer">
			</form>
		</div>
	</div>

<?php } ?>

	<div id="login-form">
		<div class="form-box">
			<div class="head-form">
				<div class="head-font">
					<div class="head-contain">Publier un Produit</div>
				</div>
			</div>
			<form method="POST" id="login" class='input-group-login' action="">

				<input type="text" name="nom_produit" class="input-field" placeholder="Nom du produit" required>
				<input type="text" name="quantite" class="input-field" placeholder="Quantité" required>
				<input type="text" name="prix" class="input-field" placeholder="Prix" required>
				<input type="text" name="description" class="input-field" placeholder="Description" required>
				<input type="file" name="photo" class="input-field" placeholder="photo du produit" required>
				<input type="text" name="categorie" class="input-field" placeholder="1 = bière" required>

				<button type="submit" class="submit-btn">Poster</button>
			</form>
		</div>
	</div>
	

</section>