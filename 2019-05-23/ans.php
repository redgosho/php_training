<?php
                $pdo = new PDO ( 'mysql:host=localhost;dbname=testdb;charset=utf8', 'root', '' );
                $sql = "select * from phptest6_1 where rintenki = '{$_POST["printer"]}';";
                echo $sql;
                $machine=  $pdo->query ($sql);
                echo $machine['time'];
                    $texttext= <<< ARTICLE
                    <p>＜部数表示システム＞</p>
                    {$machine}
                    <a href='./main.php'>もどる</a>"
ARTICLE;
                    echo $texttext;
            ?>