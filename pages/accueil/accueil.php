

  <script src="https://kit.fontawesome.com/9f7a72c9b6.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="assets/css/accueil.css">
    
    <!-- design -->
    <section class = "design" id = "design">
      <div class = "container">
        <div class = "title">
          <h2>Nos produits</h2>
        </div>

        <?php 

        $produits = AccueilController::getProduits();

        ?>

              <div class = "design-content">

                <?php 
                  foreach($produits as $prod){                
                ?>
           
                <!-- item -->
                <div class = "design-item">
                  <div class = "design-img">
                    <img src = "assets/images/images_produit/<?php echo $prod->getPathPhoto(); ?>" alt = "">

                    <?php if(isset($_SESSION['user'])){ ?>

                    <span><i class = "far fa-heart"></i> 22</span>

                    <?php } ?>

                    <?php if(isset($_SESSION['admin'])){ ?>

                    <span><a href="delete_produit"<img class="trash" src="assets/images/images_admin/trash.png" alt=""></span>


                    <?php } ?>

                    <span class="nom_prod"><?php echo $prod->getNomProduit(); ?></span>
                  </div>
                  <div class = "design-title">
                    <a href = "index.php?page=id_product"><?php echo $prod->getDescription() . "<br/>" . $prod->getPrix(); ?> € / quantité : <?php echo $prod->getQuantite();?></a>
                  </div>
                </div> 
                <!-- end of item -->
                <?php } ?>

      </div>
    </section>
    <!-- end of design -->

    <?php 

      if(empty($_SESSION['id_client'])){

    ?>

      <div class="butco">
       <a href="index.php?page=connexion" class="button_co">
         <span class="button">Connexion</span>
         <div class="liquid"></div>
       </a>
      </div>

    <?php } ?>

    <?php 
      if(!empty($_SESSION['id_client'])){
    ?>


    

    <!-- about -->
    <section class = "about-section" id = "about-section">
      <div class = "container">
        <div class = "about-content">
          <div>
            <img src = "images/about-bg.jpg" alt = "">
          </div>
          <div class = "about-text">
            <div class = "title">
              <h2>Let's Presta</h2>
              <p>PrestaChope, la boutique qui vous aidera à faire de bons apéros</p>
            </div>
            <p>Nous existons depuis 2 ans, PrestaChope part d'une idée mise au point autour d'une table de quelques bière et 3 amis décidés à réaliser leur rêve d'enfant.
              L'un doué en entrepreunariat, l'un en marketing, l'un en communication, et les trois en informatique : un bon mélange permettant de créer la boutique sur laquelle vous êtes.
            </p>
            <p>Horaires : <br><br>
            Nous sommes disponibles 24/7 en ligne. <br>
          En magasin, nous sommes ouverts :
          Lundi, Mardi, Jeudi et Vendredi : 9h30 - 18h<br>
          Le Mercredi et le Samedi : 9h30 - 14h</p>
          </div>
        </div>
      </div>
    </section>
    <!-- end of about -->

    <?php  
      }
    ?>

