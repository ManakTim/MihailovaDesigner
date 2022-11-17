<?php
include "db.php";

$query = $dbh -> prepare("SELECT * FROM service_and_prices");
$query -> execute();
$row = $query->fetchAll();

foreach($row as $item){
        // echo "<div class='item'>";
        // echo "<p> Имя: {$item['price']} </p>";
        // echo "<p> Телефон: {$item['']} </p>";
        // echo "<p> Email: {$item['email']} </p>";
        // echo "<a href='delContent.php?id={$item['id']}'>Удалить</a>";
        // echo "</div>";

        echo "<div class='price-i'>";
        echo "<h2>{$item['price']}</h2>";
        echo "<p class='p1'>за м²</p>";
        echo "<h3>{$item['heading']}</h3>";
        echo "<p>{$item['about']}</p>";
        echo "<button class='buttom' id='buttom'>Заказать</button>";
        echo "<a href='delContentServices.php? id={$item['id']}' class='delContent_button'>Удалить</a>";
        echo "</div>";

}
?>