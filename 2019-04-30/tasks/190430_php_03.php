<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>人口データ検索システム</h1>
    <div>
        <form method="post" action="./190430_php_03_result.php">
            <p>県コード
            <input type="text" id="kenCode" name="kenCode" requiredminlength="4" maxlength="8" size="10" value="22">
            </p>
            <p>
                <input type="submit" value="検索">
            </p>
        </form>
    </div>
</body>
</html>