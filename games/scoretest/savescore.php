<?php
include("db.php");
$con = mysql_connect($host,$user,$pass);

if (!$con)
	{
	die('Could not connect to the database: ' . mysql_error());
	}

mysql_select_db("scoretest", $con);

$name = strip_tags(mysql_real_escape_string($_GET[name]));
$score = strip_tags(mysql_real_escape_string($_GET[score]));

$sql ="INSERT INTO scores (name, score) VALUES ('$name', '$score')";

if (!mysql_query($sql,$con))
	{
	die('ERROR: ' . mysql_error());
	}

mysql_close($con);

?>