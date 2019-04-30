<?php
	$jisa = array("日本時間" => 9,
				  "ドバイ時間" => 4,
				  "ロンドン夏時間" => 1,
				  "ニューヨーク夏時間" => -4);

	$i = 0;
	$time_text = array();
	$check_t = 0;
	$check_f = 0;
	// $time_diff = 0; 
	// $time_diff_text = 0;

	$f = "ドバイ時間";
	$t = "ニューヨーク夏時間";

	//$tの存在チェック
	foreach ($jisa as $key => $value) {
		if ($key == $f) {
			$check_f++;
		}
		if ($key == $t) {
			$check_t++;
		}
	}

	//処理部分
	if ($check_f == 0) {
		echo "{$f}は登録されていません。\n";
	}elseif ($check_t == 0) {
		echo "{$t}は登録されていません。\n";
		if ($t == "ホノルル時間") {
			echo "{$t}のデータを追加しました。{$t}時間はUTC{$jisa[$t]}です。\n\n";
			$jisa = $jisa + array($t => -10);
			jisaHikaku($jisa);
	}else{
		jisaHikaku($jisa);
	}

	function jisaHikaku ($jisa) {
		$time_diff = $jisa[$f] - $jisa[$t];
		if ($time_diff > 0) {
			$time_diff_text = "進んでいます。";
		}elseif ($time_diff < 0) {
			$time_diff_text = "遅れています.。";
		}else{
			$time_diff = "進んでも遅れてもいません。";
		}
		foreach ($jisa as $key => $value) {
		//数値がプラスだったとき、文字列として+を追加する。
			if ($value >= 0) {
				$value = "+{$value}";
			}
		}
		echo "{$f}は{$t}より{$time_diff}時間{$time_diff_text}\n";
	}

?>