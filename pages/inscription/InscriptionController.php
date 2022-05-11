<?php 

include_once('DAO/DatabaseUserDAO.php');


class InscriptionController{

    public function includeView(){
        include_once('pages/inscription/inscription.php');
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