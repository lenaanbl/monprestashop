<?php


class MessagesDTO
{
    private $id_message;
    private $message;
    private $date;
    private $sujet;
    
    public function getIdMessage()
    {
        return $this->id_message;
    }

    
    public function setIdMessage($id_message)
    {
        $this->id_message = $id_message;
    }

    
    public function getMessage()
    {
        return $this->message;
    }

    
    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function getDate()
    {
        return $this -> date;
    }

    public function setDate($date)
    {
        $this -> date = $date;
    }

    
    public function getSujet()
    {
        return $this->sujet;
    }

    
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;
    }


}