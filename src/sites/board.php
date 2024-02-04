<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css">
	<title>BADCAT</title>
</head>
<body>
<header>
    <a href="home.php"><img src="../img/main/logo1.png" class="logo"></a>
    <div class="login_and_register"><a href="login.php">ログイン/登録</a></div>
</header>
<div class="main">
    <div class="sidebar">
        <ul>
        <li><a href="home.php">ホーム</a></li>
        <li>掲示板</li>
        <li><a href="store.php">ストア</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="question.php">質問チャット</a></li>
        </ul>
    </div>

    <div class="content">
        <form action="<?php print($_SERVER['PHP_SELF']) ?>" method="post">
            <div>
            <label for="name">名前</label>
            <input type="text" id="name" name="name">
            </div>
            <div>
            <label for="message">内容</label>
            <textarea id="message" name="message" style="resize: horizontal; width:500px; height:100px;"></textarea>
            </div>
            <input type="submit" name="send" value="送信する">
        </form>
        <h2>掲示板</h2>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    writeData();
}

readData();

function readData(){
    $board_file = 'board.txt';
    $fp = fopen($board_file,'rb');

    if ($fp){
        if (flock($fp, LOCK_SH)){
            while (!feof($fp)){
                $buffer = fgets($fp);
                print($buffer);  
            }
            flock($fp, LOCK_UN);
        }else{
            print('ファイルロックに失敗しました');
        }
    }
    fclose($fp);
}

    function writeData(){
        $name = $_POST['name'];
        $message = $_POST['message'];
        $message = nl2br($message);
        $icon = '<p><img src="../img/board_pic/board_cat'.rand(0, 15).'.png" class="bcat_pic">';

        $data = "<hr>\r\n";
        $data = $data.$icon.$name." | ".date("Y年m月d日 H:i", time())."</p>\r\n";
        $data = $data."<p>".$message."</p>\r\n";
        
        $board_file = 'board.txt';
        $fp = fopen($board_file,'ab');

        if ($fp){
            if(flock($fp,LOCK_EX)){
                if (fwrite($fp,  $data) === FALSE){
                    print('ファイル書き込みに失敗しました');
                }   

                flock($fp, LOCK_UN);
            }else{
                print('ファイルロックに失敗しました');
            }
        }
        fclose($fp);
    }

?>

    </div>
</div>
    <footer>
    <small>badcat@example.com</small>
    </footer>
</body>
</html>
