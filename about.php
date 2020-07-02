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
				<li class="active"><a href="about.php">ブックとは？</a></li>
				<li><a href="faq.php">FAQ</a></li>
			</ul>
		</nav>

		<nav id="menu">
			<ul class="clearfix">
				<li><a href="list.php">書籍一覧</a></li>
				<li><a href="entry.php">書籍登録</a></li>
			</ul>
		</nav>



		<h2>ブックとは？</h2>
		<div id="insert">
		<h3>■一言で言うと書籍の管理システムです。</h3><br>

			<p>本が好きな人、本を沢山読む人の悩みを解決する読書管理アプリとして、本が好きな人が作りました。</p><br>
			<p>興味のある本、これから読みたい本、既に読んだことのある本、
			世界に存在する全ての本の数は2019年時点で1億2986万4880冊（Google Books調べ）、いくら本が好きでも一生の間に読める本には限りがありますから、日々新しい本が出てくる中で世界中の全ての本を読むことは不可能ですね。</p><br>

			<p>それでも大好きな本を沢山読みたい。勉強のために読まなければいけないなど。人によって様々な理由があると思いますが、これだけ本が多いと、読みたい本、読むべき本、読んだ本を探すのも大変だし、面白いと思って読んでいたら途中からなんか知っているような内容が出てきて、実は過去に読んだ本なのに忘れていてまた読んでいたなんてことも。</p><br>

			<p>書籍、著者の管理、評価、コメントなどの機能をつけて</p>
			<p>読書家たちのサポートにつながるような書籍を管理していただけるシステムとなってます。</p><br>
			
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