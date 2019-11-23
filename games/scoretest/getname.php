<?php
include("db.php");
$con = mysql_connect($host,$user,$pass);

if (!$con)
	{
	die('Could not connect to the database: ' . mysql_error());
	}

mysql_select_db("scoretest", $con);

$num = $_GET['place'];
$result = mysql_query("SELECT * FROM scores ORDER BY score DESC");
$x = 1;
$arr = array();

while ($row = mysql_fetch_array($result)) {
	if ($x <= 10) {
		$place = $x;
		$name = $row['name'];

		$arr[$x] = $name;
		$x = $x + 1;
	}
}

echo $arr[$num];