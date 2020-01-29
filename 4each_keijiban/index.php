<!doctype html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
	mb_internal_encoding("utf8");
	$pdo = new PDO("mysql:dbname=lesson01-tomiyama;host=localhost;","root","mysql");
	
	$stmt = $pdo ->query("select * from 4each_keijiban");
	
?>
	<img src="4eachblog_logo.jpg" class="logo">
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
		<div class="main-container">
			<div class="primary">
			<div class="left">
					<h1>プログラミングに役立つ掲示板</h1>
					<form action="insert.php" method="post">
					<p class="inputform">入力フォーム</p>
					ハンドルネーム<br>
					<input type="text" class="text" size=35 name="handlename">
					<br><br>
					タイトル<br>
					<input type="text" class="text" size=35 name="title">
					<br><br>
					コメント<br>
					<textarea class="text" size=35 cols="30" rows="5" name="comments"></textarea>
					<br><br>
					<input type="submit" class="submit" value="送信する">
					</form>
				<?php		
					while ($row = $stmt->fetch()) {
						echo "<div class='article'>";
						echo "<h3>".$row['title']."</h3>";
						echo "<div class='contents'>";
						echo $row['comments'];
						echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
						echo "</div>";
						echo "</div>";
					}
				?>
			</div>
			<div class="right">
				<h2>人気の記事</h2>
				<ul>
					<li>PHPオススメ本</li>
					<li>PHP MyAdminの使い方</li>
					<li>今人気のエディタ Top5</li>
					<li>HTMLの基礎</li>
				</ul>
				<h2>オススメリンク</h2>
				<ul>
					<li>インターノウス株式会社</li>
					<li>XAMPPのダウンロード</li>
					<li>Eclipseのダウンロード</li>
					<li>Bracketsのダウンロード</li>
				</ul>
				<h2>カテゴリ</h2>
				<ul>
					<li>HTML</li>
					<li>PHP</li>
					<li>MySQL</li>
					<li>JavaScript</li>
				</ul>
			</div>
			</div>
		</div>
	</main>
	
	<footer>copyright © internous │ 4each blog the which provides A to Z about programming.</footer>
</body>
<html>
	
