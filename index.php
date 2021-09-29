<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
$stmt = $pdo->query("select * from 4each_keijiban");
?>
    <header>
        <div>
            <img src="4eachblog_logo.jpg">
        </div>
        <ul class="logo">
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>
    <main>
        <div class="main-conteiner">
            <div class="left">
                <h1 class="title">プログラミングに役立つ掲示板</h1>
                <div class="sousin">    
                    <form method="post" action="insert.php">
                        <h3 class="form">入力フォーム</h3>
                        <div>
                            <label>ハンドルネーム</label>
                            <br>
                            <input type="text" class="text" size="35" name="handlename">
                        </div>

                        <div>
                            <label>タイトル</label>
                            <br>
                            <input type="text" class="text" size="35" name="title">
                        </div>

                       
                        <div>
                            <label>コメント</label>
                            <br>
                            <textarea cols="35" rows="7" name="comments"></textarea>
                        </div>

                        <input type="submit" class="submit" value="投稿する">
                    </form>
                </div>
                <?php
                
                while ($row = $stmt->fetch()){
                    echo "<div class='left2'>";
                    echo "<h3 class='subtitle'>".$row['title']."</h3>";
                    echo $row['comments'];
                    echo "<div>posted by".$row['handlename']."</div>";
                    echo "</div>";
                }

                ?>
                
            </div>
            <div class="right">
                <h3>人気の記事</h2>
                <ul>
                    <li>PHPオススメ本</li>
                    <li>PHP MyAdminの使い方</li>
                    <li>いま人気のエディタTop5</li>
                    <li>HTMLのおお基礎</li>
                </ul>
                <h3>オススメリンク</h2>
                <ul>
                    <li>インターノウス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Braketsのダウンロード</li>
                </ul>
                <h3>カテゴリ</h2>
                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>
            </div>
        </div>
    </main>
    <footer>
        copyright internous | 4each blog is the one which provides A to Z about programming.
    </footer>
</body>

</html>