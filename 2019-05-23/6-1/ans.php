<?php
    $pdo = new PDO ( 'mysql:host=localhost;dbname=testdb;charset=utf8', 'kenshu', 'pass21' );
    $post_text = $_POST['printer'];
    $sql = "select * from phptest6_1 where rintenki = '{$post_text}';";
    foreach ( $pdo->query ($sql) as $machine ) {
        $machine ['busuu'] = number_format($machine ['busuu']);
        $machine ['time'] = substr( $machine ['time'] , 0 , strlen($machine ['time'])-3 );
        $texttext= <<< ARTICLE
        <p>＜部数表示システム＞</p>
        <p>{$machine ['time']}時点での{$machine ['rintenki']}の印刷済み部数は{$machine ['busuu']}部です。</p>
        <a href='./main.php'>もどる</a>
ARTICLE;
                    echo $texttext;
    }
            ?>