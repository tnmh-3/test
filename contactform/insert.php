<?php
header("Content-Type: text/html; charset=UTF-8");
mb_internal_encoding("UTF-8");
?>

$pdo = new PDO(
    "mysql:dbname=lesson01; host=localhost; charset=utf8","root",""
    );

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

$pdo->exec(
    "insert into contactform(name,mail,age,comments)
    values('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."')"
    );

$pdo->exec($sql);
?>

<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="contactform2.css">
</head>

<body>
    <h1>お問い合わせフォーム</h1>
    
    <div class="confirm">
    <p>お問い合わせありがとうございました。<br>
        ３営業以内に担当者よりご連絡差し上げます。
    </p>
    </div>
    
</body>
</html>