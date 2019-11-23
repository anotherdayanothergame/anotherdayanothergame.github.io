<?php
include("db.php");
$con = mysql_connect($host,$user,$pass);

if (!$con)
	{
	die('Could not connect to the database: ' . mysql_error());
	}

mysql_select_db("scoretest", $con);

$result = mysql_query("SELECT * FROM scores ORDER BY score DESC");
$x = 1;
$arr = array();
$str = "{ 'scores' : { ";

while ($row = mysql_fetch_array($result)) {
	if ($x <= 10) {
		$place = $x;
		$data = array($row['name'], $row['score']);

		$arr[] = array('place' => $place, 'data' => $data);
		if ($x < 10) { $str .= "'score" . $place . "' : { 'score' : " . $row['score'] . ", 'name' : '" . $row['name'] . "' }, "; }
		else { $str .= "'score" . $place . "' : { 'score' : " . $row['score'] . ", 'name' : '" . $row['name'] . "' }"; }

		$x = $x + 1;
	}
}

$str .= " } }";

echo $str;