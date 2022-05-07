<?php

class DatabaseLinker{

    private static $url = 'mysql:host=localhost;dbname=prestachope_bdd_1;charset=utf8';
        private static $user ='root';
        private static $pass='';
        private static $bdd;


    

    public static function getConnexion(){
        if (DatabaseLinker::$bdd == null){ 

           DatabaseLinker::$bdd = new PDO(DatabaseLinker::$url, DatabaseLinker::$user, DatabaseLinker::$pass);
        }
        
        return DatabaseLinker::$bdd;
    }
 
}

?>