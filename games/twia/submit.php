<?php
$host = "twiascores.db.8353829.hostedresource.com";
$user = "twiascores";
$pass = "Katarina620";
$con = mysql_connect($host,$user,$pass);

if (!$con)
	{
	die('Could not connect to the database: ' . mysql_error());
	}
	
mysql_select_db("twiascores", $con);

$name = strip_tags(mysql_real_escape_string($_POST[user]));
$score = strip_tags(mysql_real_escape_string($_POST[score]));

$sql ="INSERT INTO scores (name, score) VALUES ('$name', '$score')";

if (!mysql_query($sql,$con))
	{
	die('ERROR: ' . mysql_error());
	}

mysql_close($con);

echo "Score Successfully submitted.";
?>