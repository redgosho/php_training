<?php
    main();
    function main () {
        $flag = 0;
        $kencode = 3;
        $japanData = file_get_contents("/mnt/fuelphp/jinkou.csv");
        $japanData_explode = explode("\n", $japanData);
        $ken_explode = explode(",",$japanData_explode[$i]);
        // echo "県コード{$ken_explode[$kencode][0]}は「{$ken_explode[$kencode][1]}」です。人口は{$ken_explode[$kencode][2]}人です。";
        for ($i=0; $i<=46; $i++){
            $ken_explode = explode(",",$japanData_explode[$i]);
            // if ($ken_explode[0]==$kencode) {
            //     $ken_explode[2] = number_format($ken_explode[2]);
            //     echo "県コード{$ken_explode[0]}は「{$ken_explode[1]}」です。人口は{$ken_explode[2]}人です。";
            //     $flag = 1;
            // }
        }
        echo "県コード{$ken_explode["$kencode"][0]}は「{$ken_explode["$kencode"][1]}」です。人口は{$ken_explode["$kencode"][2]}人です。";
        if($flag != "1"){
            echo "その県コードはないよ！:D";
        }
    }
?>