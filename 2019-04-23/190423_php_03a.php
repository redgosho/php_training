<?php
main();

function main () {
    $jisa = array(
        "日本時間" => 9,
        "ドバイ時間" => 4,
        "ロンドン夏時間" => 1,
        "ニューヨーク夏時間" => -4);
    $i = 0;
    $time_text = array();
    $f = "ドバイ時間";
    $t = "ニューヨーク夏時間";
    $check = exiCheck($jisa, $f, $t);
        
    if($check == 1){
        $time_diff = $jisa[$f] - $jisa[$t];
        echoJisa($time_diff, $t, $f);
    }elseif ($check == 2) {
        $jisa = $jisa + array($t => -10);
        $time_diff = $jisa[$f] - $jisa[$t];
        echoJisa($time_diff, $t, $f);
    }
}

function exiCheck ($jisa, $f, $t) {
    $check_f = 0;
    $check_t = 0;    
    foreach ($jisa as $key => $value) {
        if ($key == $f) {
            $check_f++;
        }
        if ($key == $t) {
            $check_t++;
        }
    }
    if ($check_f == 0){
        echo "{$f}は登録されていません。\n";
        return 0;
    }
    if ($check_t == 0){
        echo "{$t}は登録されていません。\n";
        if ($t == "ホノルル時間") {
            echo "{$t}のデータを追加しました。{$t}時間はUTC{$jisa[$t]}です。\n\n";
            return  2;
        }
        return 0;
    }
    return 1;
}

function echoJisa ($time_diff, $t, $f) {
    if ($time_diff > 0) {
        $time_diff_text = "進んでいます。";
    }elseif ($time_diff < 0) {
        $time_diff_text = "遅れています.。";
    }else{
        $time_diff = "進んでも遅れてもいません。";
    }
    echo "{$f}は{$t}より{$time_diff}時間{$time_diff_text}\n";
}
?>