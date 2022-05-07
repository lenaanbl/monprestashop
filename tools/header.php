
<!DOCTYPE html>
<html lang="fr">
	<head>	
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@200&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/css/header.css">
		<title>Prestachope !</title>		
	</head>

	
	<body>

        <nav>

            <div class="logo">
                <h4>Prestachope</h4>
            </div>
            
            <ul  class="nav-links">

            <?php
                if(!empty($_SESSION['admin'])){
            ?>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?page=message">Messages</a></li>
                <li><a href="index.php?page=add_produit">Produits</a></li>
                <li><a href="index.php?page=user_ban">Clients</a></li>
                <li><a href="index.php?page=deconnexion">Deconnexion</a></li>

            <?php } ?>

            <?php
                if(!empty($_SESSION['id_client']) && $_SESSION['admin'] == false){
            ?>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?page=insertMessage">Contact Us</a></li>
                <li><a href="index.php?page=profil">Mon profil</a></li>
                <li><a href="index.php?page=deconnexion">Deconnexion</a></li>

            <?php } ?>  
                    
            <?php
                
                if(empty($_SESSION['id_client']) && empty($_SESSION['admin'])){
            ?>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?page=connexion">Login</a></li>
                <li><a href="index.php?page=inscription">Sign Up</a></li>

            <?php } ?>

            </ul>

            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>

            </div>

        </nav>

        <script src="assets/header_app.js"></script>


