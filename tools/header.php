

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

        <style>

        @import url('https://fonts.googleapis.com/css2?family=Antonio:wght@200&display=swap');


        nav
        {
            display: flex;
            justify-content: space-around;
            align-items: center;
            min-height: 8vh;
            background-color:rgb(0, 0, 0);
            font-family: 'Antonio', sans-serif;
        }

        .logo
        {
            color: rgb(255, 246, 245);
            text-transform: uppercase;
            letter-spacing: 10px;
            font-size: 25px;
        }

        .nav-links
        {
            display: flex;
            justify-content: space-around; 
        }

        .nav-links li
        {
            text-decoration: none;
            list-style: none;
        }

        .nav-links a
        {
            color: #fff;
            text-decoration: none;
            letter-spacing: 3px;
            font-weight: bold;
            font-size: 20px;
            padding: 15px;
        }

        .burger
        {
            display: none;
            cursor: pointer;
        }

        .burger div
        {
            width: 25px;
            height: 3px;
            background-color: rgb(100, 48, 41);
            margin: 5px;
            transition: all 0.3s ease;
        }

        @media screen and (max-width:1024px) {
            .nav-links
            {
                width: 60%;
            }
        }

        @media screen and (max-width:650px) {

            body 
            {
                overflow-x: hidden;
            }
            .nav-links
            {
                position: absolute;
                right: 0%;
                height: 92vh;
                top: 8vh;
                color: rgb(100, 48, 41);
                display: flex;
                flex-direction: column;
                align-items: center;
                width: 50%;
                border-radius: 10px;
                transform: translateX(100%);
                transition: transform 0.5s ease-in;
            }

            .nav-links li
            {
                opacity: 0;
            }

            .burger
            {
                display: block;
            }
        }

        .nav-active
        {
            transform: translateX(0%);
        }

        @keyframes navLinkFade {
            from{
                opacity: 0;
                transform: translateX(50px); 
            }

            to{
                opacity: 1;
                transform: translateX(0px);
            }
        }

        .toggle .line1
        {
            transform: rotate(-45deg) translate(-5px, 6px);
        }

        .toggle .line2
        {
            opacity: 0;
        }

        .toggle .line3
        {
            transform: rotate(45deg) translate(-5px, -6px);
        }


        </style>


