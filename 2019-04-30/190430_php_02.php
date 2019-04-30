<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>世界時計</h1>
    <div>
        <form method="post" action="./190430_php_02_result.php">
            <p>時刻を表示させたい都市名を詮索してください。</p>
            <p>
                <input type="checkbox" name="place[]" value="東京">東京
                <input type="checkbox" name="place[]" value="ドバイ">ドバイ
                <input type="checkbox" name="place[]" value="ロンドン(夏時間)">ロンドン
                <input type="checkbox" name="place[]" value="ニューヨーク(夏時間)">ニューヨーク
                <input type="checkbox" name="place[]" value="ホノルル">ホノルル
            </p>
            <p>
                <input type="submit" value="選択">
            </p>
        </form>
    </div>
</body>
</html>