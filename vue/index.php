<?php
session_start();
if (!$_SESSION['mdp']) {
    header('Location:../modele/connexion.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se déconnecter ⎸ SingLouder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../css/styleal.css" type="text/css" rel="stylesheet">
    <link rel="shortcut icon" href="../images/micro.jpg">
</head>

<body>

    <header>
        <div class="container">
            <div class="navbar-top">
                <div class="search-bar">
                    <input type="text" placeholder="Rechercher...">
                </div>
                <div class="logo">
                    <a href="vueArtistes.php"><img src="../images/logo.png" alt="" width="200px"></a>
                </div>
                <div class="icons">
                    <a href="vueLogin.php"><img src="../images/login.webp" alt="login" width="30px"></a>
                    <a href="#"><img src="../images/heart.svg" alt="like" width="30px"></a>
                </div>

            </div>
        </div>

        <div class="main-content">
            <nav class="navbar navbar-expand-sm bg-bisque justify-content-center sticky-top">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../vue/vueArtistes.php">Artistes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../vue/vueAlbums.php">Albums</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../vue/vueForm.php">Formulaire</a>
                    </li>
                </ul>
            </nav>
            <div class="content">
                <h1>ALBUMS</h1>
            </div>
        </div>
    </header>
    <main>
        <a href='../modele/deconnexion.php'>
            <button> Se déconnecter </button>
        </a>
    </main>