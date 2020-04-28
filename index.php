<?php
session_start();
require('dbconnect.php');

//nameのpostの値定義
if (!empty($_POST)) {
    //エラー項目の確認
    //ニックネームが空の場合
    if($_POST['name'] === '') {
        $error['name'] = 'blank';
    }
    //エラー項目の確認
    //年齢が空の場合
    if($_POST['age'] === '') {
    $error['age'] = 'blank';
    }
    //エラー項目の確認
    //性別が空の場合
    if($_POST['gender'] === '') {
    $error['gender'] = 'blank';
    }
    //エラー項目の確認
    //病棟が空の場合
    if($_POST['ward'] === '') {
    $error['ward'] = 'blank';
    }
    //エラー項目の確認
    //病棟が空の場合
    if($_POST['ward'] === '') {
    $error['ward'] = 'blank';
    }
    //エラー項目の確認
    //病室が空の場合
    if($_POST['room'] === '') {
    $error['room'] = 'blank';
    }
    //エラー項目の確認
    //病棟が空の場合
    if($_POST['ward'] === '') {
    $error['ward'] = 'blank';
    }
    //エラー項目の確認
    //IDが空の場合
    if($_POST['id'] === '') {
    $error['id'] = 'blank';
    }
    //エラー項目の確認
    //病棟が空の場合
    if($_POST['ward'] === '') {
    $error['ward'] = 'blank';
    }
    //エラー項目の確認
    //病棟が空の場合
    if($_POST['comment1'] === '') {
    $error['comment1'] = 'blank';
    }
    //エラー項目の確認
    //病棟が空の場合
    if($_POST['comment2'] === '') {
    $error['comment2'] = 'blank';
    }
    //エラー項目の確認
    //病棟が空の場合
    if($_POST['comment3'] === '') {
    $error['comment3'] = 'blank';
    }
    //エラー項目の確認
    //病棟が空の場合
    if($_POST['comment4'] === '') {
    $error['comment4'] = 'blank';
    //エラーがなければ進む
    if (empty($error)) {
        $_SESSION['join'] = $_POST;
        header('Location: check.php');
        exit();
    }
  }
}

if ($_REQUEST['action'] == 'rewrite' && isset(
    $_SESSION['join'])) {
        $_POST = $_SESSION['join'];
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
<h1 class="title">看護記録</h1>
<form action="" method="post" enctype="multipart/form-data">
<section> 
    <div class="find">
    <label>No<input type="text" name="id" class="format" value="<?php print(htmlspecialchars($_POST['id'], ENT_QUOTES)); ?>"></label>
        <?php if ($error['id'] === 'blank'): ?>
        <p class="error">* Noを入力して下さい</p>
        <?php endif; ?>

        <lavel>氏名<input type="text" name="name" class="format" value="<?php print(htmlspecialchars($_POST['name'], ENT_QUOTES)); ?>">様</lavel>
        <?php if ($error['name'] === 'blank'): ?>
        <p class="error">* 名前を入力して下さい</p>
        <?php endif; ?>
    
    
        <lavel><input type="text" name="age" class="format" value="<?php print(htmlspecialchars($_POST['age'], ENT_QUOTES)); ?>">才</lavel>
        <?php if ($error['age'] === 'blank'): ?>
        <p class="error">* 年齢を入力して下さい</p>
        <?php endif; ?>
    
    
        <lavel><input type="radio" name="gender" class="format" value="1" value="<?php print(htmlspecialchars($_POST['gender'], ENT_QUOTES)); ?>">男
        <input type="radio" name="gender" value="2" value="<?php print(htmlspecialchars($_POST['gender'], ENT_QUOTES)); ?>">女</lavel>
        <?php if ($error['gender'] === 'blank'): ?>
        <p class="error">* 性別を入力して下さい</p>
        <?php endif; ?>

        <label><input type="text" name="ward" class="format" value="<?php print(htmlspecialchars($_POST['ward'], ENT_QUOTES)); ?>">病棟</label>
        <?php if ($error['ward'] === 'blank'): ?>
        <p class="error">* 病棟を入力して下さい</p>
        <?php endif; ?>
    
        <label><input type="text" name="room" class="format" value="<?php print(htmlspecialchars($_POST['room'], ENT_QUOTES)); ?>">号室</label>
        <?php if ($error['room'] === 'blank'): ?>
        <p class="error">* 号室を入力して下さい</p>
        <?php endif; ?>
   
    </div> 
</section>
<section>    
        <textarea cols="10" rows="100"  placeholder="月/日 時間"   name="comment1" class="panel_1" value=
            "<?php print(htmlspecialchars($_POST['comment1'], ENT_QUOTES)); ?>">
            <?php if ($error['comment1'] === 'blank'): ?>
            <p class="error">* 月/日 時間を入力して下さい</p>
            <?php endif; ?>
        </textarea>
   
        <textarea  cols="40" rows="100"    placeholder="看護処置"　name="comment2"  class="panel" value=
            "<?php print(htmlspecialchars($_POST['comment2'], ENT_QUOTES)); ?>">
            <?php if ($error['comment2'] === 'blank'): ?>
            <p class="error">* 看護処置を入力して下さい</p>
            <?php endif; ?>
        </textarea>
   
        <textarea  cols="80" rows="100" name="comment3"　placeholder="記事" class="panel" value=
            "<?php print(htmlspecialchars($_POST['comment3'], ENT_QUOTES)); ?>">
            <?php if ($error['comment3'] === 'blank'): ?>
            <p class="error">* 記事を入力して下さい</p>
            <?php endif; ?>
        </textarea>
   
   
        <textarea cols="10" rows="100" name="comment4" placeholder="看護師サイン" class="panel" value=
            "<?php print(htmlspecialchars($_POST['comment4'], ENT_QUOTES)); ?>">
            <?php if ($error['comment4'] === 'blank'): ?>
            <p class="error">* 看護師サインを入力して下さい</p>
            <?php endif; ?>
        </textarea>
</section>
        <div>
            <button class="btn">確定</button>
        </div>
</form>
</section>
</body>
</html>