<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="main.css">
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
                foreach ( $pdo->query ( 'select * from toppage' ) as $article ) {
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
            <form action="./main.php" method="post">
                <input type="text">
                <textarea name="article" cols="30" rows="8"></textarea>
                <input type = "submit" value ="送信">
            </form>
        </div>
    </main>
</body>
</html>