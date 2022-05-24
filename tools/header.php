
<div id="mainNavigation">
  <nav role="navigation navbar-hide-on-scroll">
    <div class="py-3 text-center border-bottom">
      <h1 class="text-center display-5 text-light">PrestaChope</h1>
    </div>
  </nav>
  <div class="navbar-expand-md">
    <div class="navbar-dark text-center my-2">
      <button class="navbar-toggler w-75" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span> <span class="align-middle">Menu</span>
      </button>
    </div>
    <div class="text-center mt-3 collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav mx-auto ">


      <?php 
      
        if(isset($_SESSION["id_client"]) && !isset($_SESSION['admin'])){

            if(isset($_SESSION['admin'])){

                //partie administrateur

            }

            else{ ?>
            
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php?page=accueil">Accueil</a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=produits">Boutique</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php?page=profil">Profil</a>
                </li>      
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=panier">Panier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=deconnexion">Se déconnecter</a>
                </li>
              
            <?php
            } ?>

        <?php

        }

        else{      
            ?>

                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php?page=accueil">Accueil</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="index.php?page=connexion">Se connecter</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="index.php?page=inscription">S'inscrire</a>
                </li>


        <?php
            }

            ?>

      </ul>
    </div>
  </div>
</div>


<style>

#mainNavigation a {
  font-family: 'Cabin', sans-serif;
  font-size:14px;
  text-transform:uppercase;
  letter-spacing:2px;
  text-shadow:1px 1px 2px rgba(0,0,0,0.5)
}

.dropdown-menu {
  background:#03727d
}
a.dropdown-toggle {
  color:#dfdfdf !important
}
a.dropdown-item:hover {
  color:#03727d !important
}
.nav-item a{
  color:aliceblue;
}
.nav-item a:hover {
  color:#fff
}
.nav-item{
  min-width:12vw;
}
#mainNavigation {
  position:fixed;
  top:0;
  left:0;
  width:100%;
  z-index:123;
  padding-bottom:80px;
  /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#000000+0,000000+100&0.65+0,0+100;Neutral+Density */
background: linear-gradient(to bottom,  rgba(0,0,0,0.85) 0%,rgba(0,0,0,0) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a6000000', endColorstr='#00000000',GradientType=0 ); /* IE6-9 */
}
#navbarNavDropdown.collapsing .navbar-nav,
#navbarNavDropdown.show .navbar-nav{
  background:#037582;
  padding:12px;
}
</style>