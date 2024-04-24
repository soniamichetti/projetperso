<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_loginout.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sign up ⎸ SingLouder</title>
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
                <a class="nav-link" href="vueArtistes.php">Artistes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="vueAlbums.php">Albums</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="vueForm.php">Formulaire</a>
              </li>
            </ul>
          </nav>
        <div class="content">
            <h1>ARTISTES</h1>
        </div>
       </div>
    </header>
  <div class="wrapper">
    <div class="container main">
        <div class="row">
            <div class="col-md-6 side-image">
                       
                <!-------------      image     ------------->
                
                <div class="text">
                    <p>Ecoutez vos artistes préférés et chantez avec eux !</br> <i>Inscrivez vous pour avoir accès à un catalogue plus vaste</i></p>
                </div>
                
            </div>

            <div class="col-md-6 right">
                
                <div class="input-box">
                   
                   <header>Création d'un compte</header>
                   <div class="input-field">
                        <input type="text" class="input" id="email" required="" autocomplete="off">
                        <label for="email">Email</label> 
                    </div> 
                   <div class="input-field">
                        <input type="password" class="input" id="pass" required="">
                        <label for="pass">Mot de Passe</label>
                    </div> 
                   <div class="input-field">
                        
                        <input type="submit" class="submit" value="Inscription">
                   </div> 
                   <div class="signin">
                    <span>Vous avez déjà un compte ?<a href="vueSignin.php"> Connectez-vous ici</a></span>
                   </div>
                </div>  
            </div>
        </div>
    </div>
</div>
</body>
</html>