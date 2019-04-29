<?php
	for ($i=1;$i<101;$i++) {
		$num = $i;
		$ans = $num % 3;
		if ($ans == 0) {
			echo "{$num}は、3の倍数です！";
		}else{
			echo "{$num}は、3の倍数ではありません。";
		}
		echo "\n";
	}
?>