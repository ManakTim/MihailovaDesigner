<?php

include "db.php";

$id =$_GET['id'];

$query = $dbh -> prepare("DELETE FROM service_and_prices WHERE id='$id'");
$query -> execute();

header("Location:services-prices.php");

?>