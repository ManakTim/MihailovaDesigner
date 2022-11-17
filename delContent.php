<?php

include "db.php";

$id =$_GET['id'];

$query = $dbh -> prepare("DELETE FROM orders WHERE id='$id'");
$query -> execute();

header("Location:admin.php");

?>