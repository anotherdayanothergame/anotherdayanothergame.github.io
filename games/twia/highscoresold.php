<?php
include("db.php");
$con = mysql_connect($host,$user,$pass);

if (!$con)
	{
	die('Could not connect to the database: ' . mysql_error());
	}
	
mysql_select_db("twiascores", $con);

$result = mysql_query("SELECT * FROM scores ORDER BY score DESC");
echo("<table border='1' style='color:white'>
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
echo "</table>";
mysql_close($con);
?>