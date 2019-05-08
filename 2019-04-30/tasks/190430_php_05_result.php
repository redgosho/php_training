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
        <p><a href="./190430_php_05.php">検索ページに戻る</a></p>
    </div>
</body>
</html>

<?php
    function main () {
        //県コードの連想配列生成
        $kenDataAll = array();
        $kenData = file_get_contents("../src/jinkou.csv");
        $kenDataExplode = explode("\n", $kenData);
        for ($i=0; $i<=46; $i++){
            $ken_explode = explode(",",$kenDataExplode[$i]);
            // $ken_explode[2] = number_format($ken_explode[2]);
            $kenDataAll += array(
                $ken_explode[1] => array('県コード' => $ken_explode[0], '人口' => $ken_explode[2])
            );
        }
        //検索処理
        $kenmei = $_POST['kenmei'];
        foreach ($kenmei as $value) {
            $value = mozi_del($value);
            if (array_key_exists($value, $kenDataAll)) {
                echo "「{$value}」（都道府県コード{$kenDataAll[$value]["県コード"]}）の人口は{$kenDataAll[$value]["人口"]}人です。<br>";
            }elseif($value==""){
                echo "未入力欄です。<br>";
            }else{
                echo "その県名「{$value}」は登録されてないよ。<br>";
            }
        }
    }

    function mozi_del ($kenmei) {
        $kenmei = str_replace('県', '', $kenmei);
        $kenmei = str_replace('都', '', $kenmei);
        $kenmei = str_replace('府', '', $kenmei);
        return $kenmei;
    }
?>
