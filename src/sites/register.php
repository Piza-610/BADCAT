<?php
require("./dbconnect.php");
session_start();

if (!isset($_SESSION['join'])) {
    header('Location: sinup.php');
    exit();
}

$userid = $_POST['userid'];
$email = $_POST['email'];
$passwd = password_hash($_POST['passwd'], PASSWORD_DEFAULT);

//フォームに入力値がすでに登録されていないかチェック
$sql = "SELECT * FROM userinfo WHERE email = :email";
$stmt = $dbh->prepare($sql);
$stmt->bindValue(':email', $email);
$stmt->execute();
$member = $stmt->fetch();
if ($member['email'] === $email) {
    $msg = '同じメールアドレスが存在します。';
    $link = '<a href="signup.php">戻る</a>';
} else {
    $sql = "INSERT INTO userinfo(userid, email, passwd) VALUES (:userid, :email, :passwd)";
    $stmt = $dbh->prepare($sql);
    $stmt->$id = $dbh->prepare('SELECT COUNT(*) FROM userinfo');
    $stmt->bindValue(':userid', $userid);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':passwd', $passwd);
    $stmt->execute();
    $msg = '会員登録が完了しました';
    $link = '<a href="login.php">ログインページ</a>';
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

<h2><?php echo $msg; ?></h2>
<?php echo $link; ?>
    <footer>
    <small>badcat@example.com</small>
    </footer>
</body>
</html>
