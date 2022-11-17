<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="HUD elements/Favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="styles/style-page-kitchen.css">
    <title>Childroom projects</title>
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
        <div class="project-1">
            <div class="container">
                <h2>Название проекта</h2>
                <div class="gallery">
                    <img src="projects-blocks/childrooms/childroom-1.jpg" alt="childroom-1">
                    <img src="projects-blocks/childrooms/childroom-2.jpg" alt="childroom-2">
                    <img src="projects-blocks/childrooms/childroom-3.jpg" alt="childroom-3">
                </div>
            </div>
        </div>
        <div class="project-2">
            <div class="container">
                <h2>Название проекта</h2>
                <div class="gallery">
                    <img src="projects-blocks/childrooms/childroom-4.jpg" alt="childroom-4">
                    <img src="projects-blocks/childrooms/childroom-5.jpg" alt="childroom-5">
                    <img src="projects-blocks/childrooms/childroom-6.jpg" alt="childroom-6">
                    <img src="projects-blocks/childrooms/childroom-7.jpg" alt="childroom-7">
                </div>
            </div>
        </div>
        <div class="project-3">
            <div class="container">
                <h2>Название проекта</h2>
                <div class="gallery">
                    <img src="projects-blocks/childrooms/image-x.png" alt="image-x">
                    <img src="projects-blocks/childrooms/image-x.png" alt="image-x">
                    <img src="projects-blocks/childrooms/image-x.png" alt="image-x">
                </div>
            </div>
        </div>
    </section>

    <?php
        include 'footer.php';
    ?>
    
    <script src="scripts/script-page-childroom.js"></script>
</body>
</html>