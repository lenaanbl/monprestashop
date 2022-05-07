<?php

    class UserDTO
    {

        private $id_client;
        private $pseudo;
        private $nom;
        private $prenom;
        private $mail;
        private $montant;
        private $picture;
        private $adresse;
        private $password;
        private $admin;
        private $ban;

        public function getAdresse(){
            return $this->adresse;
        }

        public function setAdresse($adresse){
            $this->adresse=$adresse;
        }

        public function getIsBan(){
            return $this->ban;
        }

        public function setIsBan($isban){
            $this->ban = $isban;
        }

        public function getAdmin(){
            return $this -> admin;
        }

        public function setAdmin($admin){
            $this -> admin = $admin;
        }

        public function getPathPhoto(){
            return $this -> picture;
        }

        public function setPathPhoto($photo){
            $this -> picture = $photo;
        }
        
        public function getIdClient(){
            return $this -> id_client;
        }

        public function getPseudo(){
            return $this -> pseudo;
        }

        public function getNom(){
            return $this -> nom;
        }

        public function getPrenom(){
            return $this -> prenom;
        }

        public function getMail(){
            return $this -> mail;
        }

        public function getMontant(){
            return $this -> montant;
        }

        public function getPassword(){
            return $this -> password;
        }

        public function setIdClient($id_cli){
            $this->id_client = $id_cli;
        }

        public function setPseudo($pseudonyme){
            $this -> pseudo = $pseudonyme;
        }

        public function setNom($nom_client){
            $this -> nom = $nom_client;
        }

        public function setPrenom($prenom_client){
            $this -> prenom = $prenom_client;
        }
        
        public function setMail($mail_client){
            $this -> mail = $mail_client;
        }

        public function setMontant($montant_client){
            $this -> montant = $montant_client;
        }

        public function setPassword($password){
            $this -> password = $password;
        }

    }

?>