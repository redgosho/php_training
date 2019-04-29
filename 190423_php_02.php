<?php
	$jisa = array("日本時間" => 9,
				  "ドバイ時間" => 4,
				  "ロンドン夏時間" => 1,
				  "ニューヨーク夏時間" => -4);

	$i = 0;
	$time_text = array();
	
	//数値がプラスだったとき、文字列として+を追加する。
	foreach ($jisa as $key => $value) {
		if ($value >= 0) {
			$value = "+{$value}";
		}
		array_push($time_text,"{$key}はUTC{$value}です。");
	}
	echo "$time_text[0]\n";
	echo "$time_text[3]\n";
	echo "$time_text[1]\n";
?>