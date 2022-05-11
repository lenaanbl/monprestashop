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
            $resultats = $state->fetchAll();

            if(sizeof($resultats) > 0)
            {   
                $result = $resultats[0];
                $user= new UserDTO();
                $user->setIdClient($result['id_client']);
                $user->setPrenom($result['prenom']);
                $user->setNom($result['nom']);
                $user->setMail($result['mail']);
                $user->setMontant($result['montant']);
                $user->setPassword($result['password']);
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
                    $user->setMail($result['mail']);
                    $user->setMontant($result['montant']);
                    $user->setPassword($result['password']);
                    $user->setIsBan($result['ban']);
                    //$user->setAdmin($result['admin']);
                    $tab[] = $user;
                }
            }

            return $tab;
        }


        public static function InsertClient($nom, $prenom,$email,$wallet, $password){
            $bdd= DataBaseLinker::getConnexion();
        
            $state = $bdd->prepare('INSERT into clients (nom, prenom, email, montant, password, admin, ban) VALUES (?, ?, ?, ?, ?,0,0)');
            $state->execute(array($nom, $prenom, $email, $wallet, (sha1($password))));
            $resulte = $state->fetch();

            return true;
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

        public static function getUserWithEmailPassword($email, $password){

            $client = null;

            $connex = DatabaseLinker::getConnexion();

            $state = $connex -> prepare('SELECT * FROM clients WHERE email=? AND password=sha1(?)');
            $state->bindParam(1, $email);
            $state->bindParam(2, $password);

            $state->execute();

            $lineResultat = $state->fetchAll();
            $client = new UserDTO();
            $lineResultat = $state->fetch();
    
            if (empty($lineResultat)) 
                {
                    $client = null;
                }
            else
            {
                $client->setIdClient($lineResultat['id_client']);
                $client->setNom($lineResultat['nom']);
                $client->setPrenom($lineResultat['prenom']);
                $client->setPassword($lineResultat['password']);
                $client->setMail($lineResultat['email']);
                $client->setMontant($lineResultat['montant']);
                $client->setAdmin($lineResultat['admin']);
                $client->setIsBan($lineResultat['ban']);
            }

            return $client;
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
                    $user->setMail($result['mail']);
                    $user->setMontant($result['montant']);
                    $user->setPassword($result['password']);
                    $user->setAdmin($result['admin']);
                    $user->setIsBan($result['ban']);
            }
            return $user;
        }
    

    }
    

?>