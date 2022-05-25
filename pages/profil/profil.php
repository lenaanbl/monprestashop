<div>
  <img src="assets/images/profilbg.png" alt="" style="width: 1519px;">
</div>


<?php

    $user = ProfilController::getUtilisateur($_SESSION['id_client']);

?>


	<form action="" method="POST">
		<div class="container mt-4 mb-4 p-3 d-flex justify-content-center"> 
			<div class="card p-4"> 
				<div class=" image d-flex flex-column justify-content-center align-items-center"> 
					<button class="btn btn-secondary">
					<img src="assets/images/profil.png" height="100" width="100" />
					</button> 

					<label> Nom :</label>
					<input type="text" class=" text-center name mt-2" name="nom" placeholder="<?php echo $user->getNom();?>">
					<input type="hidden" name="id_client" value="<?php echo $user->getIdClient(); ?>">
					<input type="submit" class="modify-btn" value="modifier">
					
					<br>

					<label> Prénom :</label>
					<input type="text" class=" text-center name mt-2" name="prenom" placeholder="<?php echo $user->getPrenom();?>">
					<input type="hidden" name="id_client" value="<?php echo $user->getIdClient(); ?>">
					<input type="submit" class="modify-btn" value="modifier">
					<br>
				
					<label> Email :</label>
					<input type="text" class=" text-center name mt-2" name="email" placeholder="<?php echo $user->getMail();?>">
					<input type="hidden" name="id_client" value="<?php echo $user->getIdClient(); ?>">
					<input type="submit" class="modify-btn" value="modifier">
					<br>

					<label> Modifier le mot de passe :</label>
					<input type="password" class=" text-center mt-2" name="email" placeholder="nouveau mot de passe">
					<input type="hidden" name="id_client" value="<?php echo $user->getIdClient(); ?>">
					<input type="submit" class="modify-btn" value="modifier">
					<br>
					
					<div class="d-flex flex-row justify-content-center align-items-center mt-3"> 
						<label> Votre cagnotte : </label>
						<span class="number"><?php echo $user->getMontant(); ?>
							<span class="follow">€ restants</span>
						</span> 
					</div> 
					
					<div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> 
						<span><i class="fa fa-twitter"></i></span> 
						<span><i class="fa fa-facebook-f"></i></span> 
						<span><i class="fa fa-instagram"></i></span> 
						<span><i class="fa fa-linkedin"></i></span> 
					</div> 
					
					<div class=" px-2 rounded mt-4 date "> 
						<span class="join">Joined May,2021</span> 
					</div> 
				</div> 
			</div>
		</div>
	</form>





<style>	

.card {
    width: 450px;
    background-color: #efefef;
    border: none;
    cursor: pointer;
    transition: all 0.5s;
}


.btn {
    height: 140px;
    width: 140px;
    border-radius: 50%
}

.name {
    font-size: 22px;
    font-weight:200;
}

.idd {
    font-size: 14px;
    font-weight: 600
}

.idd1 {
    font-size: 12px
}

.number {
    font-size: 22px;
    font-weight: bold
}

.follow {
    font-size: 12px;
    font-weight: 500;
    color: #444444
}

.text span {
    font-size: 13px;
    color: #545454;
    font-weight: 500
}

.icons i {
    font-size: 19px
}

hr .new1 {
    border: 1px solid
}

.join {
    font-size: 14px;
    color: #a0a0a0;
    font-weight: bold
}

.date {
    background-color: #ccc
}
</style>