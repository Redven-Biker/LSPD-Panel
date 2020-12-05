<?php
// Calls for the config file
include( "inc/config.php" );



// Insert the information
$req = $bdd->prepare('INSERT INTO rob (owner, object, suspect, date) VALUES(?, ?, ?, ?)');
$req->execute(array($_POST['owner'], $_POST['object'], $_POST['suspect'], $_POST['date']));

// Redirect user back to the add criminal page
header('Location: vols.php');

?>
