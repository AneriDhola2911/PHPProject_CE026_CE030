<?php
session_start();
if(!isset($_SESSION['isSigned']) || (isset($_SESSION['isSigned']) && $_SESSION['isSigned'] != "SignedIn"))
{
    $_SESSION['isSigned'] = "wrong";
    header('Location:index.php');
}
?>