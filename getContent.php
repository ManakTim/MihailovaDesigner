<?php
include "db.php";

$query = $dbh -> prepare("SELECT * FROM orders");
$query -> execute();
$row = $query->fetchAll();

foreach($row as $item){
        echo "<div class='item'>";
        echo "<p> Имя: {$item['name']} </p>";
        echo "<p> Телефон: {$item['tel']} </p>";
        echo "<p> Email: {$item['email']} </p>";
        echo "<a href='delContent.php? id={$item['id']}' class='delContent_button'>Удалить</a>";
        echo "<a href=''>Завершить</a>";
        echo "</div>";
}
?>