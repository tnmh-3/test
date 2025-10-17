<!DOCTYPE html>
<html lang = "ja">

<head>
    <meta charset="UTF-8">
    
    <title>お問い合わせフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="contactform2.css">
</head>

<body>
    <h1>お問い合わせ内容確認</h1>
    
    <div class="confirm">
        <p>お問い合わせ内容はこちらで宜しいでしょうか？
        　　<br>よろしければ「送信する」ボタンを押してください。
        </p>
    
        <p>名前
        　　<br>
        　　<?php echo $_POST['name'];?>
        </p>
    
        <p>メールアドレス
        　　<br>
            <?php echo $_POST['mail'];?>
        </p>
        
        <p>年齢
        　　<br>
            <?php echo $_POST['age']."歳";?>
        </p>
        
        <p>コメント
        　　<br>
            <?php echo $_POST['comments'];?>
        </p>
        
        <form action="contactform.php" method="post">
            <input type="submit" class="button1" value="戻って修正する">
            <input type="hidden" name="name" value="<?php echo $_POST['name']??'';?>">
            <input type="hidden" name="mail" value="<?php echo $_POST['mail']??'';?>">
            <input type="hidden" name="age" value="<?php echo $_POST['age']??'';?>">
            <input type="hidden" name="comments" value="<?php echo $_POST['comments']??'';?>">
        </form>
        
        <form action="insert.php" method="post">
          <input type="submit" class="button2" value="登録する">
          <input type="hidden" value="<?php echo $_POST['name'];?>" name="name">
          <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
          <input type="hidden" value="<?php echo $_POST['age'];?>" name="age">
          <input type="hidden" value="<?php echo $_POST['comments'];?>" name="comments">
        </form>
    </div>
    </body>
</html>