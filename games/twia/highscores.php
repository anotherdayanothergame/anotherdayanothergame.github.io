<?php
include("db.php");
$con = mysql_connect($host,$user,$pass);

if (!$con)
	{
	die('Could not connect to the database: ' . mysql_error());
	}
	
mysql_select_db("twiascores", $con);

$result = mysql_query("SELECT * FROM scores ORDER BY score DESC");
echo "<body style='background-color:#687a6e'>";
echo("<table border='1' style='color:#ccc8bd'>
<tr>
<th>Place</th>
<th>Name</th>
<th>Score</th>
</tr>");
$x = 1;
while($row = mysql_fetch_array($result))
{
	echo "<tr><td>" . $x . "</td>";
	echo "<td>" . $row['name'] . "</td>";
	echo "<td>" . $row['score'] . "</td></tr>";
	$x = $x + 1;
}
echo "</table></body>";
mysql_close($con);
?>