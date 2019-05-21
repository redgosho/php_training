<?php
$j = new Timezone();
$j->tzname = "Japan Standard Time";
$j->utcdiff = 9;
$j->cities[] = "東京";
$j->cities[] = "大阪";
$j->cities[] = "福岡";

$e = new Timezone();
$e->tzname = "Eastern Daylight Time";
$e->utcdiff = -4;
$e->cities[] = "NewYork";
$e->cities[] = "Washington,D.C.";
$e->cities[] = "Atlanta";
$e->cities[] = "Miami";

$j->dispZoneInfo();
$e->dispZoneInfo();

class Timezone
{
    public $tzname;
    public $utcdiff;
    public $cities = array();

    public function dispZoneInfo () {
        if ($this->utcdiff > 0) {
            $this->utcdiff = "+".$this->utcdiff;
        }
        echo "時間帯の名前：".$this->tzname."\n<br>";
        echo "協定世界時との時差：UTC".$this->utcdiff."\n<br>";
        echo "この時間帯に含まれる都市名：";
        foreach ($this->cities as $city) {
            echo $city."/";
        }
        echo "\n<br>----------------------\n<br>";
    }
}
