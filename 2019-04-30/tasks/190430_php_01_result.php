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
    date_default_timezone_set('UTC');
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
        $nowTimeH =date("G");
        if($nowTimeH+$jisa[$place]>=0 && $nowTimeH+$jisa[$place]<=24){//時間計算
            $nowTimeH = $nowTimeH+$jisa[$place];
        }elseif($nowTimeH+$jisa[$place]>=24){
            $nowTimeH = $nowTimeH+$jisa[$place]-24;
        }else{
            $nowTimeH = $nowTimeH+$jisa[$place]+24;
        }
        $nowTimeM = date("i");
        $time = $nowTimeH."時".$nowTimeM."分";
        if ($jisa[$place] >= 0) {//+ー処理
            $value = "+{$jisa[$place]}";
        }else{
            $value = "{$jisa[$place]}";
        }
        $text = "{$place}はUTC{$value}で、現在{$time}です。";
        return $text;
    }
}
?>

