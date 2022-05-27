<?php 

include_once('DAO/DatabaseUserDAO.php');


class InscriptionController{

    public function includeView(){
        require_once 'tools/header.php';
        include_once('pages/inscription/inscription.php');
        include_once 'tools/footer.html'; 
    }

    public function redirectUser(){
        header('Location: index.php?page=connexion');
    }

    public function InsertClient($nom, $prenom, $email,$wallet, $password){
		$insert = UserDAO::InsertClient($nom, $prenom, $email,$wallet, $password);
		return $insert;
		
		}

}

?>