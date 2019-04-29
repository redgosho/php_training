<?php
    main();
    function main () {
        $flag = 0;
        $kencode = 33;
        $japanData = file_get_contents("/mnt/fuelphp/jinkou.csv");
        $japanData_explode = explode("\n", $japanData);
        for ($i=0; $i<=46; $i++){
            $ken_explode = explode(",",$japanData_explode[$i]);
            $ken_explode[2] = number_format($ken_explode[2]);
            echo "県コード：{$ken_explode[0]}　件名：{$ken_explode[1]}　人口：{$ken_explode[2]}人\n";
        }
    }
?>