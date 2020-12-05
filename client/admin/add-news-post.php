<?php
// Calls for the config file
include( "../inc/config.php" );



// Insert the information
$req = $bdd->prepare('INSERT INTO news (title, description) VALUES(?, ?)');
$req->execute(array($_POST['title'], $_POST['description']));

// Redirect user back to the add criminal page
header('Location: news.php');

?>
