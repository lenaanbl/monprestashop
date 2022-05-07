<?php

    include_once('tools/header.php');

?>

<div class="space">
    <h1 class="error">Une erreur est survenue, votre requête ne peut pas être exécutée, il est possible que vous soyez banni(e).</h1>
</div>

<?php

    include_once('tools/footer.html');

?>

<style>

.space
{
    display: flex;
    justify-content: center;
    background: bisque;
}

.error
{
    color: aliceblue;
    margin: 10%;
}

</style>