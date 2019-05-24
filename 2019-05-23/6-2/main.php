<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utd-8">
    <title>2019-05-23</title>
</head>
<body>
    <p>＜世界時計＞</p>
    <p>時刻を表示したい都市名を選択してください</p>
    <form method="post" action="./ans.php">
        <input type="radio" name="time" value="JST" checked="checked">東京
        <input type="radio" name="time" value="EDT">ドバイ
        <input type="radio" name="time" value="GST">ロンドン
        <input type="radio" name="time" value="BST">ニューヨーク
        <input type="radio" name="time" value="HST">ホノルル
        <p><input type="submit" value="選択"></p>
    </form>
</body>
</html>