<link rel="stylesheet" type="text/css" href="assets/css/profil.css" media="all"/>


<?php

    $user = ProfilController::getUtilisateur($_SESSION['id_client']);

?>
<div class="container-button-retour">
	<a href="index.php" class="button-green">< Retour à l'accueil</a>
</div>

    <div class="profil-container">
        <div class="profil-title">
        </div>

		<br>
        
		<p>Votre montant est de : <?php echo $user->getMontant(); ?>

    	<br>
		<br>

		<div class="form-modify">
			<form action="" method="POST">
				<input class="modify-Client" type="text" name="picture" placeholder="assets/images/images_profil/...">
				<input type="hidden" name="id_client" value="<?php echo $user->getIdClient(); ?>">
				<input type="submit" class="modify-btn" value="modifier">	
				<br>
				<label class="label-profil">Nom : <?php echo $user->getNom(); ?></label>
				<input class="modify-Client" type="text" name="nom">
				<input type="hidden" name="id_client" value="<?php echo $user->getIdClient(); ?>">
				<input type="submit" class="modify-btn" value="modifier">
				<br>
				<label class="label-profil">Prénom : <?php echo $user->getPrenom(); ?></label>
				<input class="modify-Client" type="text" name="prenom">
				<input type="hidden" name="id_client" value="<?php echo $user->getIdClient(); ?>">
				<input class="modify-btn" type="submit" value="modifier">
				<br>
				
				<label class="label-profil">Mail : <?php echo $user->getMail(); ?></label>
				<input class="modify-Client" type="text" name="mail">
				<input type="hidden" name="id_client" value="<?php echo $user->getIdClient(); ?>">
				<input class="modify-btn" type="submit" value="modifier">
				<br>
				<label class="label-profil">Nouveau mot de passe : </label>
				<input class="modify-Client" type="text" name="password" placeholder="mot de passe">
				<input type="hidden" name="id_client" value="<?php echo $user->getIdClient(); ?>">
				<input class="modify-btn" type="submit" value="modifier">
			</form>
		</div>

    </div>
