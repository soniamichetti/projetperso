<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titre; ?> ⎸ SingLouder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="<?php $racine ?>/SITEsingitloud/css/style_album_artiste.css" type="text/css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php $racine ?>/SITEsingitloud/images/micro.jpg">
</head>

<body>

    <header>
        <div class="container">
            <div class="navbar-top">
                <div class="logo">
                    <a href="<?php $racine ?>/SITEsingitloud/controleur/artistes.php"><img src="<?php $racine ?>/SITEsingitloud/images/logo.png" alt="" width="200px"></a>
                </div>
                <div class="icons">
                    <a href="<?php $racine ?>/SITEsingitloud/vue/vueLogin.php"><img src="<?php $racine ?>/SITEsingitloud/images/login.webp" alt="login" width="30px"></a>
                    <a href="#"><img src="<?php $racine ?>/SITEsingitloud/images/heart.svg" alt="like" width="30px"></a>
                </div>

            </div>
        </div>
        <div class="main-content">
            <nav class="navbar navbar-expand-sm bg-bisque justify-content-center sticky-top">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php $racine ?>/SITEsingitloud/controleur/artistes.php">Artistes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php $racine ?>/SITEsingitloud/controleur/albums.php">Albums</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php $racine ?>/SITEsingitloud/controleur/formulaire.php">Formulaire</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>