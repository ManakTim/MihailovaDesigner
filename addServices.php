<?php
include "db.php";
session_start();
$price = $_POST['price'];
$heading = $_POST['heading'];
$about = $_POST['about'];

$query = $dbh -> prepare("INSERT INTO service_and_prices (price, heading, about) VALUES ('$price', '$heading', '$about')");
$query -> execute();

header("Location:services-prices.php");
?>