<?php 
    session_start(); // Démarrage de la session
    require_once 'config.php'; // On inclut la connexion à la base de données

    if(!empty($_POST['email']) && !empty($_POST['mot_de_passe'])) // Si les champs email et mot_de_passe ne sont pas vides
    {
        // Patch XSS
        $email = htmlspecialchars($_POST['email']); 
        $mot_de_passe = htmlspecialchars($_POST['mot_de_passe']);
        
        $email = strtolower($email); // Convertir l'email en minuscules
        
        // On vérifie si l'utilisateur est enregistré dans la table utilisateurs
        $check = $bdd->prepare('SELECT nom, email, mot_de_passe, token FROM utilisateurs WHERE email = ?');
        $check->execute(array($email));
        $check->store_result(); // Stocker les résultats
        $row = $check->num_rows; // Obtenir le nombre de lignes
       

        // Si le nombre de lignes est supérieur à 0, alors l'utilisateur existe
        if($row > 0)
        {
            // Si le format de l'email est valide
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {   $check->bind_result($nom, $email, $mot_de_passe_hash, $token);
                $check->fetch();
                // Si le mot de passe est correct
                if(password_verify($mot_de_passe, $mot_de_passe_hash))
                {
                    // On crée la session et on redirige vers la page principale
                    $_SESSION['user'] = $data['token'];
                    header('Location:  pageprincipaleapresconnexion.php');
                    die();
                }else{ header('Location: seconnecterphp.php?login_err=password'); die(); }
            }else{ header('Location: seconnecterphp.php?login_err=email'); die(); }
        }else{ header('Location: seconnecterphp.php?login_err=already'); die(); }
    }else{ header('Location: seconnecterphp.php'); die();} // Si le formulaire est envoyé sans aucune donnée

