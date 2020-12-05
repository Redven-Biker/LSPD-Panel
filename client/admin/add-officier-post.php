<?php
// Calls for the config file
include( "../inc/config.php" );



// Insert the information
$req = $bdd->prepare('INSERT INTO users (username, password) VALUES(?, ?)');
$req->execute(array($_POST['username'], $_POST['password']));

// Redirect user back to the add criminal page
header('Location: officiers.php');

?>
