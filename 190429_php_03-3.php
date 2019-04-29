<?php
    main();
    function main () {
        $kenmei = "北海道";
        $flag = 0;
        $japanData_array = array();
        $japanData = file_get_contents("/mnt/fuelphp/jinkou.csv");
        $japanData_explode = explode("\n", $japanData);
        for ($i=0; $i<=46; $i++){
            $ken_explode = explode(",",$japanData_explode[$i]);
            $japanData_array[$ken_explode[1]] = $ken_explode[0].",".$ken_explode[2];
        }
        foreach ($japanData_array as $key => $value) {
            if ($key == $kenmei) {
                $flag = 1;
                $value = explode(",",$value);
                $value[1] = number_format($value[1]);
                echo "「{$key}」(都道府県コード{$value[0]})の人口は{$value[1]}人です。";
            }
        }
        if($flag!=1){
            echo "その県コードはないよ！:D";
        }
    }
?>