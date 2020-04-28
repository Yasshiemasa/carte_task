<?php
session_start();
require('dbconnect.php');

if (!isset($_SESSION['join'])) {
	header('Location: index.php');
    exit();
}

if (!empty($_POST)) {
    $statment = $db->prepare('INSERT INTO karte SET name=?, age=?, gender=?, ward=?,
        room=?, comment1=?, comment2=?, comment3=?, comment4=?, created=NOW()');
    $message->execute(array(
        $_SESSION['join']['name'],
        $_SESSION['join']['age'],
        $_SESSION['join']['gender'],
        $_SESSION['join']['ward'],
        $_SESSION['join']['room'],
        $_SESSION['join']['comment1'],
        $_SESSION['join']['comment2'],
        $_SESSION['join']['comment3'],
        $_SESSION['join']['comment4']));

        unset($_SESSION['join']);
        header('Location: index.php');
        exit();  
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<link href="http://fonts.googleapis.com/css?hatenafamily=Monsterrat.400,700" rel="stylesheet" type="text/css">
</head>
<body>
<section id="box" class="site-width">
<h1 class="title">看護記録</h1>氏名<input type="text" class="name">様　<input type="text" class="age">才<input type="radio" name="gender" value="1">男<input type="radio" name="gender" value="2">女
<input type="text" class="name">病棟<input type="text"  class="room">号室 No<input type="text" class="number">

<div>
<textarea   cols="10" rows="100"  placeholder="月/日 時間"   name="comment" class="panel">
</textarea>

<textarea  cols="40" rows="100"    placeholder="看護処置"　name="coment"  class="panel">
</textarea>

<textarea  cols="80" rows="100" name="comment"　placeholder="記事" class="panel">
</textarea>

<textarea cols="10" rows="100" name="comment" placeholder="看護師サイン" class="panel">
</textarea>
</div>

</section>

</body>
</html>