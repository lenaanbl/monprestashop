<?php
		
			$prix_total = 0;
			$quantite_total = 0;
			$cagnotte = ControllerPanier::get_cagnotte($_SESSION['id_client']);

			if (!empty($_GET['valid']) && empty($_SESSION['panier']))
			{
				?>
				<div class="validation">
					<p> <?php echo "Merci de votre achat sur la Brasserie des Sagnes!"; ?>
					<p> <?php echo "Votre commande a bien été enregistrer, et vous sera livrer dans les plus bref délais."; ?>
				</div>
				<?php
			}
			else
			{
			?>	