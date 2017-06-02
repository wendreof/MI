<?php

/**
 * Created by PhpStorm.
 * User: WLF
 * Date: 25/04/17
 * Time: 00:36
 */
class Assesments
{
    protected $etica, $moral, $honestidade, $inteligencia, $responsabilidade, $txtInfo;

    /**
     * @return mixed
     */
    public function getEtica()
    {
        return $this->etica;
    }

    /**
     * @param mixed $etica
     */
    public function setEtica($etica)
    {
        $this->etica = $etica;
    }

    /**
     * @return mixed
     */
    public function getMoral()
    {
        return $this->moral;
    }

    /**
     * @param mixed $moral
     */
    public function setMoral($moral)
    {
        $this->moral = $moral;
    }

    /**
     * @return mixed
     */
    public function getHonestidade()
    {
        return $this->honestidade;
    }

    /**
     * @param mixed $honestidade
     */
    public function setHonestidade($honestidade)
    {
        $this->honestidade = $honestidade;
    }

    /**
     * @return mixed
     */
    public function getInteligencia()
    {
        return $this->inteligencia;
    }

    /**
     * @param mixed $inteligencia
     */
    public function setInteligencia($inteligencia)
    {
        $this->inteligencia = $inteligencia;
    }

    /**
     * @return mixed
     */
    public function getResponsabilidade()
    {
        return $this->responsabilidade;
    }

    /**
     * @param mixed $responsabilidade
     */
    public function setResponsabilidade($responsabilidade)
    {
        $this->responsabilidade = $responsabilidade;
    }

    /**
     * @return mixed
     */
    public function getTxtInfo()
    {
        return $this->txtInfo;
    }

    /**
     * @param mixed $txtInfo
     */
    public function setTxtInfo($txtInfo)
    {
        $this->txtInfo = $txtInfo;
    }


}