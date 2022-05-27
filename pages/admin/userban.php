

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <?php
            $tabAllClient = ControllerAdmin::getAllClient();
            foreach ($tabAllClient as $user)
            {   
                if ($user->getIsBan() == 0)
                {
        ?>
                    <div class="ban">
                        <?php
                        echo "Voulez vous bannir l'utilisateur ".$user->getNom()." ?";
                        ?>
                        <form action="" method="post">
                            <input type="hidden" name="mail" value="<?php echo $user->getNom();?>">
                            <input class="modify-btn"type="submit" value="Bannir">
                        </form>
                    </div>
                <?php
                }
                elseif ($user->getIsBan() == 1)
                {
                ?>
                    <div class="ban">
                        <?php
                        echo "Voulez vous débannir l'utilisateur ".$user->getNom()." ?";
                        ?>
                        <form action="" method="post">
                            <input type="hidden" name="mail_deban" value="<?php echo $user->getNom();?>">
                            <input class="modify-btn" type="submit" value="Débannir">
                        </form>
                    </div> 
                    
                    <?php
                    }
                }
            ?>


                <?php
                    foreach ($tabAllClient as $user_ban)
                     {

                ?>

                    <section class="container bg-dark">

                        <div class="row d-flex">

                        <div class="display-3">

                            <div class="col-3">

                                <div class="card bg-dark text-light">

                                    <img class="card-img-top" src="assets/images/images_profil/<?php  echo $user_ban->getPathPhoto(); ?>" alt="">
                                    <p class="card-text">
                                        Mail = <?php echo $user_ban->getNom() ?>

                                    </p>
                                </div>

                            </div>

                        </div>


                        </div>

                    </section>

                <?php } ?>

<style>

.grid_user{
    
    justify-content: center;   
}

.card-img-top{

    width: 150px;
    height: 150px;
    border-radius: 20em;

}

.card-text{
    font-size: 20px;
}

.ban
{
    padding: 20px 20px;
    color: antiquewhite;
    background: darkcyan;
}

.modify-btn
{
    padding: 10px 10px;
    background: #2b2b2b;
    color: aliceblue;
    border: none;
    border-radius: 2em;
    cursor: pointer;
}

.modify-btn:hover
{
    background: #fff;
    color: #2b2b2b;
    transition: 0.7s;
}

</style>
