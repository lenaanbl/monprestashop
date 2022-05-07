<?php

    include_once("DAO/DatabaseMessageDAO.php");

    class MessageController
    {

        private static $id_message;

        public function __construct()
        {
            
        }

        public static function setIdMessage($id_message)
		{
			MessageController::$id_message = $id_message;
		}
		
		public static function getIdMessage() 
		{
			return MessageController::$id_message;
		}
		
		public static function getListMessage() 
		{
			return MessagesDAO::getMessageById(MessageController::$id_message);
		}

        public function includeview()
        {

            include_once "pages/contact/contact.php";
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

    }   

?>