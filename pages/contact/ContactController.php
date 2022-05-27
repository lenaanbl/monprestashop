<?php

    include_once("DAO/DatabaseMessageDAO.php");

    class ContactController
    {

        private static $id_message;

        public function __construct()
        {
            
        }

        public static function setIdMessage($id_message)
		{
			ContactController::$id_message = $id_message;
		}
		
		public static function getIdMessage() 
		{
			return ContactController::$id_message;
		}
		
		public static function getListMessage() 
		{
			return MessagesDAO::getMessageById(ContactController::$id_message);
		}

        public function includeview()
        {
            require_once 'tools/header.php';
            include_once "pages/contact/contact.php";
            include_once 'tools/footer.html'; 
        }

        public static function Messages()
        {

            $tabMessages = MessagesDAO::getAllMessages();

            return $tabMessages;

        }


        public function createMessage($contain, $sujet)
        {
            $insert = MessagesDAO::insertMessage($contain, $sujet);
            return $insert;
        }

        public static function redirectUser()
        {
            header('Location: index.php?page=accueil');
        }

    }   

?>