
<?php
session_destroy();
unset($_SESSION);
header("Location: ../View/index.php");
?>
