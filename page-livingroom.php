<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="HUD elements/Favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="styles/style-page-kitchen.css">
    <title>Livingroom projects</title>
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
        <div class="project-1">
                <h2>Название проекта</h2>
                <div class="gallery">
                    <img src="projects-blocks/livingrooms/livingroom-1.jpg" alt="livingroom-1">
                    <img src="projects-blocks/livingrooms/livingroom-2.jpg" alt="livingroom-2">
                    <img src="projects-blocks/livingrooms/livingroom-1.jpg" alt="livingroom-1">
                </div>
        </div>
        <div class="project-2">
                <h2>Название проекта</h2>
                <div class="gallery">
                    <img src="projects-blocks/livingrooms/image-x.png" alt="image-x">
                    <img src="projects-blocks/livingrooms/image-x.png" alt="image-x">
                    <img src="projects-blocks/livingrooms/image-x.png" alt="image-x">
                </div>
        </div>
        <div class="project-3">
                <h2>Название проекта</h2>
                <div class="gallery">
                    <img src="projects-blocks/livingrooms/image-x.png" alt="image-x">
                    <img src="projects-blocks/livingrooms/image-x.png" alt="image-x">
                    <img src="projects-blocks/livingrooms/image-x.png" alt="image-x">
                </div>
        </div>
        </div>
    </section>

    <?php
        include 'footer.php';
    ?>
    
    <script src="scripts/script-page-livingroom.js"></script>
</body>
</html>