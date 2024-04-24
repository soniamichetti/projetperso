<?php
session_start();
if (!$_SESSION['mdp']) {
    header('Location:../controleur/login.php');
}
?>