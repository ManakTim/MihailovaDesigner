<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="HUD elements/Favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="styles/style-reg-form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
</head>
<body>

<?php

include 'nav.php';

?>

<div class="form_auth" id="form-auth">
    <div class="block" id="block">
        <div class="wrapper-block">
            <h3>Регистрация</h3>
            <form action="reg.php" method="POST">

                <div class="form-group">
                    <input type="text" id="login" placeholder="Логин" name="login">
                </div>

                <div class="form-group">
                    <input type="password" id="password" placeholder="Придумайте пароль" name="password">
                    <input type="password" id="password" placeholder="Повторите пароль" name="repassword">
                </div>
                
                                <!-- <div class="form-group">
                                    <input type="email" id="email" placeholder="Email adress">
                                </div> -->
                
                <div class="form-footer">
                    <input type="submit" value="Зарегистрироваться" class="button_auth">
                    <a href="auth-form.php">Назад</a>
                </div>
            </form>
                            
        </div>
    </div>
</div>
</body>
</html>