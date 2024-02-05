<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css">
	<title>BADCAT</title>
</head>
<body>
    <img src="../img/main/logo2.png" style="display: block; margin: auto; margin-bottom:-100px;">
    <div class="sinup">
    <form action="register.php" method="post">
    <label id="sinup-id">名前　　　　　：<input type="text" name="userid" required></label><br>
    <label id="sinup-id">メールアドレス：<input type="text" name="email" required></label><br>
    <label id="sinup-id">パスワード　　：<input type="password" name="passwd" required></label><br>
    <input type="submit" value="新規登録">
    </form>
    </div>
    <p><a href="login.php">会員の方はこちら！！</a></p>
    <div><a href="home.php">←ホームに戻る</a></div>
    <footer>
    <small>badcat@example.com</small>
    </footer>
</body>
</html>
