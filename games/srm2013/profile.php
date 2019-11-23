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
			</head>

			<body style='background-color:#e0f0e8'>
				<center>
					<a href='https://anotherdayanothergame.github.io/games/srm2013/index.php'><img src='img/logo.png' /></a>
					<br />
					<div id='content' class='content'>
						<table border='0' style='color:#183030'>";

	$result = mysql_query("SELECT * FROM users WHERE name='" . $_GET[name] . "'");

	while($row = mysql_fetch_array($result))
	{
			echo "<tr><td><img src='img/" . $row['type'] . ".png' /></td></tr>\n";
			echo "<tr><th><center><font size='3'>" . $row['name'] . "</font></center></th></tr>\n";
			echo "<tr><td><center>Speed: " . $row['speed'] . "</center></td></tr>\n";
			echo "<tr><td><center>Fear reduction: " . $row['fear'] . "</center></td></tr>\n";
			echo "<tr><td><center>Stamina: " . $row['stamina'] . "</center></td></tr>\n";
			echo "<tr><td><center>Wins: " . $row['wins'] . "</center></td></tr>\n";
			echo "<tr><td><center>Losses: " . $row['losses'] . "</center></td></tr>\n";
			echo "<tr><td><center>Money: $" . $row['money'] . "</center></td></tr>\n";
	}

	$result = mysql_query("SELECT * FROM multi WHERE name='" . $_GET[name] . "'");

	while($row = mysql_fetch_array($result))
	{
		echo "<tr><td><center>Best time: " . intval($row['time'] / 60) . " seconds.</center></td></tr>\n";
	}
	echo "				</table>
						<br />
						<p>Copyright Matt Chelen 2013.</p>
					</div>
				</center>
			</body> ";
	mysql_close($con);
?>