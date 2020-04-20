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

if (isset($_POST['es'])) {
    $es = $_POST['es'];
    echo 'あなたは'.'<strong>'.$es.'</strong>'.'を選びました。'.'<br>';
}else {
    echo 'おい、君！選んでないぞ！<br>';
}
?>
<h2>そんな君に向けて作成者からのオススメのYoutuber</h2>

<?php

if ($es == '笑いたい') {
     echo "<h3>東海オンエア</h3>";
    echo "<img src='https://cdn.logtube.jp/wp-content/uploads/2019/02/%E6%9D%B1%E6%B5%B7%E3%82%AA%E3%83%B3%E3%82%A8%E3%82%A2%E3%82%A2%E3%82%A4%E3%82%AD%E3%83%A3%E3%83%83%E3%83%81%EF%BC%92.png' width='500px' height='300px'><br>";
   echo "まあ実は作成者は見ていないのだが、、、みんながこれ見てたらお腹壊したって言ってました。";
   echo "<a href='https://www.youtube.com/channel/UCutJqz56653xV2wwSvut_hQ'>東海オンエアを見てみる</a><br>";
} elseif($es == '笑いたい（英語）'){
     echo "<h3>Kristen Hanby</h3>";
    echo "<img src='https://youtubermania.site/wp-content/uploads/2019/08/bdc5c6ed377f50aaddf2527e977d11bf.png' width='500px' height='300px'><br>";
   echo "作成者がいま一番はまっているYoutuber。日本でやったら大問題になるような事を平気でやる反面、家族おもしなところに心を打たれた。";
   echo "<a href='https://www.youtube.com/user/Kristen8393'>Kristen Hanbyを見てみる</a><br>";
} elseif ($es == '勉強したい'){
      echo "<h3>中田敦彦のYouTube大学</h3>";
    echo "<img src='https://geino.matomemato.me/imgs/2019/09/20190905041032.jpg' width='500px' height='300px'><br>";
   echo "信憑性の薄さが一時期問題になったけど、これ見ているだけで勉強にはなるでしょ？っていうチャンネル";
   echo "<a href='https://www.youtube.com/channel/UCFo4kqllbcQ4nV83WCyraiw'>中田敦彦のYouTube大学を見てみる</a><br>";
} else {
    echo "<h3>【公式】「ファンタズミック！」スペシャル動画 | 東京ディズニーシー/Tokyo DisneySea</h3>";
    echo "<img src='https://i.ytimg.com/vi/Xn6O9pzcnjs/maxresdefault.jpg' width='500px' height='300px'><br>";
   echo "ディズニーを思い出そう。";
   echo "<a href='https://www.youtube.com/watch?v=qkWBeyJD7GA&feature=emb_title'>ファンタズミック！を見てみる</a><br>";
}
?>
<br>
<br>
<a href="/" class="article-btn">戻る</a>
    </body>
</html>



