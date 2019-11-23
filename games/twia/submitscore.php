<html>
<head><title>Submit Score</title></head>
<?php
$score = $_POST[score];
?>
<body>
<form style='align:center' action='submit.php' method='post'>
			<br />
			Enter your name:<br />
			<input type='text' name='user'><br />
			Score:<br />
			<input type="text" value='<?php echo " ".$score." ";?>' name="score" readonly="readonly"><br />
			<input type='submit' value='submit' name='submit'><br />
</form>
</body>
</html>
