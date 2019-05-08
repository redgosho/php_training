<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <p><?=main(); ?></p>
        <p><a href="./190430_php_01.php">地域選択に戻る</a></p>
    </div>
</body>
</html>

<?php
function main () {
    $jisa = array(
        "東京" => 9,
        "ドバイ" => 4,
        "ロンドン(夏時間)" => 1,
        "ニューヨーク(夏時間)" => -4,
        "ホノルル" => -10
    );
    if(empty($_POST['place'])){
        return "選択してください。";
    }else{
        $place = $_POST['place'];
        $time = date("G時d分");
        if ($jisa[$place] >= 0) {
            $value = "+{$jisa[$place]}";
        }
        $text = "{$place}はUTC{$value}で、現在{$time}です。";
        return $text;
    }
}
?>

