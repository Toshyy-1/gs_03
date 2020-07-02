<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet/less" type="text/css" href="css/login.less">
  <link rel="stylesheet" type="text/css" href="css/reset.css">

<script src="http://cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
<script src="js/main.js"></script>


</head>
<body>
  

<div class="wrapper">
    <div class="container">
        <h1>書籍管理</h1>
        <h2>Welcome</h2>
        <form class="form" action="login_act.php" method = "post">
            <input type="text" placeholder="Username" name="lid" value ="">
            <input type="password" placeholder="Password" name="lpw" value = "">
            <input type="submit" id="login-button" name ="login" value = "ログイン" />
        </form>
    </div>
    
    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>

<nav id="menu">
			<ul class="clearfix">
				<li><a href="about.php">ブックとは？</a></li>
				<li><a href="faq.php">Q&A</a></li>
			</ul>
		</nav>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</body>
</html>

