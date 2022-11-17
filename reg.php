<?php
include "db.php";

$login= $_POST['login'];
$password= $_POST['password'];
$repassword= $_POST['repassword'];
if($password==$repassword)
{
    $query = $dbh -> prepare("SELECT * FROM users WHERE login='$login'");
    $query -> execute();
    $row = $query->fetch();

    if ($row>0){
        echo "Такой логин занят";
    } 
    else
    {
        $query = $dbh -> prepare("INSERT INTO users (login, password) VALUES ('$login', '$password')");
        $query -> execute();
        header("Location:auth-form.php");
    }
}
    else
{
    echo "<script>alert('Регистрация прошла успешно')</script>";
}