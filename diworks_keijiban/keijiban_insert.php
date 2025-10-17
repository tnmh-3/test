<?php
mb_internal_encoding("utf8");

$pdo = new PDO(
    "mysql:dbname=lesson01; host=localhost;","root",""
    );

$handlename = $_POST['handlename'];
$title = $_POST['title'];
$comment = $_POST['comments'];

if(empty($handlename)|| empty($title)|| empty($comment)){
    echo"入力は必須です。<br>"
    echo'<a href = "keijiban.php">戻る</a>';
    exit;
}

$pdo->exec
    ("INSERT INTO diworks_keijiban(handlename,title,comments)
    VALUES('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."')"
    );

header("Location:http://localhost/diworks_keijiban/keijiban.php"
      );

?>