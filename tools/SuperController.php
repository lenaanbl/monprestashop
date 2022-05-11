<?php

	include_once("tools/rooter.php");

	class SuperController
	{
		public static function callPage($page)
		{
			switch($page)
			{
				case 'connexion' : 

					include_once('pages/connexion/ConnexionController.php');

					$instanceController = new ConnexionController();					
				
					if(!empty($_POST['email']) && !empty($_POST['password'])) 

					{
						if ($instanceController->Authenticated($_POST['email'], (sha1($_POST['password']))) == true)
						{
							if (isset($_SESSION['is_ban']))
                            {
                                session_destroy();
                                $instanceController->redirectUser_ban();
                            }

							else{
								$instanceController->redirectUser();
							}				
							
						}

						else{
							session_destroy();
							$instanceController->includeViewConnexion();
						}
					}

					$instanceController->includeViewConnexion();

					break;

				case 'inscription' :
				
					include_once('pages/inscription/InscriptionController.php');

					$instanceController = new InscriptionController();
					
					echo "<p>TEST</p>";

					if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['wallet']) && !empty($_POST['email']) && !empty($_POST['password'])){
						
						$insert = $instanceController->InsertClient($_POST['nom'], $_POST['prenom'], $_POST['email'],$_POST['wallet'], $_POST['password']);
						if($insert == true){
							$instanceController->redirectUser();
						}	
						
						else
						{
							echo 'error';
						}
					}	
					
					$instanceController->includeView();


					break;

				case 'deconnexion_' : 

					include_once('pages/deconnexion/DeconnexionController.php');

					$instanceController = new DeconnexionController();

					$instanceController->deconnectUser();
					Rooter::redirectUser('accueil');

					break;
				
				case 'deconnexion' :

					include_once('pages/deconnexion/DeconnexionController.php');

					$instanceController = new DeconnexionController();

					$instanceController->deconnectUser();
					Rooter::redirectUser('connexion');

					break;
				
					
					break;

				case 'error' :

					include_once('tools/error.php');

					break;

				

				case 'accueil' :

					include_once('pages/accueil/AccueilController.php');

						$instanceController = new AccueilController();
						$instanceController->includeView();
				
					break;

				
				case 'message':

						include_once('pages/admin/admincontact.php');					

					break;
				

				case 'insertMessage' :

					include_once('pages/contact/ContactController.php');

						$instanceController = new MessageController();

						$instanceController->includeView();
						

						if (!empty($_POST['sujet']) && !empty($_POST['message']))
						{
							$instanceController->createMessage($_POST['message'], $_POST['sujet']);
							
							Rooter::redirectUser('accueil');
						}

					break;

				case 'user_ban' :

					include_once("pages/admin/AdminController.php");

                    $instanceController = new ControllerAdmin();

					if(!empty($_POST['pseudo'])) 
                    {
                        $instanceController->ban_user_by_pseudo($_POST['pseudo']);
						Rooter::redirectUser('user_ban');
                    }
                    if(!empty($_POST['pseudo_deban'])) 
                    {
                        $instanceController->deban_user_by_pseudo($_POST['pseudo_deban']);
						Rooter::redirectUser('user_ban');
					}

					$instanceController->includeView('user_ban');

					break;
				
				case 'add_produit' : 	
					
					include_once('pages/admin/AdminController.php');

					$instanceController = new ControllerAdmin();

					//insérer un nouveau produit

					if(!empty($_POST['photo']) && !empty($_POST['nom_produit']) && !empty($_POST['quantite']) && !empty($_POST['prix']) && !empty($_POST['description']) && !empty($_POST['categorie'])){					

						$instanceController->create_produit($_POST['nom_produit'], $_POST['description'], $_POST['quantite'], $_POST['prix'], $_POST['photo'], $_POST['categorie']);

					}

					//modifier un produit

					if(!empty($_POST['picture']) || !empty($_POST['nom']) || !empty($_POST['prix']) || !empty($_POST['quantite']) || !empty($_POST['description'])) 
                    { 
						$picture = 'picture';
                        $nom = 'nom';
                        $prix = 'prix';
                        $quantite = 'quantite';
						$description = 'description';

                        
						if(!empty($_POST['nom']))
						{							
							$instanceController->update_produit($_POST['nom'], $nom, $_POST['id']);
							Rooter::redirectUser('add_produit');
						}

						if(!empty($_POST['picture']))
						{							
							$instanceController->update_produit($_POST['picture'], $picture, $_POST['id']);
							Rooter::redirectUser('add_produit');
						}
						
						if(!empty($_POST['prix']))
						{
							$instanceController->update_produit($_POST['prix'], $prix, $_POST['id']);
							Rooter::redirectUser('add_produit');
						}
						if(!empty($_POST['quantite']))
						{
							$instanceController->update_produit($_POST['quantite'], $quantite, $_POST['id']);
							Rooter::redirectUser('add_produit');
						}

						if(!empty($_POST['description']))
						{
							$instanceController->update_produit($_POST['description'], $description, $_POST['id'] );
							Rooter::redirectUser('add_produit');
						}	
						
						if (!empty($_POST['id_produit']))
						{
							$instanceController->delete_produit($_POST['id_produit']);
							Rooter::redirectUser('add_produit');
						}
                    
                    }

					$instanceController = ControllerAdmin::includeView('admin_produit');

					break;


				case 'profil' :				

					include_once('pages/profil/ProfilController.php');

					$instanceController = new ProfilController();
					

					if(!empty($_POST['picture']) || !empty($_POST['nom']) || !empty($_POST['prenom']) || !empty($_POST['adresse']) || !empty($_POST['pseudo']) || !empty($_POST['mail']) || !empty($_POST['password'])) {

						$picture = 'picture';
						$nom = 'nom';
						$prenom = 'prenom';
						$adresse = 'adresse';
						$pseudo = 'pseudo';
						$mail = 'mail';
						$password = 'password';

						if(!empty($_POST['picture'])){
							$instanceController->modif_profil($_POST['picture'], $picture, $_POST['id_client']);
							Rooter::redirectUser('profil');
						}

						if(!empty($_POST['nom'])){
							$instanceController->modif_profil($_POST['nom'], $nom, $_POST['id_client']);
							Rooter::redirectUser('profil');
						}

						if(!empty($_POST['prenom'])){
							$instanceController->modif_profil($_POST['prenom'], $prenom, $_POST['id_client']);
							Rooter::redirectUser('profil');
						}

						if(!empty($_POST['adresse'])){
							$instanceController->modif_profil($_POST['adresse'], $adresse, $_POST['id_client']);
							Rooter::redirectUser('profil');
						}

						if(!empty($_POST['pseudo'])){
							$instanceController->modif_profil($_POST['pseudo'], $pseudo, $_POST['id_client']);
							Rooter::redirectUser('profil');
						}

						if(!empty($_POST['mail'])){
							$instanceController->modif_profil($_POST['mail'], $mail, $_POST['id_client']);
							Rooter::redirectUser('profil');
						}

						if(!empty($_POST['password'])){
							$instanceController->modif_profil($_POST['password'], $password, $_POST['id_client']);
							Rooter::redirectUser('profil');
						}
                        
					}

					$instanceController->includeView();

					break;

					case "addProduitToPanier" :
						include_once ('pages/panier/Paniercontroler.php');
						$instanceController=new Paniercontroler();
	
						if (isset($_GET['id_produit']) and isset($_GET['quantity'])){
	
							$instanceController->addProduitToPanier($_GET['id_produit'],$_GET['quantity']);
	
						}
						print_r($_SESSION['panier']);
					
						break;

			}
		}
	}

?>