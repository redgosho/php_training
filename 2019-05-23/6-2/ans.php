<?php
    $timeCode = $_POST['time'];
    $pdo = new PDO ( 'mysql:host=localhost;dbname=testdb;charset=utf8', 'kenshu', 'pass21' );
    $sql = "select * from phptest6_2 where tzshortname = '{$timeCode}';";
    $sql2 = "select * from phptest6_2_2 where tzshortname = '{$timeCode}';";
    foreach ( $pdo->query ($sql) as $time ) {
    $city = '';
    $timeCodeLong = $time['tzname'];
    $UTCDiff = $time['utcdiff'];
    if($UTCDiff>0){
        $UTCDiff = "+".$UTCDiff;
    }
    $nowTime = date("h時m分");
    foreach ( $pdo->query ($sql2) as $time2 ) {
        $city .= $time2['city']."/"; 
    }
    $city = rtrim($city, '/');
    $texttext= <<< ARTICLE
    <p><世界時計></p>
    <p>時間帯の名前：{$timeCodeLong}({$timeCode})</p>
    <p>協定世界時との時差：UTC{$UTCDiff}</p>
    <p>現在時刻：{$nowTime}</p>
    <p>この時間帯に含まれる都市名：{$city}</p>
    <a href="./main.php">[地域選択に戻る]</a>
ARTICLE;
    echo $texttext;
    }
?>