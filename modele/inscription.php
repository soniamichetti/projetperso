<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8;', 'owner', 'Mepo_4775');
if (isset($_POST['envoi'])) {
    if (!empty($_POST['pseudo']) and !empty($_POST['mdp'])) {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = sha1($_POST['mdp']);
        $insertUser = $bdd->prepare('INSERT INTO users(pseudo,mdp)VALUES(?,?)');
        $insertUser->execute(array($pseudo, $mdp));
        $recupUser = $bdd->prepare('SELECT * from users where pseudo=? AND mdp=?');
        $recupUser->execute(array($pseudo, $mdp));
        if ($recupUser->rowCount() > 0) {
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $recupUser->fetch()['id'];
        }
        echo $_SESSION['id'];
    } else {
        echo 'veuillez compléter tous les champs';
    }
}


?>