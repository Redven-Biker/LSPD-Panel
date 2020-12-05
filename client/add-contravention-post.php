<?php
// Calls for the config file
include( "inc/config.php" );



// Insert the information
$req = $bdd->prepare('INSERT INTO contravention (name, officier, given_to, price, date) VALUES(?, ?, ?, ?, ?)');
$req->execute(array($_POST['name'], $_POST['officier'], $_POST['given_to'], $_POST['price'], $_POST['date']));

// Redirect user back to the add criminal page
header('Location: contravention.php');

?>
