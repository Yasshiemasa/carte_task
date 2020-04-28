<?php
try {
    $db = new PDO('mysql:dbname=nurse_karte;host=127.0.0.1;port=8889;charset=utf8','root','root');
} catch(PDOException $e) {
    print('DB接続エラー:' . $e->getMessage());
}
