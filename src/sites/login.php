<?php
require("./dbconnect.php");
session_start();

if (!empty($_POST)) {
    $email = $_POST['email'];
    $passwd =  md5($_POST['passwd']);

    $sql = "SELECT * FROM userinfo WHERE email = '$email' AND passwd = '$passwd'";
    $check = $dbh->query($sql);
    if ($check->rowCount() > 0){
        $sql = "SELECT * FROM userinfo WHERE email = '$email'";
        $member = $dbh->query($sql);
        foreach ($member as $mem) {
            $_SESSION['userid'] = $mem['userid'];
            $_SESSION['super'] = $mem['super'];
        }
        header('Location: ./home.php');   // home.phpへ移動
        exit();
    }else{
        echo "メールアドレスまたはパスワードが間違っています。";
    }
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
<img src="../img/main/logo2.png" style="display: block; margin: auto; margin-bottom:-100px;">
    <div class="login">
    <form action="" method="POST">
        <label for="login-id">メールアドレス</label>
        <input id="login-id" name="email" type="text"><br>
        <label for="login-pass">パスワード</label>
        <input id="login-pass" name="passwd" type="password"><br>
        <button name="login" type="submit">ログイン</button>
    </form>
    </div>
    <p><a href="signup.php">新規会員登録はこちら！！</a></p>
    <div><a href="home.php">←ホームに戻る</a></div>
    <?php if(isset($error)){echo '<script>alert('.$error.')</script>';}?>
    <footer>
    <small>badcat@example.com</small>
    </footer>
</body>
</html>
