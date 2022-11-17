<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="HUD elements/Favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="styles/style-main.css">
    <title>Mikhailova Designer</title>
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
        
        <div class="slider">
            <div class="mySlides">
                <img src="Main/BedPicture1.png" alt="BedPicture1" class="photo-desk"> 
            </div>
            <div class="mySlides">
                <img src="Main/ChildRoomPicture2.png" alt="ChildRoomPicture2" class="photo-desk"> 
            </div>
            <div class="mySlides">
                <img src="Main/KitchenPicture3.png" alt="KitchenPicture3" class="photo-desk"> 
            </div>
            <div class="mySlides">
                <img src="Main/LivingRoomPicture4.png" alt="LivingRoomPicture4" class="photo-desk"> 
            </div>
            <!-- <div class="mySlides">
                <img src="/Main/PhoneTest.png" alt="PhoneTest" class="phone-test">
            </div> -->

            <a class="prev" onclick="plusSlides(-1)"><img src="HUD elements/LeftVector.png" alt="LeftVector"></a>
            <a class="next" onclick="plusSlides(1)"><img src="HUD elements/RightVector.png" alt="RightVector"></a>

            <div class="dote">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>
        </div>
        <!-- ====================== -->

        <div class="slider-phone">
            <div class="mySlides2">
                <img src="main/BedPicture1phone.png" alt="BedPicture1phone" class="photo-phone">
            </div>
            <div class="mySlides2">
                <img src="main/ChildRoomPicture2phone.png" alt="BedPicture1phone" class="photo-phone">
            </div>
            <div class="mySlides2">
                <img src="main/KitchenPicture3phone.png" alt="BedPicture1phone" class="photo-phone">
            </div>
            <div class="mySlides2">
                <img src="main/LivingRoomPicture4phonne.png" alt="BedPicture1phone" class="photo-phone">
            </div>

            <a class="prev-phone" onclick="plusSlidesPh(-1)"><img src="HUD elements/LeftVector.png" alt="LeftVector"></a>
            <a class="next-phone" onclick="plusSlidesPh(1)"><img src="HUD elements/RightVector.png" alt="RightVector"></a>

            <div class="dote-phone">
                <span class="dot-phone" onclick="currentSlidePh(1)"></span>
                <span class="dot-phone" onclick="currentSlidePh(2)"></span>
                <span class="dot-phone" onclick="currentSlidePh(3)"></span>
                <span class="dot-phone" onclick="currentSlidePh(4)"></span>
            </div>
        </div>

        <!-- ====================== -->
    </header>

    <section id="about" class="about">
        <div class="container">
            <h2>О компании</h2>
            <div class="description">
                <div class="desk-left">
                    <h3>Заголовок</h3>
                    <p>Диза́йн интерье́ра (интерье́рный диза́йн) — отрасль дизайна, направленная на интерьер помещений с целью обеспечить удобство и эстетически приятное взаимодействие среды с людьми.
                        <br>
                        <br>
                        Диза́йн интерье́ра (интерье́рный диза́йн) — отрасль дизайна, направленная на интерьер помещений с целью обеспечить удобство и эстетически приятное взаимодействие среды с людьми.
                        <br>
                        <br>
                        Диза́йн интерье́ра (интерье́рный диза́йн) — отрасль дизайна, направленная на интерьер помещений с целью обеспечить удобство и эстетически приятное взаимодействие среды с людьми.
                    </p>
                </div>
                <div class="desk-right">
                    <h3>Философия</h3>
                    <p>Мы создали студию с прозрачной схемой работы, фиксированными сроками, а так же чувством стиля и пониманием ваших желаний.
                        <br>
                        <br>
                        Общение - это ключ к любым успешным отношениям, мы умеем не только слушать, но и слышать. Проникнем в историю каждого человека, чтобы понять потребности.                        
                        <br>
                        <br>
                        Мы сделаем все, чтобы нашему клиенту было комфортно на всех этапах работы, созданный интерьер приносил удовольствие долгое время и был истинно “вашим”.                     
                    </p>
                </div>
            </div>
            <div class="gallery">
                <div class="container">
                    <img src="Gallery/image 5.png" alt="image5">
                    <img src="Gallery/image 4.png" alt="image4">
                    <img src="Gallery/image 6.png" alt="image6">
                </div>
            </div>
    </section>

    <?php
        include 'footer.php';
    ?>
    
    <script src="scripts/script-main.js"></script>
</body>
</html>