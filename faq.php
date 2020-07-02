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


			<div class="search">
				<form action="login.php">
					<p class="submit">
							<input type="submit" value="ログイン">
					</p>
				</form>
			</div>
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
				<li><a href="about.php">ブックとは？</a></li>
				<li class="active"><a href="faq.php">Q&A</a></li>
			</ul>
		</nav>

		<nav id="menu">
			<ul class="clearfix">
				<li><a href="list.php">書籍一覧</a></li>
				<li><a href="entry.php">書籍登録</a></li>
			</ul>
		</nav>


			<h2>FAQ(よくある質問)</h2>
			<div class="qaContainer">
				<div class="cp_qa">
					<div class="cp_actab">
						<input id="cp_tabfour031" type="checkbox" name="tabs">
						<label for="cp_tabfour031">不要な書籍を削除したい。</label>
						<div class="cp_actab-content">
						<p>削除したい書籍で削除ボタンをするとアプリから本が消えます。<br>一度削除したデータは復元できませんのでご注意ください。</p>
						</div>
					</div>
					<div class="cp_actab">
						<input id="cp_tabfour032" type="checkbox" name="tabs">
						<label for="cp_tabfour032">「エラー：サポートにお問合せください。」と表示され、操作が出来なくなりました。</label>
						<div class="cp_actab-content">
							<p>解決しない場合は、以下からお問い合わせください。</p><br>
							<p>その他、ご意見、ご要望もぜひお寄せください。</p><br>
							<p>サポート営業時間<br><a href="mailto:info@book.com">info@book.com</a><br>10:00～17:00（休業日：土日祝日）</p><br>
							<p>※お問い合わせ内容により、回答までに数日かかることがありますので何卒ご了承ください</p>
						</div>
					</div>
					<div class="cp_actab">
						<input id="cp_tabfour033" type="checkbox" name="tabs">
						<label for="cp_tabfour033">パスワードを忘れてしまいました。</label>
						<div class="cp_actab-content">
						<p>頑張って思い出してください。</p>
						</div>
					</div>

					<div class="cp_actab">
						<input id="cp_tabfour034" type="checkbox" name="tabs">
						<label for="cp_tabfour034">間違って削除・変更をしてしまいました。</label>
						<div class="cp_actab-content">
						<p>削除・変更完了ボタンを押して処理が完了してしまったものは戻せません。</p>
					</div>
				</div>

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

	<script type="text/javascript" src="js/main.js"></script>

</body>
</html>