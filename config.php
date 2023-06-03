<?php
$host = "localhost"; // Nom d'hôte de la base de données (généralement "localhost")
$username = "root"; // Nom d'utilisateur de la base de données
$password = ""; // Mot de passe de la base de données
$database = "fitia"; // Nom de la base de données

// Établir la connexion à la base de données
$bdd = mysqli_connect($host, $username, $password, $database);

// Vérifier si la connexion a réussi
if (!$bdd) {
    die("Échec de la connexion à la base de données: " . mysqli_connect_error());
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs du formulaire
    $email = $_POST["email"];
    $mot_de_passe = $_POST["mot_de_passe"];

  
// Fermer la connexion
//mysqli_close($bdd);
?>
