<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>diworksblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="keijiban.css">
</head>

    <body>
        <div class="box1">
            <img src="images/diblog_logo.jpg" alt="D.I.Blogのロゴ">
        </div>
    
    <header>
        <ul class="logo">
        <li>トップ</li>
        <li>プロフィール</li>
        <li>D.I.Blogについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
        </ul>
    </header>
    
    <main>
        <div class="main-container">
        <div class="left">
            
            <h1>プログラミングに役立つ掲示板</h1>
            
            <div class="form">
            <h2>入力フォーム</h2>
            <form method="post" action="keijiban_insert.php">
            
            <div>
                <label>ハンドルネーム</label><br>
                <input type="text" class="text" size="35" name="handlename">
            </div>
            
            <div>
                <label>タイトル</label><br>
                <input type="text" class="text" size="35" name="title">
            </div>
            
            <div>
                <label>コメント</label><br>
                <textarea cols="70" rows="7" name="comments"></textarea>
            </div>
            
            <div>
                <input type="submit" class="submit" value="投稿する">
            </div>
            </form>
            </div>
            
            <?php
            mb_internal_encoding("utf8");
            $pdo=new PDO("mysql:dbname=lesson01;host=localhost;","root","");
            $stmt=$pdo->query("SELECT * FROM diworks_keijiban");
            ?>
            
            <?php
            while($row=$stmt->fetch()){
                echo"<div class='kiji'>";
                echo"<h3>".$row['title']."</h3>";
                echo"<div class='contents'>";
                echo $row['comments'];
                echo"<div class='handlename'>posted by".$row['handlename']."</div>";
                echo"</div>";
                echo"</div>";
            }
            ?>
            
            </div>
        </div>
                
        <div class="right">
            
            <h2>人気の記事</h2>
            <ul>
                <li>PHPオススメ本</li>
                <li>PHP MyAdminの使い方</li>
                <li>いま人気のエディタTop5</li>
                <li>HTMLの基礎</li>
            </ul>
            
            <h2>オススメリンク</h2>
            <ul>
                <li>ディーアイワークス株式会社</li>
                <li>XAMPPのインストール</li>
                <li>Eclipseのダウンロード</li>
                <li>Braketsのダウンロード</li>
            </ul>
            
            <h2>カテゴリ</h2>
            <ul>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ul>
        </div>
            
    </main>
        
        <footer>
            Conpyright D.I.works|D.I.blog is the one which provides A to Z about programming
        </footer>
        
        </body>
</html>
    