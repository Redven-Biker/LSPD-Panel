<?php
// Calls for the config file
include( "inc/config.php" );



// Insert the information
$req = $bdd->prepare('INSERT INTO vehicle_theft (owner, plate, suspect, date) VALUES(?, ?, ?, ?)');
$req->execute(array($_POST['owner'], $_POST['plate'], $_POST['suspect'], $_POST['date']));

// Redirect user back to the add criminal page
header('Location: vols-vehicules.php');

?>
