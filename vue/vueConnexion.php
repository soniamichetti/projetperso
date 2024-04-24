<br>
<p style='text-align: center;'>Ecoutez vos artistes préférés et chantez avec eux !</br> <i>Inscrivez-vous pour avoir accès à l'envoi de formulaires.</i></p>

<body>
    <form method="POST" action="" align="center">
        Pseudonyme : <br><input type="text" name="pseudo" autocomplete='off'>
        <br />
        Mot de passe : <br><input type="password" name="mdp" autocomplete='off'>
        <br /> <br />
        <p style='color:red;'><?php echo $erreurChamps;
                                echo $erreurPMDP; ?></p>
        <input type="submit" name="envoi"><br><br>
        <span>Vous n'avez pas de compte ? <a href="<?php $racine ?>/SITEsingitloud/controleur/inscription.php">Inscrivez-vous ici</a></span>

        <br>
        <a href='../modele/deconnexion.php'> 
            <button> Se déconnecter </button>
        </a>
    </form>

</body>

</html>