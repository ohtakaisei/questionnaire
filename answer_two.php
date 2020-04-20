<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="peter.css" rel="stylesheet">
    <title>診断結果</title>
    </head>
    
    <body>
        <h2>あなたが選んだもの</h2>
        <?

if (isset($_POST['ds'])) {
    $ds = $_POST['ds'];
    echo 'あなたは'.'<strong>'.$ds.'</strong>'.'を選びました。'.'<br>';
}else {
    echo 'おい、君！選んでないぞ！<br>';
}
?>
<h2>そんな君に向けて作成者からのオススメの映画</h2>

<?php

if ($ds == 'ばか') {
     echo"<h3>ミスタービーン</h3>";
    echo "<img src='https://grapee.jp/wp-content/uploads/48730_main.jpg' width='500px' height='300px'><br>";
   echo "あなたに似た人の映画です。";
} elseif($ds == '天才'){
     echo "<h3>ソーシャルネットワーク</h3>";
    echo "<img src='https://iwiz-movies.c.yimg.jp/im_siggT6TnK6d9ktzNdyTAULyX8w---x680/c/movies/pict/p/p/09/dd/153603_01.jpg' width='500px' height='600px'><br>";
   echo "Facebookの創業者の物語。あなたも将来なれるといいですね";
} elseif ($ds == '変わり者'){
     echo "<h3>イエスマン</h3>";
     echo "<img src='https://images-na.ssl-images-amazon.com/images/I/81Qhxg8sQHL._AC_SL1500_.jpg' width='500px' height='600px'><br>";
    echo "人生が変わります。";
} else {
    echo "<h3>きっと、うまくいく</h3>";
     echo "<img src='https://iwiz-movies.c.yimg.jp/im_siggEuXmTS1RFpA47wo51lXaeg---x680/c/movies/pict/p/p/49/e6/161810_01.jpg' width='500px' height='600px'><br>";
    echo "とりあえず、これを見ておけ。間違いない。";
}
?>
<br>
<br>
<a href="/" class="article-btn">戻る</a>
    </body>
</html>



