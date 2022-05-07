<?php

    include_once('DTO/DatabaseMessageDTO.php');

    class MessagesDAO{

        public static function getMessageById($idMessage){

            $message = null;

            $connexionbdd = DatabaseLinker::getConnexion();

            $state = $connexionbdd -> prepare('SELECT * FROM messages WHERE id_message=?');
            $state->bindParam(1, $idMessage);
            $state->execute();

            $resultats = $state->fetchAll();

            if(sizeof($resultats) > 0){

                $result = $resultats[0];

                $message = new MessagesDTO();
                $message->setIdMessage($result['id_message']);
                $message->setMessage($result['message']);
                $message->setDate($result['date']);
                $message->setSujet($result['sujet']);

                
            }

            return $message;
            
        }


        /*public static function getListMessages(){

            $messages = array();

            $connex = DatabaseLinker::getConnexion();

            $state = $connex->prepare('SELECT id_message FROM message');
            $state->execute();

            $resultats = $state->fetchAll();

            foreach ($resultats as $result){
                $messages[] = MessagesDAO::getMessageById($result['id_message']);
            }

            return $messages;
        }*/

        public static function getAllMessages()
        {
            $message = array();

            $bdd = DatabaseLinker::getConnexion();

            $reponse = $bdd->prepare('SELECT * FROM messages');
            $reponse->execute(array());
            $resultats = $reponse->fetchAll();

            if(empty($resultats)){

                echo $message;
            }

            else{

                foreach($resultats as $result){

                    $mess = new MessagesDTO();
                    $mess->setIdMessage($result['id_message']);
                    $mess->setMessage($result['message']);
                    $mess->setDate($result['date']);
                    $mess->setSujet($result['sujet']);
                    $message[]= $mess;
                }

                
            }

            return $message;

        }

        

        public static function insertMessage($contain, $sujet){
            
            
            $connexionbdd = DatabaseLinker::getConnexion();

            $reponse = $connexionbdd->prepare('INSERT into messages (message, date, sujet) VALUES (?, CURRENT_TIMESTAMP, ?)');

            $reponse->bindParam(1, $contain);
            $reponse->bindParam(2, $sujet);
            $reponse -> execute();
            
        }

        /*public static function getMessagesOfProduits($idproduit){

            $messages = array();

            $connex = DatabaseLinker::getConnexion();

            $state = $connex->prepare('SELECT id_message FROM message WHERE id_produit=?');
            $state->bindParam(1, $idproduit);
            $state->execute();
            $resultats = $state->fetchAll();

            foreach ($resultats as $result){
                $messages[] = MessageDAO::getMessageById($result['id_message']);
            }

            return $messages;
        }*/
    }

?>