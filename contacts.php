<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="HUD elements/Favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="styles/style-contacts.css">
    <title>Contacts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <header id="header" class="header">

<?php
    session_start();
    if (empty($_SESSION['login'])){
        include 'nav.php';
    }
    else{
        include 'admin-nav.php';
    }
?>
    
    </header>

    <section id="about" class="about">
        <div class="container">
            <div class="contacts">
                <h3>Контакты</h3>
                <p> г.Челябинск, ул.Орджоникидзе 64 <br>
                    <a href="+79823202702">+79823202702</a> (Предварительная запись по телефону)
                </p>
                <div class="map-script">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5594725333c8753fd5a3444831d5ba19055a9be199a7180d05eea9e76ed326a5&amp;width=1000&amp;height=600&amp;lang=ru_RU&amp;scroll=true"></script>                
                </div>
            </div>
        </div>
    </section>

    <?php
        include 'footer.php';
    ?>

    <script src="scripts/script-projects.js"></script>
</body>
</html>