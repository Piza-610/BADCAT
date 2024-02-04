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
    <form action="home.php" method="POST">
        <label for="login-id">アカウント名</label>
        <input id="login-id" name="username" type="text" placeholder="メールアドレス"><br>
        <label for="login-pass">パスワード</label>
        <input id="login-pass" name="password" type="password" placeholder="パスワード"><br>
        <button name="login" type="submit">ログイン</button>
    </form>
    </div>
    <p><a href="signup.php">新規会員登録はこちら！！</a></p>
    <div><a href="home.php">←ホームに戻る</a></div>
    <footer>
    <small>badcat@example.com</small>
    </footer>
</body>
</html>