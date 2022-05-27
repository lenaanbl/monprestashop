<div>
  <img src="assets/images/contact.jpg" alt="">
</div>


	<div class="container-md pt-5 overflow-hidden">		
		<div class="row gy-5 my-2">
		<h3 class="display-6 mt-5 text-center">Messages des clients</h3>  

			<?php
				$tabAllContact = ControllerAdmin::getAllMessage();
				foreach ($tabAllContact as $index)
				{
					?>
					
							<div class="col-12 col-md-6 col-lg-3">
								
								<div class="card testimonial-card mt-2 mb-3">
									<div class="card-up aqua-gradient"></div>
									<div class="avatar mx-auto white">
										<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2831%29.jpg" class="rounded-circle img-fluid"
										alt="woman avatar">
									</div>
									<div class="card-body text-center">
										<h4 class="card-title font-weight-bold">
											<?php
											$mail_auteur = ControllerAdmin::getMailClient($index->getIdClient());
											echo $mail_auteur?> </h4>
										<hr>
										<p><i class="fas fa-quote-left"></i> <?php echo $index->getMessage(); ?></p>
									</div>
								</div>
							</div>	
							
						
					<?php
				}
				?>

		</div>
	</div>

<?php

    include_once('tools/footer.html');

?>