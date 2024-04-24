<?php
$erreurPMDP='';
$erreurChamps='';
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8;', 'owner', 'Mepo_4775');
if (isset($_POST['envoi'])) {
    if (!empty($_POST['pseudo']) and !empty($_POST['mdp'])) {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = sha1($_POST['mdp']);
        $recupUser = $bdd->prepare('SELECT * FROM users WHERE pseudo= ? AND mdp= ?');
        $recupUser->execute(array($pseudo, $mdp));
        if ($recupUser->rowCount() > 0) {
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $recupUser->fetch()['id'];
            header('Location:../controleur/albums.php');
        } else {
            $erreurPMDP='Votre mot de passe ou votre pseudo est incorrect !';
        }
    } else {
        $erreurChamps='Veuillez compléter tous les champs !';
    }
}
