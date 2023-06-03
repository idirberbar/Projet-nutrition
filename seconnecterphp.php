<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="seconnecter.css"> 
</head>
<body>
    <div class="container" id="container">
  
        <div class="form-container login-container">
            <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe incorrect
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email incorrect
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte non existant
                            </div>
                        <?php
                        break;
                    }
                }
                ?> 
            
             <form action="seconnecter.php" method="post">
                <fieldset>
                <h1>Se connecter</h1>
                <span> Vous avez deja un compte?</span>
                <input type="text" placeholder="email" name="email" required><br>
                <label passeword=""></label><br>
                <input type="password" placeholder="password" name="mot_de_passe" required><br>
                <input type="submit" value="Valider">
                
                <a href="mdpoublie.html" target="_blank" rel="noopener noreferrer" style="color:rgb(0, 0, 0);">Mot de passe oublié?</a>
                
                </fieldset>
                <button onclick="window.history.back()">Retour</a></button>
            </form>
            
         </div>
       <div class="overlay-container">
        <div class="overlay">
            
            <div class="overlay-panel overlay-right">
                <h1>Vous n'avez pas de compte?</h1>
                <p>Inscrivez-vous dès maintenant et commencez votre voyage vers une vie plus saine et plus active !</p>
                <button><a href="inscription-formulaire.php">Creer un compte</a></button>
                


            </div>

        </div>




    
            
    







    </div>
    </div>
    
    

</body></html>