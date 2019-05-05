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
        <p><a href="../index.php#slide3">地域選択に戻る</a></p>
    </div>
</body>
</html>

<?php
function main () {
    $text = "";
    $jisa = array(
        "東京" => 9,
        "ドバイ" => 4,
        "ロンドン(夏時間)" => 1,
        "ニューヨーク(夏時間)" => -4,
        "ホノルル" => -10
    );
    //数値がプラスだったとき、文字列として+を追加する。
    foreach ($jisa as $key => $value) {
        if ($value >= 0) {
            $value = "+{$value}";
        }
    }
    if(empty($_POST['place'])){
        return "選択してください。";
    }else{
        $place = $_POST['place'];
        $hour = gmdate("G");
        $minits = gmdate("d");
        foreach ($place as $value) {
            $hour_p = $hour + $jisa[$value];//現在時刻＋UTC時差
            $hour_dif = $hour_p - $hour;//時刻差検出
            if($hour_p<0){//前日のときの処理
                $hour_p = 24 + $hour_p;
                $minits = $minits."分(前日)";
            }
            $hour_p = $hour_p."時";
            if ($jisa[$value]>=0) {//時差＋のときに記号つける処理}
                $jisa_num = "+{$jisa[$value]}";
            }else{
                $jisa_num = $jisa[$value];
            }
            $time = $hour_p.$minits;
            echo "{$value}はUTC{$jisa_num}で、現在{$time}です。<br>";//DOM出力
        }
    }
}
?>

