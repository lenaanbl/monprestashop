<?php
 include("DAO/DatabaseProduitsDAO.php");

$produits = ProduitDAO::getProduitsByCategorie(2);
$prod[] = $produits;

var_dump($prod);

?>