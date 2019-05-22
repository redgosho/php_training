<meta charset="UTF-8">
<?php
$pdo = new PDO ( 'mysql:host=localhost;dbname=mock;charset=utf8', 'root', '' );
$data = $_POST['data'];
$title = $data[0];
$article = $data[1];
$date = date("Y-m-d");
$pdo->query ( "INSERT INTO toppage VALUES('','{$title}','{$article}','{$date}')" );
echo "\n<a href='./main.php'>もどる</a>";
?>