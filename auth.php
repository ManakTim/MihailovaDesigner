<?php
session_start();
include "db.php";

$login= $_POST['login'];
$password= $_POST['password'];

$query = $dbh -> prepare("SELECT * FROM users WHERE login='$login' AND password='$password'");
$query -> execute();
$row = $query->fetch();

if ($row>0){
    $_SESSION['login'] = $login;
    header("Location:admin.php");
} else{
    // header("Location:auth-form.php");
    echo "<script>alert('Неправильный пароль')</script>";
}