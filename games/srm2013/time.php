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
					<a href='http://anotherdayanotherga.me/games/srm2013/index.php'><img src='img/logo.png' /></a>
					<br />
					<div id='content' class='content'>
						<h1>Best times</h1>
						<table border='0' style='color:#183030' cellpadding='5'>
							<tr>
								<th>Image</th>
								<th>Name</th>
								<th>Time</th>
							</tr>";

	$result = mysql_query("SELECT * FROM multi ORDER BY time ASC");

	$x = 0;
	while($row = mysql_fetch_array($result))
	{
		if ($x <= 50) {
				echo "<tr><td><img src='img/" . $row['type'] . ".png' /></td>\n";
				echo "<th><center>" . $row['name'] . "</center></th>\n";
				echo "<td><center>" . intval($row['time'] / 60) . " seconds</center></td></tr>\n";
				$x = $x + 1;
		}
	}

	echo "				</table>
						<br />
						<p>Copyright Matt Chelen 2013.</p>
					</div>
				</center>
			</body> ";
	mysql_close($con);
?>