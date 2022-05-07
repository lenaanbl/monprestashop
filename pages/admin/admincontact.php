<?php

    include_once('tools/header.php');

    include_once('pages/contact/ContactController.php');
   
?>


<link rel="stylesheet" href="assets/css/message.css">


				<a href="index.php?page=admin&admin=admin_ban">Accéder a la gestion des utilisateurs</a>
				<a href="index.php?page=admin&admin=admin_produit">Accéder a l'administration des produits</a>
				<a href="index.php?page=admin&admin=admin_categorie">Accéder a l'administration des catégories</a>

				<p> Les messages envoyer par les utilisateurs </p>
				<?php
					$tabAllContact = MessageController::Messages();
					foreach ($tabAllContact as $index)
					{
						?>
						<div class="message">
						<?php						
							$nom_auteur = $_SESSION['id_client'];
							echo "Sujet du message : ".$index->getSujet().'<BR>';
							echo "Contenu : ".$index->getMessage().'<br>';
							echo "Envoyer le : ".$index->getDate().'<br>';
							echo "par ".$nom_auteur.'<br>';
						?>
						</div>
						<?php
					}
					?>

		

<?php

    include_once('tools/footer.html');

?>