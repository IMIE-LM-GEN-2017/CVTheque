<?php
//connect to mysql database
$server = "127.0.0.1";
$username = "root";
$password = "";
$db = "vagrant";
// Création de la connexion:
$connection = mysqli_connect( $server, $username, $password, $db );

// Test de la connexion:
if(!$connection){
  echo "Erreur :" . mysqli_connect_error();
  die('Impossible de se connecter à la base de données');
}
?>
