<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
      <link rel="stylesheet" type="text/css" href="style.css">
      <title>4each掲示板</title>
  </head>
  <img src="4eachblog_logo.jpg" class="top_logo">
   
  
    <body>
    <?php 
    mb_internal_encoding("utf8");
    $pdo=new PDO("mysql:dbname=lesson02;host=localhost;","root","");
    $stmt=$pdo->query("select*from 4each_keijiban");
    ?>
        <header>
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </header>
        <main>
            <div class="maincontainer">
                
                <div class="left">
                    <h1>プログラミングに役立つ掲示板</h1>
                    <div class="form">
                    <h2 class="title">入力フォーム</h2>
                    <form method="post" action="insert.php">
                        <div>ハンドルネーム<br>
                        <input type="text" name="handlename" class="text">
                        </div>

                        <div>
                        <br>タイトル<br>
                        <input type="text" name="title" class="text">
                        </div>

                        <div>
                        <br>コメント<br>
                        <textarea name="comments"></textarea>
                        </div>

                        <div>
                        <br>
                        <input type="submit" value="送信する" class="submit">
                        </div>
                    </form>
                    </div>                    
                    
                    
                    
                    
                    <?php
                    while ($row=$stmt->fetch()) {
                        echo "<div class='comment'>";
                        echo "<h2>".$row['title']."</h2>";
                        echo '<div class="content">';
                        echo $row['comments'];
                        echo '</div>';
                        echo "<div>posted by".$row['handlename']."</div>";
                        echo "</div>";
                    }
                    ?>
                       
                    

        
                </div>
                
                
                
                
                <div class="right">
                    <h2>人気の記事</h2><ul>
                         <li>PHPオススメ本</li>
                         <li>PHP MyAdminの使い方</li>
                         <li>今人気のエディタtop5</li>
                         <li>HTMLの基礎</li>
                    　</ul>
                    <h2>オススメリンク</h2>
                        <ul>
                            <li>インターノウス株式会社</li><li>XAMPPのダウンロード</li><li>Eclipseのダウンロード</li><li>Bracketのダウンロード</li>
                        </ul>
                    <h2>カテゴリ</h2>
                        <ul>
                            <li>HTML</li>
                            <li>PHP</li>
                            <li>MySQL</li>
                            <li>Javascript</li>
                       </ul>
                </div>
                
                
                
            </div>
        </main>
        
            
    </body>
    <footer>
            copyright©internous|4each blog
            the which provides A to Z about programming
        </footer>

    