
<?php

// セッションスタート
session_start();

require "funcs.php";
//ログインチェック
loginCheck();

//1.  DB接続します
$pdo = db_conn();



?>

<!-- Head[Start]
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="login.php">ログイン</a></div>
    <div class="navbar-header"><a class="navbar-brand" href="logout.php">ログアウト</a></div>
    </div>
  </nav>
</header> -->
<!-- Head[End] -->


<!-- Head[Start] -->
<!-- <header class="clearfix">
			<div class="title">
				<h1>書籍管理システム</h1>
			</div>
			<div class="search">
				<form action="list.php">
					<p class="keyword">
						<input type="text" name="title" placeholder="検索したい書籍タイトルを入力" value="">
					</p>
					<p class="submit">
						<input type="submit" value="検索">
					</p>
				</form>
			</div>
		</header> -->


<!-- 外部ファイルの読み込み（メニュー） -->

		<!-- <nav id="menu">
			<ul class="clearfix">
				<li class="active"><a href="list.php">書籍一覧</a></li>
				<li><a href="insert.php">書籍登録</a></li>
			</ul>
		</nav> -->


<!-- Head[End] -->

<!-- Main[Start] -->

<!-- <form method="POST" action="insert.php">
  <div>
    <fieldset>
			<legend>書籍管理</legend>
			
			<label for="">ISBN番号：<input type="text" name="isbn"></label><br>
      <label for="">タイトル：<input type="text" name="title"></label><br>
			<label for="">価格：<input type="text" name="price"></label><br>
			 -->

      <!-- <label for="">ID：<input type="text" name="id"></label><br>
      <label for="">ISBN番号：<input type="text" name="isbn"></label><br>
      <label for="">書籍名：<input type="text" name="book_name"></label><br>
      <label for="">著書名：<input type="text" name="author"></label><br>
      <label for="">ジャンル：<input type="text" name="genre"></label><br>
      <label for="">評価：<input type="text" name="evaluation"></label><br>
      <label for="">書籍コメント：<input type="text" name="comment" rows="4" cols="40"></label><br>
      <label for="">読んだ回数：<input type="text" name="number_times"></label><br> -->
      <!-- <input type="submit" value="送信">
    </fieldset>
  </div>
</form> -->
<!-- Main[End] -->




<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<style>div{padding: 10px;font-size:16px;}</style>
	<title>書籍管理システム</title>

</head>
<body>


			<div class="search">
				<form action="logout.php">
					<p class="submit">
							<input type="submit" value="ログアウト">
					</p>
				</form>
			</div>


	<div id="container">
		<header class="clearfix">
			<div class="title">
				<h1>書籍管理システム</h1>
			</div>
			<div class="search">
				<form action="list.php">
					<p class="keyword">
						<input type="text" name="title" placeholder="検索したい書籍タイトルを入力" value="">
					</p>
					<p class="submit">
						<input type="submit" value="検索">
					</p>
				</form>
			</div>
		</header>




		<nav id="menu">
			<ul class="clearfix">
				<li><a href="list.php">書籍一覧</a></li>
				<li class="active"><a href="entry.php">書籍登録</a></li>
			</ul>
		</nav>




		<h2>書籍登録</h2>
		<div id="insert">
			<form action="insert.php" method="post">
				<table>
					<tr>
						<th>ISBN</th>
						<td><input type="text" name="isbn" value=""></td>
					</tr>
					<tr>
						<th>TITLE</th>
						<td><input type="text" name="title" value=""></td>
					</tr>
					<tr>
						<th>著者</th>
						<td><input type="text" name="author" value=""></td>
					</tr>
					<th>ジャンル</th>
						<td>
							<input type="text" name="genre" value="">
							<!-- <select name="genre">
								<option value="">選択してください</option>
								<option value="文学・評論">文学・評論</option>
								<option value="">ノンフィクション</option>
								<option value="">ビジネス・経済</option>
								<option value="">歴史・地理</option>
								<option value="">政治・社会</option>
								<option value="">芸能・エンターテイメント</option>
								<option value="">アート・建築・デザイン</option>
								<option value="">人文・思想・宗教</option>
								<option value="">暮らし・健康・料理</option>
								<option value="">サイエンス・テクノロジー</option>
								<option value="">趣味・実用</option>
								<option value="">教育・自己啓発</option>
								<option value="">スポーツ・アウトドア</option>
								<option value="">時点・年鑑・本・ことば</option>
								<option value="">音楽</option>
								<option value="">旅行・紀行</option>
								<option value="">絵本・児童書</option>
								<option value="">コミックス</option>
							</select> -->
						</td>
					</tr>
					<tr>
						<th>評価</th>
						<td><input type="text" name="evaluation" value=""></td>
					</tr>
					<th>コメント</th>
						<td><input type="text" name="comment" value=""></td>
					</tr>
					<tr>
						<th>回数</th>
						<td><input type="text" name="number_times" value=""></td>
					</tr>

				</table>
				<input type="submit" value="登録" class="button">
			</form>
		</div>






<!-- footer -->
<!-- 外部ファイルの読み込み（メニュー） -->
  <?php 
      include("footer,html")
    ?>


    <footer>
			<p class="copyright">Copyright © all rights reserved.</p>
		</footer>
	</div>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>
</html>