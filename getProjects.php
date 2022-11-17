<?php
include "db.php";

$query = $dbh -> prepare("SELECT * FROM service_and_prices");
$query -> execute();
$row = $query->fetchAll();

foreach($row as $item){
        echo "<div class='item'>";
        echo "<p> Имя: {$item['name']} </p>";
        echo "<p> Телефон: {$item['tel']} </p>";
        echo "<p> Email: {$item['email']} </p>";
        echo "<a href='delContent.php?id={$item['id']}'>Удалить</a>";
        echo "</div>";
}
?>