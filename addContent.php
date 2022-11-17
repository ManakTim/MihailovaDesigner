<?php
include "db.php";
session_start();
$name = $_POST['name'];
$tel = $_POST['tel'];
$email = $_POST['email'];

$query = $dbh -> prepare("INSERT INTO orders (name, tel, email) VALUES ('$name', '$tel', '$email')");
$query -> execute();

header("Location:services-prices.php");
?>