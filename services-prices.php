<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="HUD elements/Favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="./styles/style-services-prices.css">
    <title>Services-prices</title>
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
            <div class="prices">

            <?php
                session_start();
                if (empty($_SESSION['login']))
                {
                    include 'nav.php';
                }
                else
                {
                    echo "<div class='forma_vid'>";
                    echo "<form action='addServices.php' method ='POST' class='forma_services-prices'>";
                    echo "<input type='text' placeholder = 'Цена' name = 'price' class='INPUT price'> <span claas='span_prices'>₽</span><br>";
                    echo "<p class='p1'>за м²</p>";
                    echo "<input type='text' placeholder = 'Заголовок' name = 'heading' class='INPUT heading'> <br>";
                    echo "<textarea placeholder = 'Описание' name = 'about' cols='55' rows='15' class='INPUT about'></textarea> <br>";
                    echo "<input type='submit' value='Добавить' class='addButton'> <br>";
                    echo "</form>";
                    echo "</div>" ;
                }
            ?>
            
                <div class="price-i">
                    <h2>600 ₽</h2>
                    <p class="p1">за м²</p>
                    <h3>Технический дизайн-проект</h3>
                    <p> 
                        - 30 рабочих дней <br>
                        - обмерочный план<br>
                        - план с размещением мебельного оборудования <br>(3 варианта перепланировки)<br>
                        - план демонтажа и монтажа конструкций помещений<br>
                        - план расстановки сантехники<br>
                        - план раскладки пола<br>
                        - план привязки потолка<br>
                        - план размещения светильников с привязками к стенам<br>
                        - план размещения выключателей с привязками к стенам<br>
                        - план-схема размещения розеток с привязками<br>
                        - план тёплого пола<br>
                        - развёртки стен<br>
                        - проектный альбом формата А3
                    </p>
                    <button class="buttom" id="buttom">
                        Заказать
                    </button>
                </div>
                <div class="price-i">
                    <h2>1000 ₽</h2>
                    <p class="p1">за м²</p>
                    <h3>Полный дизайн-проект</h3>
                    <p>
                        - от 3 до 4 месяцев<br>
                        - подбор аналогов<br>
                        - обмерочный план<br>
                        - план с размещением мебельного оборудования <br>(3 варианта перепланировки)<br>
                        - план демонтажа и монтажа конструкций помещений<br>
                        - план расстановки сантехники<br>
                        - план раскладки пола<br>
                        - план привязки потолка, узлы сечений сложных элементов<br>
                        - план размещения светильников с привязками к стенам<br>
                        - план размещения выключателей с привязками к стенам<br>
                        - план-схема размещения розеток с привязками<br>
                        - план отопления и кондиционеров<br>
                        - план тёплого пола<br>
                        - план развёрток стен<br>
                        - развертки стен с указанием отделочных материалов<br>
                        - 3D визуализация каждого посещения<br>
                        - ведомость материалов и оборудования по проекту<br>
                        - проектный альбом формата А3<br>
                        - электронная версия проекта
                    </p>
                    <button class="buttom2" id="buttom2">
                        Заказать
                    </button>
                </div>

                <!-- ============== -->
                <?php
                    include "getServices.php"
                ?>
                <!-- =============== -->
                
        
                <div class="back_black" id="back-black"></div>
                <div class="form_prices" id="form-prices">
                    <div class="block" id="block">
                        <div class="wrapper-block">
                            <h3>Оставьте заявку</h3>
                            <p>
                                Менеджер свяжется с Вами в ближайшее время
                            </p>
                            <form action="addContent.php" method="POST">

                                <div class="form-group">
                                    <input type="text" id="name" placeholder="Имя" name="name">
                                </div>

                                <div class="form-group">
                                    <input type="tel" id="tel" placeholder="Телефон" name="tel">
                                </div>
                
                                <div class="form-group">
                                    <input type="email" id="email" placeholder="Email" name="email">
                                </div>
                
                                <div class="form-footer">
                                    <<input type="submit" value="Отправить" class="button">
                                </div>
                            </form>
                            
                        </div>
                        <button class="exit" id="exit">
                            <svg width="24" height="24" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.5 9.5L9.5 22.5M9.5 9.5L22.5 22.5" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>            
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        include 'footer.php';
    ?>
    
    <script src="scripts/script-services-prices.js"></script>
</body>
</html>