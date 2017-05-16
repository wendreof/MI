<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$Title$</title>
</head>
<body>
<pre><?php
    require_once 'User.php';
/**
 * Created by PhpStorm.
 * User: WLF
 * Date: 14/05/17
 * Time: 16:53
 */

$u = new User("1", "wendreo");
$u2  = new User("2", "semnome");

$u->avaliar($u2);
print_r($u);

?></pre>
</body>
</html>

