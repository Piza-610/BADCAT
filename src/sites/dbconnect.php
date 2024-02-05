<?php
try {
    $dbh = new PDO("mysql:host=badcat-db; dbname=badcat; charset=utf8mb4", "root", "badcat");
} catch (PDOException $e) {
    $msg = $e->getMessage();
}
?>