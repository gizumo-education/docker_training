<?php
try {
    $dbh = new PDO('mysql:dbname=docker_training;host=mysql;unix_socket=/tmp/mysql.sock', 'root', 'root');
    echo '<h1 style="color:limegreen">DB接続成功</h1>';
} catch (PDOException $e) {
    echo '<h1 style="color:red">DB接続エラー</h1>' . $e->getMessage();
    exit;
}
