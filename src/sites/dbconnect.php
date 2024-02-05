<?php
try {
    $dbh = new PDO('mysql:dbname=badcat;host=local:3306;charset=utf8mb4','root','badcat')
}   catch (PDOException $e) {
    $msg = $e->getMessage();
}

try {
    $dbh = new PDO("mysql:host=localhost:3306; dbname=badcat; charset=utf8mb4", "root", "badcat");
} catch (PDOException $e) {
    $msg = $e->getMessage();
}
?>