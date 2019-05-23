<?php
    $pdo = new PDO ( 'mysql:host=localhost;dbname=testdb;charset=utf8', 'root', '' );
    $post = $_POST["printer"]
    $sql = "select * from phptest6_1 where rintenki = {$post};";
    $machine=  $pdo->query ($sql);
    echo $machine['time'];
        $texttext= <<< ARTICLE
        <p>＜部数表示システム＞</p>
        <p>{$machine ['title']}{$machine ['title']}{$machine ['title']}</p>
        <a href='./main.php'>もどる</a>"
ARTICLE;
                    echo $texttext;
            ?>