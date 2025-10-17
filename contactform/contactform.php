<?php
header("Content-Type: text/html; charset=UTF-8");
mb_internal_encoding("UTF-8");
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>問い合わせフォーム</title>
    <link rel = "stylesheet" type = "text/css" href = "contactform.css">
</head>
    
    <body>
        
        <h1>お問い合わせフォーム</h1>
        
        <form method = "post" action= "mail_confirm.php">
        
        <div>
            <label>名前</label><br>
            <input type = "text"  class = "text" size = "35" name = "name" value="<?php echo $_POST['name']??'';?>">
        </div>
        
        <div>
            <label>メールアドレス</label><br>
            <input type = "text"  class = "text" size = "35" name = "mail" value="<?php echo $_POST['mail']??'';?>">
        </div>
        
        <div>
            <label>年齢</label><br>
            <select class = "dropdown" name ="age">
            <option>選択してください</option>
           <?php
                for ($i = 18; $i <= 65; $i++){
                    $selected = (isset($_POST['age']) && $_POST['age'] == $i)?'selected':"";
                    echo"<option value = '{$i}'{$selected}>{$i} 歳</option>";
                }
            ?>
            </select>
        </div>
        
        <div>
            <label>コメント</label><br>
            <textarea cols = "35" rows ="7" name ="comments"><?php echo trim($_POST['comments']??'');?></textarea>
        </div>
        
        <div>
            <input type = "submit" class = "submit" value = "送信する">
        </div>
            
        </form>
        
    </body>
</html>