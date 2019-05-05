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
        <p><a href="./190430_php_04.php">検索ページに戻る</a></p>
    </div>
</body>
</html>

<?php
    function main () {
        //県コードの連想配列生成
        $kenDataAll = array();
        $kenData = file_get_contents("./jinkou.csv");
        $kenDataExplode = explode("\n", $kenData);
        for ($i=0; $i<=46; $i++){
            $ken_explode = explode(",",$kenDataExplode[$i]);
            // $ken_explode[2] = number_format($ken_explode[2]);
            $kenDataAll += array(
                $ken_explode[0] => array('県名' => $ken_explode[1], '人口' => $ken_explode[2])
            );
        }
        //検索処理
        $kenCode = $_POST['kenCode'];
        foreach ($kenCode as $value) {
            if (array_key_exists($value, $kenDataAll)) {
                echo "県コード{$value}は「{$kenDataAll[$value]['県名']}」です。人口は{$kenDataAll[$value]['人口']}人です。<br>";
            }else{
                echo "その県コード{$value}は登録されてないよ。<br>";
            }
        }
    }
?>

