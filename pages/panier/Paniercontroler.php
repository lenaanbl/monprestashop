<?php
//parti peixuan

class Paniercontroler{
    
    function addProduitToPanier($id_produit,$quantity){
        $newquantity=$quantity;
        if(!isset($_SESSION['panier'])){
            $_SESSION['panier']=array();
        }
        if(isset($_SESSION['panier'][$id_produit])){
            $newquantity=$_SESSION['panier'][$id_produit]+$quantity;
        }
        $_SESSION['panier'][$id_produit]=$newquantity;

    }
}