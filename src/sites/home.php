<?php
session_start();
$username = $_SESSION['userid'];
    if (isset($_SESSION['userid'])) {//ログインしているとき
        $msg = $_SESSION['userid']. '<br>';
        $link = '<a href="logout.php">ログアウト</a>';
    } else {//ログインしていない時
        $link = '<a href="login.php">ログイン/<br>新規登録</a>';
    }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css">
	<title>BADCAT</title>
</head>
<body>
<header>
    <img src="../img/main/logo1.png" class="logo">
    <div class="login_and_register"><?php echo $msg,$link; ?></div>

</header>
<div class="main">
        <div class="sidebar">
            <ul>
            <li>ホーム</li>
            <li><a href="board.php">掲示板</a></li>
            <li><a href="store.php">ストア</a></li>
            <li><a href="news.php">NEWS</a></li>
            <li><a href="question.php">質問チャット</a></li>
            <?php
            if($_SESSION['super']=='A'){
                echo '<br><br><li><a href="question.php">ストア管理</a></li>';
                echo '<li><a href="question.php">NEWS管理</a></li>';
                echo '<li><a href="question.php">ユーザ管理</a></li>';
            }
            ?>
            </ul>
        </div>
        <div class="content">
            <p>ようこそ！！BATCATへ！！<br>
            <img src="../img/main/home_cat.jpg" class="home_pic"><br>
            データベースをリセットできます。<br>
            掲示板をリセットできます。<br>
        </div>
</div>
<footer>
    <small>badcat@example.com</small>
</footer>
</body>
</html>
