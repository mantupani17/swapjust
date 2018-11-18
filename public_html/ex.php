<?php
include_once "db.php";
$x=$_POST['t1'];
$y=$_POST['t2'];
echo $x;
echo $y;
if(isset($_POST['submit']))
{
	
if($dbf)
{
	$sql="insert into test(value,numeric) values('$x','$y')";
	$result=mysql_query($sql);
	if($result)
	{
		echo "added";
	}
	else
	{
		echo "error";
	}
	
}
else
{
	echo "db not found";
}
}

?>
<form action="ex.php" method="POST">
	<input type="text" name="t1" />
	<input type="text" name="t2" />
	<input type="submit" name="submit" value="submit" />
</form>