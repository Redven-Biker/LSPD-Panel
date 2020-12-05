<?php
// Calls for the config file
include( "inc/config.php" );



// Insert the information
$req = $bdd->prepare('INSERT INTO complaints (reason, victim, witnesses, suspect, date, hours) VALUES(?, ?, ?, ?, ?, ?)');
$req->execute(array($_POST['reason'], $_POST['victim'], $_POST['witnesses'], $_POST['suspect'], $_POST['date'], $_POST['hours']));

// Redirect user back to the add criminal page
header('Location: plaintes.php');

?>
