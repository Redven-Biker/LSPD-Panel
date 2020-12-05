<?php
// Calls for the config file
include( "inc/config.php" );



// Insert the information
$req = $bdd->prepare('INSERT INTO wanted_notice (wanted_person, officier, date) VALUES(?, ?, ?)');
$req->execute(array($_POST['wanted_person'], $_POST['officier'], $_POST['date']));

// Redirect user back to the add criminal page
header('Location: avis-recherche.php');

?>
