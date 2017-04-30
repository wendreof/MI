<?php
require_once 'InterfaceTicket.php';

/**
 * Created by PhpStorm.
 * User: wendr
 * Date: 19/04/17
 * Time: 20:05
 */

class User implements InterfaceTicket{

    public function openTicket()
    {
        echo "<p>Ticket Aberto...</p>";
    }

    public function answerTicket()
    {
        // TODO: Implement answerTicket() method.
    }

    public function writeTicket(){

    }

    public function closeTicket()
    {
        echo "<p>Ticket fechado...</p>";
    }

                                    //**********atributos*******
    private $ID_USER, $NOME_USER, $SOBRENOME_USER;
    private $ENDERECO_USER, $EMAIL_USER, $SEXO_USER;
    private $CIDADE_USER, $ESTADO_USER, $PAIS_USER;
    private $DATANASC_USER, $ROLE_USER;
    private $USER_NAME, $CHECKBOXCONTRATO;

    /**
     * User constructor.
     * @param $ID_USER
     * @param $NOME_USER
     * @param $SOBRENOME_USER
     * @param $ENDERECO_USER
     * @param $EMAIL_USER
     * @param $SEXO_USER
     * @param $CIDADE_USER
     * @param $ESTADO_USER
     * @param $PAIS_USER
     * @param $DATANASC_USER
     * @param $ROLE_USER
     * @param $USER_NAME
     * @param $CHECKBOXCONTRATO
     */
    public function __construct($ID_USER, $NOME_USER, $SOBRENOME_USER, $ENDERECO_USER, $EMAIL_USER, $SEXO_USER, $CIDADE_USER, $ESTADO_USER, $PAIS_USER, $DATANASC_USER, $ROLE_USER, $USER_NAME, $CHECKBOXCONTRATO)
    {
        $this->ID_USER = $ID_USER;
        $this->NOME_USER = $NOME_USER;
        $this->SOBRENOME_USER = $SOBRENOME_USER;
        $this->ENDERECO_USER = $ENDERECO_USER;
        $this->EMAIL_USER = $EMAIL_USER;
        $this->SEXO_USER = $SEXO_USER;
        $this->CIDADE_USER = $CIDADE_USER;
        $this->ESTADO_USER = $ESTADO_USER;
        $this->PAIS_USER = $PAIS_USER;
        $this->DATANASC_USER = $DATANASC_USER;
        $this->ROLE_USER = $ROLE_USER;
        $this->USER_NAME = $USER_NAME;
        $this->CHECKBOXCONTRATO = $CHECKBOXCONTRATO;
    }


    //*********metodos especiais*********
    public function buscarUsuario(){

    }
    public function avaliar(){

    }
                                    //*********GETTERS*********
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
    public function getNOMEUSER()
    {
        return $this->NOME_USER;
    }

    /**
     * @return mixed
     */
    public function getPAISUSER()
    {
        return $this->PAIS_USER;
    }

    /**
     * @return mixed
     */
    public function getSEXOUSER()
    {
        return $this->SEXO_USER;
    }

    /**
     * @return mixed
     */
    public function getCIDADEUSER()
    {
        return $this->CIDADE_USER;
    }

    /**
     * @return mixed
     */
    public function getEMAILUSER()
    {
        return $this->EMAIL_USER;
    }

    /**
     * @return mixed
     */
    public function getENDERECOUSER()
    {
        return $this->ENDERECO_USER;
    }

    /**
     * @return mixed
     */
    public function getSOBRENOMEUSER()
    {
        return $this->SOBRENOME_USER;
    }

    /**
     * @return mixed
     */
    public function getESTADOUSER()
    {
        return $this->ESTADO_USER;
    }

    /**
     * @return mixed
     */
    public function getROLEUSER()
    {
        return $this->ROLE_USER;
    }

    /**
     * @return mixed
     */
    public function getDATANASCUSER()
    {
        return $this->DATANASC_USER;
    }

    /**
     * @return mixed
     */
    public function getCHECKBOXCONTRATO()
    {
        return $this->CHECKBOXCONTRATO;
    }

                                //*********SETTERS*********

    /**
     * @param mixed $ID_USER
     */
    public function setIDUSER($ID_USER)
    {
        $this->ID_USER = $ID_USER;
    }

    /**
     * @param mixed $NOME_USER
     */
    public function setNOMEUSER($NOME_USER)
    {
        $this->NOME_USER = $NOME_USER;
    }

    /**
     * @param mixed $SOBRENOME_USER
     */
    public function setSOBRENOMEUSER($SOBRENOME_USER)
    {
        $this->SOBRENOME_USER = $SOBRENOME_USER;
    }

    /**
     * @param mixed $ENDERECO_USER
     */
    public function setENDERECOUSER($ENDERECO_USER)
    {
        $this->ENDERECO_USER = $ENDERECO_USER;
    }

    /**
     * @param mixed $EMAIL_USER
     */
    public function setEMAILUSER($EMAIL_USER)
    {
        $this->EMAIL_USER = $EMAIL_USER;
    }

    /**
     * @param mixed $SEXO_USER
     */
    public function setSEXOUSER($SEXO_USER)
    {
        $this->SEXO_USER = $SEXO_USER;
    }


    /**
     * @param mixed $CIDADE_USER
     */
    public function setCIDADEUSER($CIDADE_USER)
    {
        $this->CIDADE_USER = $CIDADE_USER;
    }


    /**
     * @param mixed $ESTADO_USER
     */
    public function setESTADOUSER($ESTADO_USER)
    {
        $this->ESTADO_USER = $ESTADO_USER;
    }


    /**
     * @param mixed $PAIS_USER
     */
    public function setPAISUSER($PAIS_USER)
    {
        $this->PAIS_USER = $PAIS_USER;
    }


    /**
     * @param mixed $DATANASC_USER
     */
    public function setDATANASCUSER($DATANASC_USER)
    {
        $this->DATANASC_USER = $DATANASC_USER;
    }


    /**
     * @param mixed $ROLE_USER
     */
    public function setROLEUSER($ROLE_USER)
    {
        $this->ROLE_USER = $ROLE_USER;
    }

    /**
     * @return mixed
     */
    public function getUSERNAME()
    {
        return $this->USER_NAME;
    }

    /**
     * @param mixed $USER_NAME
     */
    public function setUSERNAME($USER_NAME)
    {
        $this->USER_NAME = $USER_NAME;
    }


    /**
     * @param mixed $CHECKBOXCONTRATO
     */
    public function setCHECKBOXCONTRATO($CHECKBOXCONTRATO)
    {
        $this->CHECKBOXCONTRATO = $CHECKBOXCONTRATO;
    }

}
