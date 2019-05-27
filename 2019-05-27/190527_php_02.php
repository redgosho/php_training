<?php
$j = new Timezone("Japan Standard Time", 9, array("東京","大阪","福岡"));
$e = new Timezone("Eastern Daylight Time", -4, array("NewYork","Washington,D.C.","Atlanta","Miami"));

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

    public function __construct ($tzname, $utcdiff, $cities) {
        $this->tzname = $tzname;
        $this->utcdiff = $utcdiff;
        foreach ($cities as $city) {
            $this->cities[] = $city;
        }
    }
}

