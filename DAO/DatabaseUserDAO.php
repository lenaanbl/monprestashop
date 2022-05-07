<?php

    include_once('DTO/DatabaseUserDTO.php');
    include_once('tools/DatabaseLinker.php');

    class UserDAO
    {
        public static function getUserById($id){

            $user = null;

            $connex = DatabaseLinker::getConnexion();

            $state = $connex->prepare('SELECT * FROM clients WHERE id_client = ?');
            $state->bindParam(1, $id);
            $state->execute();
            $user= new UserDTO();

            $result = $state->fetch();

            if (empty($result))
            {
                $user = null;
            }

            else
            {
                $user->setIdClient($result['id_client']);
                $user->setPrenom($result['prenom']);
                $user->setNom($result['nom']);
                $user->setPseudo($result['pseudo']);
                $user->setAdresse($result['adresse']);
                $user->setMail($result['mail']);
                $user->setMontant($result['montant']);
                $user->setPassword($result['password']);
                $user->setPathPhoto($result['picture']);
                $user->setAdmin($result['admin']);
                $user->setIsBan($result['ban']);
            }

            return $user;

        }

        public static function getAllUser(){
            

            $connex = DatabaseLinker::getConnexion();

            $state = $connex -> prepare('SELECT * FROM clients WHERE admin = "0"');
            $state->execute();
            $resultats = $state->fetchAll();
            $tab = [];

            if (empty($resultats)) 
                {
                    $tab = null;
                }
            else
            {
                foreach ($resultats as $result)
                {
                    $user = new UserDTO();
                    $user->setIdClient($result['id_client']);
                    $user->setPrenom($result['prenom']);
                    $user->setNom($result['nom']);
                    $user->setPseudo($result['pseudo']);
                    $user->setAdresse($result['adresse']);
                    $user->setMail($result['mail']);
                    $user->setMontant($result['montant']);
                    $user->setPassword($result['password']);
                    $user->setPathPhoto($result['picture']);
                    $user->setIsBan($result['ban']);
                    $tab[] = $user;
                }
            }

            return $tab;
        }


        public static function insert($pseudo, $nom, $prenom, $picture, $adresse, $mail, $montant, $password){

             
            $connex = DatabaseLinker::getConnexion();

            $state = $connex -> prepare('INSERT INTO clients(pseudo, nom, prenom, picture, adresse, mail, montant, password, admin, ban) VALUES (?, ?, ?, ?, ?, ?, ?, sha1(?), "0", "0")');          
            $state->bindParam(1, $pseudo);
            $state->bindParam(2, $nom);
            $state->bindParam(3, $prenom);
            $state->bindParam(4, $picture);
            $state->bindParam(5, $adresse);
            $state->bindParam(6, $mail);
            $state->bindParam(7, $montant);
            $state->bindParam(8, $password);
            $state->execute();
        }

        public static function delete($id)
		{
			$connex = DatabaseLinker::getConnexion();

			$state = $connex->prepare('DELETE FROM clients WHERE id_client = ?');
			$state->bindParam(1, $id);
			$state->execute();
		}

        public static function modifUser($content, $value, $id)
        {
            $connex = DatabaseLinker::getConnexion();
            $state = $connex->prepare("UPDATE clients SET $value = ? WHERE id_client = ?");
            $state->bindParam(1, $content);
            $state->bindParam(2, $id);         
            $state->execute();
        }

        public static function getUserWithPseudoPassword($pseudo, $password){

            $user = null;

            $connex = DatabaseLinker::getConnexion();

            $state = $connex -> prepare('SELECT * FROM clients WHERE pseudo=? AND password=?');
            $state->bindParam(1, $pseudo);
            $state->bindParam(2, $password);

            $state->execute();

            $resultats = $state->fetchAll();

            if(sizeof($resultats) > 0){
                
                $result = $resultats[0];
                $user = UserDAO::getUserById($result['id_client']);
            }

            return $user;
        }

        public static function banUserByPseudo($pseudo)
        {
            $test = 1;
            $connex = DatabaseLinker::getConnexion();
            $state = $connex->prepare("UPDATE clients SET ban = ? WHERE pseudo = ?");
            $state->bindParam(1, $test);
            $state->bindParam(2, $pseudo);
            $state->execute();
        }

        public static function debanUserByPseudo($pseudo)
        {
            $test = 0;
            $connex = DatabaseLinker::getConnexion();
            $state = $connex->prepare("UPDATE clients SET ban = ? WHERE pseudo = ?");
            $state->bindParam(1, $test);
            $state->bindParam(2, $pseudo);
            $state->execute();
        }

        public static function getAdmin($id)
        {
            $connex = DatabaseLinker::getConnexion();
            $state = $connex->prepare("SELECT * FROM clients WHERE id_client = ?");
            $state->bindParam(1, $id);
            $state->execute();
            $result = $state->fetch();
            
            if (empty($result)) 
            {
                $user = null;
            }
            else
            {
                $user = new UserDTO();
                    $user->setIdClient($result['id_client']);
                    $user->setPrenom($result['prenom']);
                    $user->setNom($result['nom']);
                    $user->setPseudo($result['pseudo']);
                    $user->setAdresse($result['adresse']);
                    $user->setMail($result['mail']);
                    $user->setMontant($result['montant']);
                    $user->setPassword($result['password']);
                    $user->setPathPhoto($result['picture']);
                    $user->setAdmin($result['admin']);
                    $user->setIsBan($result['ban']);
            }
            return $user;
        }
    

    }
    

?>