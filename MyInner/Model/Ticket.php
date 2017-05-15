<?php
require_once 'User.php';

/**
 * Created by PhpStorm.
 * User: WLF
 * Date: 25/04/17
 * Time: 00:35
 */
class Ticket
{
                                //ATRIBUTOS
    private $ID_TICKET, $ID_USER, $TXT_TICKET, $ANSWER_TICKET;

    /**
     * Ticket constructor.
     * @param $ID_TICKET
     * @param $ID_USER
     * @param $TXT_TICKET
     */
    public function __construct($ID_TICKET, $ID_USER, $TXT_TICKET)  // //CONSTRUCTOR
    {
        $this->ID_TICKET = $ID_TICKET;
        $this->ID_USER = $ID_USER;
        $this->TXT_TICKET = $TXT_TICKET;
    }

    public function closeTicket(){

    }
                                //*********GETTERS*********
    /**
     * @return mixed
     */
    public function getIDTICKET()
    {
        return $this->ID_TICKET;
    }

    /**
     * @return mixed
     */
    public function getIDUSER()
    {
        return $this->ID_USER;
    }

    /**
     * @return mixed
     */
    public function getTXTTICKET()
    {
        return $this->TXT_TICKET;
    }

    /**
     * @return mixed
     */
    public function getANSWERTICKET()
    {
        return $this->ANSWER_TICKET;
    }

                                        //*********SETTERS*********
    /**
     * @param mixed $ID_TICKET
     */
    public function setIDTICKET($ID_TICKET)
    {
        $this->ID_TICKET = $ID_TICKET;
    }

    /**
     * @param mixed $ID_USER
     */
    public function setIDUSER($ID_USER)
    {
        $this->ID_USER = $ID_USER;
    }

    /**
     * @param mixed $TXT_TICKET
     */
    public function setTXTTICKET($TXT_TICKET)
    {
        $this->TXT_TICKET = $TXT_TICKET;
    }

    /**
     * @param mixed $ANSWER_TICKET
     */
    public function setANSWERTICKET($ANSWER_TICKET)
    {
        $this->ANSWER_TICKET = $ANSWER_TICKET;
    }


}