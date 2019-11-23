<?php
	include("db.php");
	$con = mysql_connect($host,$user,$pass);

	if (!$con)
		{
		die('Could not connect to the database: ' . mysql_error());
		}
		
	mysql_select_db("snailracemanager", $con);

	echo "	<head>
				<title>Snail Race Manager 2013</title>
				<style type='text/css'>
				a:link {color:#183030}
				a:visited {color:#507868}
				</style>
				<style type='text/css'>
				div.content
				{
				color:#183030;
				padding:10px 20px;
				background:#a8c0b0;
				min-height:50px;
				width:600px;
				}
				</style>
				<script type='text/javascript'>
				  var _gaq = _gaq || [];
				  _gaq.push(['_setAccount', 'UA-38159815-1']);
				  _gaq.push(['_trackPageview']);

				  (function() {
				    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
				  })();

				</script>
			</head>

			<body style='background-color:#e0f0e8'>
				<center>
					<a href='http://anotherdayanotherga.me/games/srm2013/index.php'><img src='img/logo.png' /></a>
					<br />
					<div id='content' class='content'>
						<p>Download the game <a href='download.html'>here</a>.</p>
						<p>Click an image to see the full leaderboards.</p>
						<table border='0' style='color:#183030'>
							<tr>
								<th>Best time</th>
							</tr>
							<tr>
								<td>
									<a href='time.php'>";
	$result = mysql_query("SELECT * FROM multi ORDER BY time ASC");
	$x = 0;
	while($row = mysql_fetch_array($result))
	{
		if ($x < 1) {
			echo "<img src='img/" . $row['type'] . ".png' /></a></td></tr>\n";
			echo "<tr><td><center>" . $row['name'] . "</center></td></tr>\n";
			echo "<tr><td><center>Time: " . intval($row['time'] / 60) . " seconds.</center></td></tr>\n";
			$x = $x + 1;
		}
	}

	echo "				</table>
						<br />
						<table border='0' style='color:#183030'>
							<tr>
								<th>Most wins</th>
							</tr>
							<tr>
								<td>
									<a href='wins.php'>";
	$result = mysql_query("SELECT * FROM users ORDER BY wins DESC");
	$x = 0;
	while($row = mysql_fetch_array($result))
	{
		if ($x < 1) {
			echo "<img src='img/" . $row['type'] . ".png' /></a></td></tr>\n";
			echo "<tr><td><center>" . $row['name'] . "</center></td></tr>\n";
			echo "<tr><td><center>Wins: " . $row['wins'] . "</center></td></tr>\n";
			$x = $x + 1;
		}
	}

	echo "				</table>
						<br />
						<table border='0' style='color:#183030'>
							<tr>
								<th>Most money</th>
							</tr>
							<tr>
								<td>
									<a href='money.php'>";
	$result = mysql_query("SELECT * FROM users ORDER BY money DESC");
	$x = 0;
	while($row = mysql_fetch_array($result))
	{
		if ($x < 1) {
			echo "<img src='img/" . $row['type'] . ".png' /></a></td></tr>\n";
			echo "<tr><td><center>" . $row['name'] . "</center></td></tr>\n";
			echo "<tr><td><center>Money: $" . $row['money'] . "</center></td></tr>\n";
			$x = $x + 1;
		}
	}

	echo "				</table>
						<br />
						<form style='align:center' action='profile.php' method='get'>
							Look up a player's profile.<br />
							Name: <input type='text' name='name'><br />
							<input type='submit' value='Submit'>
						</form>

						<p>Game by <a href='http://anotherdayanotherga.me'>Another Day, Another Game</a> with music by <a href='https://soundcloud.com/jordanoakley-1'>Jordan Oakley</a>.</p>
						<p>Made for <a href='http://gbjam.net'>GBJam 2013</a>.</p>
						<p>Copyright Matt Chelen 2013.</p>
					</div>
				</center>
			</body> ";
	mysql_close($con);
?>