<?php
require_once 'config.php';

if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['confirmer_mdp']) && isset($_POST['mot_de_passe'])) { //vérifier si le formulaire a été soumis avant de traiter les données
    $nom = htmlspecialchars($_POST['nom']);  //attribue à la variable $nom la valeur soumise via le champ 'nom' du formulaire
    $email = htmlspecialchars($_POST['email']);
    $mot_de_passe = htmlspecialchars($_POST['mot_de_passe']);
    $confirmer_mdp = htmlspecialchars($_POST['confirmer_mdp']);
    $sexe = htmlspecialchars($_POST['sexe']);
    $jour= htmlspecialchars($_POST['jour']);
    $mois= htmlspecialchars($_POST['mois']);
    $annee= htmlspecialchars($_POST['annee']);
    $taille = htmlspecialchars($_POST['taille']);
    $poids = htmlspecialchars($_POST['poids']);
    $objectifs = htmlspecialchars($_POST['objectifs']);
    $niveau_activite = htmlspecialchars($_POST['niveau_activite']);
    $objectif_poids = htmlspecialchars($_POST['objectif_poids']);
    
    $check = $bdd->prepare('SELECT nom, email, mot_de_passe FROM utilisateurs WHERE email = ?'); // prépare une requête SQL pour sélectionner les colonnes 'nom', 'email' et 'mot_de_passe' de la table 'utilisateurs' où l'email correspond à la valeur soumise
    $check->execute(array($email)); // exécute la requête préparée en remplaçant le paramètre '?' par la valeur de la variable $email
    $check->store_result(); // Stocker les résultats
    $row = $check->num_rows; // Obtenir le nombre de lignes // compte le nombre de lignes retournées par la requête et stocke le résultat dans la variable $row

    if ($row == 0) {//vérifie si aucune ligne n'a été trouvée avec l'email soumis. Cela signifie qu'il n'y a pas d'utilisateur existant avec cet email
        if (strlen($nom) <= 50) {
            if (strlen($email) <= 50) {
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) { //valider si la variable $email correspond au format d'email valide
                    if ($mot_de_passe == $confirmer_mdp) {
                        $mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);
                        $ip = $_SERVER['REMOTE_ADDR'];//récupère l'adresse IP de l'utilisateur à partir de la variable superglobale $_SERVER

                        
                        //prépare une requête SQL pour insérer les valeurs de $nom, $email, $mot_de_passe et $ip dans la table 'utilisateurs'
                        $insert = $bdd->prepare('INSERT INTO utilisateurs (nom, email, mot_de_passe, sexe, jour, mois, annee, taille, poids, objectifs, niveau_activite, objectif_poids, ip) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
                        $insert->bind_param('sssssssssssss', $nom, $email, $mot_de_passe_hash, $sexe, $jour, $mois, $annee, $taille, $poids, $objectifs, $niveau_activite, $objectif_poids, $ip);
                        $insert->execute();
                        header('Location: pageprincipaleapresconnexion.php?reg_err=success'); die();
                        

                    } else {
                        header('Location: inscription-formulaire.php?reg_err=password');
                        exit();
                    }
                } else {
                    header('Location: inscription-formulaire.php?reg_err=email');
                    exit();
                }
            } else {
                header('Location: inscription-formulaire.php?reg_err=email_length');
                exit();
            }
        } else {
            header('Location: inscription-formulaire.php?reg_err=pseudo_length');
            exit();
        }
    } else {
        header('Location: inscription-formulaire.php?reg_err=already');
        exit();
    }
} else {
    header('Location: inscription-formulaire.php');
    exit();
}
?>
