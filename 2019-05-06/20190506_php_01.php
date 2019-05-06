<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP小テスト4-01</title>
</head>
<body>
    <?php main(); ?>
</body>
</html>

<?php
function main () {//メイン
    $tableTop = <<< TABLETOP
    <table border="2" cellspacing="0">
    <tr>
    <th>数値</th>
    <th>3の倍数</th>
    <th>素数</th>
    </tr>
TABLETOP;
    echo $tableTop;

    for ($i=11; $i < 120; $i+=2) { //ぐるーぐるーまわしてーテーブルせいさく！！
        if (checkThree($i)) {
            $checkThree = "o";
        }else{
            $checkThree = "x";
        }
        if (checkPN($i)) {
            $checkPN = "o";
        }else{
            $checkPN = "x";
        }
        $tableTd = <<< TABLE
        <tr>
        <td>{$i}</td>
        <td>{$checkThree}</td>
        <td>{$checkPN}</td>
        </tr>
TABLE;
        echo $tableTd;
    }

    echo "</table>";
}

function checkThree ($num) {//3の倍数かチェック。
    if ($num % 3 == 0) {
        return true;
    }else{
        return false;
    }
}

function checkPN ($num) {//素数かチェック
    if($num < 2) {
        return false;
    } else if ($num == 2) {
        return true;
    }

    if($num % 2 == 0) {//まぁ一応
        return false;
    }

    for ($i = 3; $i * $i <= $num; $i += 2) {//素数チェック。検査数字の二乗以下の数字まで回す
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
?>