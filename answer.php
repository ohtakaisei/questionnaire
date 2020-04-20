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

if (isset($_POST['cs'])) {
    $cs = $_POST['cs'];
    echo 'あなたは'.'<strong>'.$cs.'</strong>'.'を選びました。'.'<br>';
}else {
    echo 'おい、君！選んでないぞ！<br>';
}
?>
<h2>そんな君に向けて作成者からのありがたい一言</h2>

<?php

if ($cs == 'くそ暇です') {
    echo"<h3>暇があるなら勉強！（僕はしないよ）</h3>";
    echo "<img src='https://lh3.googleusercontent.com/proxy/HidoQ6SKWO3DQAUETfgFFKuc_bfMGRi9ZX_VfxfEle3twvCnvBOOwnFyU0u8l1ZPCK_ATp0YVtR-b8XiUTkmZpGvGLANPO0NA7gjvo8ZTisoxMZ6gg' width='300px' height='300px'><br>";
    echo "「すぐに勉強に取りかかれ」";
} elseif($cs == '暇です'){
     echo"<h3>どうせスイッチ持ってるんだろ？（貸してくださいよ）</h3>";
    echo "<img src='https://www.nintendo.co.jp/3ds/egdj/sp/images/mainvisual.jpg' width='300px' height='300px'><br>";
    echo "「おいでよどうぶつの森やりましょう」";
} elseif ($cs == '意外にも大丈夫'){
     echo"<h3>そんな君は将来有望</h3>";
     echo "<img src='https://livedoor.blogimg.jp/goldennews/imgs/3/8/387ed9a1-s.jpg' width='300px' height='300px'><br>";
    echo "「やるやん」";
} else {
     echo"<h3>尊敬します。</h3>";
     echo "<img src='https://assets.st-note.com/production/uploads/images/9784679/rectangle_large_type_2_fddd2a4bf44ac52c04e360894275aa29.png?fit=bounds&format=jpeg&quality=45&width=960' width='300px' height='300px'><br>";
    echo "「君はできる奴だ！」";
}
?>
<br>
<br>
<a href="/" class="article-btn">戻る</a>
    </body>
</html>



