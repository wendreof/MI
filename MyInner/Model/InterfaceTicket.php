<?php

/**
 * Created by PhpStorm.
 * User: WLF
 * Date: 30/04/17
 * Time: 14:50
 */
interface InterfaceTicket
{
    public function openTicket();
    public function writeTicket();
    public function answerTicket();
    public function closeTicket();
}