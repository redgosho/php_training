<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Anime Japan</title>
</head>
<body>
<header>
    <h1>Anime Japan</h1>
    <div></div>
    <p class="discription">日本のアニメでおすすめのものを英語で紹介！！</p>
    <div></div>
</header>
<main>
    <?php
    $pdo = new PDO ( 'mysql:host=localhost;dbname=mock;charset=utf8', 'root', '' );
    foreach ( $pdo->query ( 'select * from article' ) as $article ) {
        $texttext= <<< ARTICLE
        <div class="article">
            <div class="index">
                <h2 class='title'>{$article ['title']}</h2>
                <p class="date">{$article ['date']}</p>
            </div>
            <p class="text">{$article ['article']}</p>
        </div>
ARTICLE;
        echo $texttext;
    }
    ?>
</main>
<footer>
    <p class="maked">maked by Gosho</p>
</footer>
</body>
</html>