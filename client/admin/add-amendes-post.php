<?php
// Calls for the config file
include( "../inc/config.php" );



// Insert the information
$req = $bdd->prepare('INSERT INTO fines (name, category, price) VALUES(?, ?, ?)');
$req->execute(array($_POST['name'], $_POST['category'], $_POST['price']));

// Redirect user back to the add criminal page
header('Location: amendes.php');

?>
