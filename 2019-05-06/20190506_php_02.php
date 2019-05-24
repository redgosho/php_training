<?php
$jisa = array(
    "JST"=>array( "日本時間", 9),
    "GST"=>array( "ドバイ時間", 4),
    "BST"=>array( "ロンドン夏時間", 1),
    "EDT"=>array( "ニューヨーク夏時間", -4)
);

disptz("JST");
disptz("GST");
disptz("EDT");
addtz("HST", "ホノルル時間", -10);
gaptz("HST", "JST");
addtz("GOD", "神時間", 10000);


function disptz ($timeCode) {//情報プロット
    global $jisa;
    if (checkData($timeCode) == 0) {
        if ($jisa[$timeCode][1]>0){
            $UTC = "+{$jisa[$timeCode][1]}";
        }else{
            $UTC = $jisa[$timeCode][1];
        }
        echo "{$jisa[$timeCode][0]}($timeCode)はUTC{$UTC}です。<br>\n";
    }
}
function addtz ($addTimeCode, $addPlacae, $addPlaceTime) {//追加して情報プロット
    global $jisa;
    $jisa += array($addTimeCode=>array($addPlacae,$addPlaceTime));
    echo "{$addPlacae}({$addTimeCode})のデータを追加しました。<br>\n";
    disptz($addTimeCode);
}
function gaptz ($mainTimeCode, $gapTimeCode) {//時差出してくれる
    global $jisa;
    if (checkData($mainTimeCode) == 0 && checkData($gapTimeCode) == 0) {
        $gap = $jisa[$mainTimeCode][1] - $jisa[$gapTimeCode][1];
        if ($gap>0) {
            $gap = "より{$gap}時間進んでいます。";
        }elseif ($gap == 0) {
            $gap = "と同じ時間です。";
        }else{
            $gap = abs($gap);
            $gap = "より{$gap}時間遅れています。";
        }
        echo "{$jisa[$mainTimeCode][0]}({$mainTimeCode})は{$jisa[$gapTimeCode][0]}({$gapTimeCode}){$gap}<br>\n";
    }
}
function checkData ($timeCode) {//間違いデータ検知機
    global $jisa;
    if (isset($jisa[$timeCode][0]) == False) {
        echo "データ間違ってない？<br>\n";
        return 1;
    }
    return 0;
}
?>