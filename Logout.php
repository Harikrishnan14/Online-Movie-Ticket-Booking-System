<?php

session_start();

session_destroy();

setcookie('PNumbercookie','',time()-86400);
setcookie('Passcookie','',time()-86400);

header('location:Home.php');

?>