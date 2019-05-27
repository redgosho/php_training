<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./main.css">
    <title>main</title>
</head>
<body>
    <main id="root">
        <div class="page_bg"></div>
        <div class="page_deco"></div>
        <div class="page_frame"></div>
        <div class="page_inner">
            <div class="title" id="top">
                <h2>★たのしいサイト★</h2>
            </div>
            <?php
                $pdo = new PDO ( 'mysql:host=localhost;dbname=mock;charset=utf8', 'root', '' );
                $sql = 'select * from toppage ORDER BY id DESC';
                foreach ( $pdo->query ($sql) as $article ) {
                    $texttext= <<< ARTICLE
                    <div class="articleCard">
                        <div class="card_title">
                            <h2>{$article ['title']}</h2>
                            <p>{$article ['date']}</p>
                        </div>
                        <div class="card_text">
                            <p>{$article ['article']}</p>
                        </div>
                    </div>
ARTICLE;
                    echo $texttext;
                }
            ?>
            <div class="word">
                <a href="#top">トップにもどる！</a>
            </div>
        </div>
        <div class="page_modal">
            <div class="border">
            <form action="./registar.php" method="post">
                <input class="input_text" name="data[]" type="text" placeholder="タイトルはここ">
                <textarea class="input_article" name="data[]" cols="30" rows="8" placeholder="ここになにをかけばいいかわからないって？そんなことないはずだ。キミならかけるよ！がんばって！"></textarea>
                <input class="submit" type = "submit" value ="送信">
            </form>
            </div>
        </div>
    </main>
</body>
</html>