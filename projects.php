<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="HUD elements/Favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="styles/style-project.css">
    <title>Projects</title>
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
        <div class="blocks">
        <?php
                session_start();
                if (empty($_SESSION['login']))
                {
                    include 'nav.php';
                }
                else
                {
                    echo "<div class='forma_vid'>";
                        echo "<h3>Квадратный блок</h3>";
                        echo "<form action='getServices.php' method ='POST' class='forma_services-prices'>";
                        echo "<input type='text' placeholder = 'Картинка' name = 'picture' class='INPUT picture'> <br>";
                        echo "<input type='text' placeholder = 'Заголовок' name = 'heading' class='INPUT heading'> <br>";
                        echo "<input type='submit' value='Добавить' class='addButton'> <br>";
                        echo "</form>";
                        echo "<h3 class='second_heading'>Прямоугольный блок</h3>";
                        echo "<form action='getServices.php' method ='POST' class='forma_services-prices'>";
                        echo "<input type='text' placeholder = 'Картинка' name = 'picture' class='INPUT picture'> <br>";
                        echo "<input type='text' placeholder = 'Заголовок' name = 'heading' class='INPUT heading'> <br>";
                        echo "<input type='submit' value='Добавить' class='addButton'> <br>";
                        echo "</form>";
                    echo "</div>" ;
                }
            ?>
            <div class="prj">
                <a href="page-kitchen.php" class="project-a">
                    <div class="square1">
                        <img src="/projects-blocks/Kitchen.png" alt="Kitchen">
                        <span>Кухня</span>
                    </div>
                </a>
                <a href="page-livingroom.php" class="project-a">
                    <div class="square2">
                        <img src="/projects-blocks/Livingroom.png" alt="Livingroom">
                        <span>Гостинная</span>
                    </div>
                </a>
            </div>
            <a href="page-bedroom.php">
                <div class="block1">
                    <img src="/projects-blocks/Bedroom-phone.png" alt="Bedroom-phone" class="bedroom-phone">
                    <img src="/projects-blocks/Bedroom.png" alt="Bedroom" class="bedroom-desktop">
                    <span>Спальня</span>
                </div>
            </a>
            <div class="prj">
                <a href="page-childroom.php" class="project-a">
                    <div class="square1">
                        <img src="/projects-blocks/Childroom.png" alt="Childroom">
                        <span>Детская</span>
                    </div>
                </a>
                <a href="page-bathroom.php" class="project-a">
                    <div class="square2">
                        <img src="/projects-blocks/Bathroom.png" alt="Bathroom">
                        <span>Ванная</span>
                    </div>
                </a>
            </div>
            <!-- <a href="#">
                <div class="block1">
                <img src="/projects-blocks/Bedroom-phone.png" alt="Bedroom-phone" class="bedroom-phone">
                <img src="/projects-blocks/Bedroom.png" alt="Bedroom" class="bedroom-desktop">
                <span>Спальня</span>
            </div>
        </a> -->
    </div>
    </section>

    <?php
        include 'footer.php';
    ?>
    
    <script src="scripts/script-projects.js"></script>
</body>
</html>