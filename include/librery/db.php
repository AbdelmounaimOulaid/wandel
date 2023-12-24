<?php
// Informations d'identification
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'wochbzxu_wandelllc');//hoch1987_hoch
define('DB_PASSWORD', 'wandel@1987@');//a9]lO^XTQ}P0
define('DB_NAME', 'wochbzxu_wandelllc');//klassen1987_institute
 
// Connexion à la base de données MySQL 
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Vérifier la connexion
if(!$db){
    header("Location: about.php");
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>