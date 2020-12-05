<?php
include( "../../inc/config.php" );

if(isset($_POST['deletecontravention']) and is_numeric($_POST['deletecontravention']))
{
  $id = $_POST['deletecontravention'];
  $count=$bdd->prepare("DELETE FROM contravention WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../contravention.php');
};

if(isset($_POST['deletewantednotice']) and is_numeric($_POST['deletewantednotice']))
{
  $id = $_POST['deletewantednotice'];
  $count=$bdd->prepare("DELETE FROM wanted_notice WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../avis-recherche.php');
};

if(isset($_POST['deletefines']) and is_numeric($_POST['deletefines']))
{
  $id = $_POST['deletefines'];
  $count=$bdd->prepare("DELETE FROM fines WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../amendes.php');
};

if(isset($_POST['deletevehicletheft']) and is_numeric($_POST['deletevehicletheft']))
{
  $id = $_POST['deletevehicletheft'];
  $count=$bdd->prepare("DELETE FROM vehicle_theft WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../vols-vehicules.php');
};

if(isset($_POST['deleterob']) and is_numeric($_POST['deleterob']))
{
  $id = $_POST['deleterob'];
  $count=$bdd->prepare("DELETE FROM rob WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../vols.php');
};

if(isset($_POST['deleterob']) and is_numeric($_POST['deleterob']))
{
  $id = $_POST['deleterob'];
  $count=$bdd->prepare("DELETE FROM complaints WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../plaintes.php');
};

if(isset($_POST['deleteusers']) and is_numeric($_POST['deleteusers']))
{
  $id = $_POST['deleteusers'];
  $count=$bdd->prepare("DELETE FROM users WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../officiers.php');
};

if(isset($_POST['deletenews']) and is_numeric($_POST['deletenews']))
{
  $id = $_POST['deletenews'];
  $count=$bdd->prepare("DELETE FROM news WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: ../news.php');
};

?>
