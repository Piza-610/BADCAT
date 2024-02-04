<?php
require("./dbconnect.php");
session_start();
 
if (!empty($_POST)) {
    /* メールアドレスの重複を検知 */
    if (!isset($error)) {
        $member = $db->prepare('SELECT COUNT(*) as cnt FROM userinfo WHERE email=?');
        $member->execute(array(
            $_POST['email']
        ));
        $record = $member->fetch();
        if ($record['cnt'] > 0) {
            $error['email'] = 'duplicate';
        }
    }
 
    /* エラーがなければ次のページへ */
    if (!isset($error)) {
        $_SESSION['join'] = $_POST;   // フォームの内容をセッションで保存
        header('Location: check.php');   // check.phpへ移動
        exit();
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
    <div class="sinup">
    <form action="" method="POST">
        <label for="sinup-id">ユーザ名</label>
        <input id="sinup-id" name="userid" type="text" required><br>
        <label for="sinup-pass">パスワード</label>
        <input id="sinup-pass" name="passwd" type="password" required><br>

        <label for="sinup-maill">メールアドレス<span class="required">必須</span></label>
        <input id="sinup-mail" type="email" name="email" required>
        <?php if (!empty($error["email"]) && $error['email'] === 'duplicate'): ?>
            <p class="error">＊このメールアドレスはすでに登録済みです</p>
        <?php endif ?>
        <button name="sinup" type="submit">登録</button>
    </form>
    </div>
    <p><a href="login.php">会員の方はこちら！！</a></p>
    <div><a href="home.php">←ホームに戻る</a></div>
    <footer>
    <small>badcat@example.com</small>
    </footer>
</body>
</html>
