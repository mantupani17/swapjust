<?php
include_once 'Db.php';
$bid=$_POST['p2'];
$mid=$_POST['p1'];
$pdt=$_POST['p8'];
$pmnt=$_POST['p9'];
if($_POST['b5'])
{
	if($dbf)
	{
		$sql = "UPDATE pay_tab SET mid = \"$mid\", pamnt = $pmnt ,pdt=\"$pdt\" WHERE bid = $bid ";
		$res=mysql_query($sql);
		if($res)
		{
			echo $bid;
			?>
			<script language="javascript" type="text/javascript">
			alert('Data Update...!'); 
			window.location.href='pay.php?success';
			</script>
			<?php
			
		}
		else
		{
			?>
			<script language="javascript" type="text/javascript">
			alert('Problem to update...!'); 
			window.location.href='pay.php?success';
			</script>
			<?php
			
		}
		
	}
	else
	{
		echo 'database is not there';
	}
}

?>