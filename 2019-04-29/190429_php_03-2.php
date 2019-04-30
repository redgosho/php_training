<?php
    main();
    function main () {
        $kenCode = "221111";
        $kenDataAll = array();
        $kenData = file_get_contents("./jinkou.csv");
        $kenDataExplode = explode("\n", $kenData);
        for ($i=0; $i<=46; $i++){
            $ken_explode = explode(",",$kenDataExplode[$i]);
            $ken_explode[2] = number_format($ken_explode[2]);
            $kenDataAll += array(
                $ken_explode[0] => array('県名' => $ken_explode[1], '人口' => $ken_explode[2])
            );
        }
        if (array_key_exists($kenCode, $kenDataAll)) {
            echo "県コード{$kenCode}は「{$kenDataAll[$kenCode]['県名']}」です。人口は{$kenDataAll[$kenCode]['人口']}人です。";
        }else{
            echo "その県コード登録されてないよ。";
        }
    }
?>