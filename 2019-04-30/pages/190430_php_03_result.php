<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <p><?=main(); ?></p>
        <p><a href="./190430_php_03.php">検索ページに戻る</a></p>
    </div>
</body>
</html>

<?php
    function main () {
        $kenCode = $_POST['kenCode'];
        $kenDataAll = array();
        $kenData = file_get_contents("../src/jinkou.csv");
        $kenDataExplode = explode("\n", $kenData);
        for ($i=0; $i<=46; $i++){
            $ken_explode = explode(",",$kenDataExplode[$i]);
            // $ken_explode[2] = number_format($ken_explode[2]);
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

