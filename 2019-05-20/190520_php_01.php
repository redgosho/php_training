<?php
class OffsetPress
{
  public $speed;      //この輪転機の速度（1時間あたりの印刷部数）
  public $startTime; //この輪転機の印刷開始時刻
  public function insatu_busuu($nTime){
     $diff = (strtotime($nTime) - strtotime($this->startTime))/3600;
     return $diff > 0 ? floor($diff * $this->speed) : 0;
  }
}
//各輪転機オブジェクトを作る
$f[10] = new OffsetPress();
$f[20] = new OffsetPress();
$f[30] = new OffsetPress();
$f[40] = new OffsetPress();

//各輪転機の速度をセット
$f[10]->speed = 100000;
$f[20]->speed = 100000;
$f[30]->speed = 80000;
$f[40]->speed = 80000;

//各輪転機の開始時刻をセット
$f[10]->startTime = "10:00";
$f[20]->startTime = "10:15";
$f[30]->startTime = "10:05";
$f[40]->startTime = "10:00";

$now_time = "11:30";  //現在時刻や指定時刻の想定。

echo "現在時刻は{$now_time}です。<br>\n";
for($s=10;$s<=40;$s+=10){
  echo "F".$s."の印刷開始時刻は" .$f[$s]->startTime."で、";
  echo "現在の印刷部数は" .$f[$s]->insatu_busuu($now_time). "部です。<br>\n";
}
