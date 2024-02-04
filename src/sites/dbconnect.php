<?php
try {
    $db = new PDO('mysql:dbname=badcat;host=local:3306;charset=utf8mb4','root','badcat')
}   catch (PDOException $e) {
    echo "データベース接続エラー　：".$e->getMessage();
}
?>