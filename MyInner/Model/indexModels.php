<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$Title$</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: WLF
 * Date: 30/04/17
 * Time: 15:09
 */
require_once 'User.php';
require_once 'InterfaceTicket.php';
require_once 'Ticket.php';

$p1 = new User("1","BB","BB SOBRE",
    "rua 123", "bb@bbb",
    "f", "AGUAI",
    "SP", "Brasil",
    "1993-11-11", "U", "bbu", "1");

$p1->openTicket();
 print_r($p1);


 $t1 = new Ticket("1", "1", "TEXTO DO TICKET ...");
print_r($t1);

$p1->closeTicket();
$t1->getTXTTICKET();



?>
</body>
</html>

