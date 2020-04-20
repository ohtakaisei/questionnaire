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

if (isset($_POST['fs'])) {
    $fs = $_POST['fs'];
    echo 'あなたは'.'<strong>'.$fs.'</strong>'.'を選びました。'.'<br>';
}else {
    echo 'おい、君！選んでないぞ！<br>';
}
?>
<h2>あなたの性格を当てます。</h2>

<?php

if ($fs == '赤') {
     echo "<h3>リーダーシップタイプ</h3>";
    echo "<img src='https://cdn.pixabay.com/photo/2017/08/06/09/50/guy-2590792_1280.jpg' width='500px' height='300px'><br>";
   echo "おそらくあなたは、<span class='marker1'><strong>周りの人を率先して動かす事の出来るリーダーシップをよく発揮するタイプ</span></strong>でしょう。<br>
   「俺についてこい！」とばかりにみんなの事を引っ張ってくれるでしょう。<br>
   <br>
   ただ、たまに強引に人を動かそうとしてしまうかもしれません…。<br>
   <br>
   そんな時は相手も気持ちも考えてみると、なお良いかもしれませんよ！";
} elseif($fs == '白'){
     echo "<h3>人気者タイプ</h3>";
    echo "<img src='https://cdn.pixabay.com/photo/2018/01/12/10/19/fantasy-3077928_1280.jpg' width='500px' height='600px'><br>";
   echo "おそらくあなたは、<span class='marker1'><strong>沢山の人から好かれるタイプ</strong></span>でしょう。<br>
   とても爽やかな人で、どんな人にでも好印象をもたれる事が多いと思います。<br>
   <br>
   ただ、たまに<span class='marker1'><strong>人に流されやすい可能性がある</strong></span>ので注意が必要です。";
} elseif ($fs == '青'){
     echo "<h3>冷静タイプ</h3>";
     echo "<img src='https://cdn.pixabay.com/photo/2017/09/01/21/53/blue-2705642_1280.jpg' width='500px' height='600px'><br>";
    echo "青を選んだあなたは,<span class='marker1'><strong>何が起きても冷静に判断出来、決して慌てない冷静タイプ</strong></span><br>
    常に冷静に戦略を練れるので、将来的にお金持ちになる確率が一番高いかもしれません。<br>
    <br>
    ただ、冷静すぎるが故に周りが引いてしまうこともあるかもしれません…。時には冷静さをなくす場面も大事かもしれませんよ！";
} else {
    echo "<h3>話し上手タイプ</h3>";
     echo "<img src='https://cdn.pixabay.com/photo/2017/12/30/13/26/fog-3050078_1280.jpg' width='500px' height='600px'><br>";
    echo "あなたはズバリ<span class='marker1'><strong>話がとても上手なのではないでしょうか？</strong></span><br>
    もし、「そんなことない！」と思った人もよく思い出してみてください。<br>
    誰かと喋る時に意外にも長くお話が続くことはありませんか？<br>
    実は知らぬ間に能力を発揮していたりします。
    <br>
    <br>
    ただ、ついつい喋りすぎてしまう事が多くなってしまうかもしれないので注意が必要です！";
}
?>
<br>
<br>
<a href="/" class="article-btn">戻る</a>
    </body>
</html>



