<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="HUD elements/Favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="styles/style-admin.css">
    <title>Admin</title>
</head>
<body>

<?php
session_start();
if (empty($_SESSION['login'])){
    header ("location:/");
}
?>
 
 <?php
    include "admin-nav.php";
?>
<section id="about" class="about">
    <div class="wrap-style">
        <?php
            include "getContent.php";
        ?>
    </div>
</section>

</body>
</html>