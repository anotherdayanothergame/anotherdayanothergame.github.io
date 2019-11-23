<html>
<head>
<title>Another Day, Another Game</title>
<link rel="shortcut icon" href="adag.ico" />
<body>
<style type="text/css">
a:link {color:#FFFFFF}
a:visited {color:#FFFFFF}
</style>
<style type="text/css">
div.center
{
margin-left:auto;
margin-right:auto;
}
div.header
{
color:white;
font-size:40px;
border:1px solid #23a20e;
padding:10px 20px;
background:#35d91a;
width:800px;
text-align:center;
}
div.menu
{
color:white;
font-size:20px;
border:1px solid #1c6111;
padding:5px 20px;
background:#23a20e;
width:800px;
}
div.content
{
color:white;
border:1px solid #1c6111;
padding:10px 20px;
background:#135e07;
min-height:400px;
width:800px;
}
div.footer
{
color:white;
border:1px solid #1c6111;
padding:5px 20px;
background:#23a20e;
width:800px;
}
object.stretch
{
min-height:400px;
width:800px;
}
</style>
</head>
<body style="background-color:#092f03">
<div id="container" align="center">
	<div class="header">
		<p>Another Day, Another Game</p>
	</div>
	<div id="menu" class="menu">
		<center>
		<p><a href="?id=1">Home</a>
		<a href="?id=2">Games</a>
		<a href="?id=3">About Me</a>
		<a href="/blog">Blog</a></p>
		</center>
	</div>
	<div class="content" id="content">
		<?php
		if(!isset($_GET['id'])){ 
			$id = 1; 
		} else { 
			$id = $_GET['id']; 
		}
		if ($id == 1) {
			echo "<object data='home.html' class='stretch' id='content' type='text/html'><p>Could not load home.html.</p></object>";
		}
		if ($id == 2) {
			echo "<object data='games.html' class='stretch' id='content' type='text/html'><p>Could not load games.html.</p></object>";
		}
		if ($id == 3) {
			echo "<object data='about.html' class='stretch' id='content' type='text/html'><p>Could not load about.html.</p></object>";
		}
		if ($id == 4) {
			echo "<object data='http://www.anotherdayanotherga.me/blog' class='stretch' id='content' type='text/html'><p>Could not load blog.</p></object>";
		}
		if ($id == 5) {
			echo "<object data='/games/twia/twia.html' class='stretch' id='content' type='text/html'><p>Could not load The World Isn't...AA!</p></object>";
		}
		?>
	</div>
	<div id="footer" class="footer">
		<center><br /><p>Copyright Matt Chelen 2011<p></center>
	</div>
</div>
</body>
</html>