<?php

session_start();
if(!isset($_SESSION['id']))
{
    header("location: index.php");
    exit;
}


?>

SEJA BEM VINDO(A)!!
<a href="sair.php">SAIR</a>