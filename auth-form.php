<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="HUD elements/Favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="styles/style-auth-form.css">
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
            <h3>Авторизация</h3>
            <form action="auth.php" method="POST">

                <div class="form-group">
                    <input type="text" id="login" placeholder="Логин" name="login">
                </div>

                <div class="form-group">
                    <input type="password" id="password" placeholder="Пароль" name="password">
                </div>
                
                                <!-- <div class="form-group">
                                    <input type="email" id="email" placeholder="Email adress">
                                </div> -->
                
                <div class="form-footer">
                    <input type="submit" value="Войти" class="button_auth">
                    <a href="reg-form.php" class="regisration" >Зарегистрироваться</a>
                </div>
            </form>
                            
        </div>
    </div>
</div>
</body>
</html>