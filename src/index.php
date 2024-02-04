<?php
    //以下の配列にファイル名を追加
    $pages = ['sites/login','phpinfo'];

    echo '<h2>配列にファイルを追加するとリストで表示される</h2>';
    echo '<ul>';
    for ($i=0;$i<count($pages);$i++){
	    echo'<li><a href="'.$pages[$i].'.php">'.$pages[$i].'</a></li>';
    } 
    print '</ul>';
?>
