<?php
    main();
    function main () {
        $kenmei = "北海道";
        $kenDataAll = array();
        $kenData = file_get_contents("/mnt/fuelphp/jinkou.csv");
        $kenDataExplode = explode("\n", $kenData);
        for ($i=0; $i<=46; $i++){
            $ken_explode = explode(",",$kenDataExplode[$i]);
            $ken_explode[2] = number_format($ken_explode[2]);
            $kenDataAll += array(
                $ken_explode[1] => array('県コード' => $ken_explode[0], '人口' => $ken_explode[2])
            );
        }
        if (array_key_exists($kenmei, $kenDataAll)) {
            echo "「{$kenmei}」（都道府県コード{$kenDataAll[$kenmei]["県コード"]}）の人口は{$kenDataAll[$kenmei]["人口"]}人です。";
        }else{
            echo "その県名登録されてないよ。";
        }
    }
?>