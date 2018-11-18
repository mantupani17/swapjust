<?php
include_once 'Db.php';
$life=21600;
session_set_cookie_params($life);
session_start();
$gn=$_SESSION['gn'];
$dt=date("Y/m/d");
$mid=$_POST['mid'];
$ev=$_POST['ent'];
$_SESSION['cid']=$mid;
if(isset($ev))
{
	$sql = "INSERT INTO att_tab (mid,Cdate,gname) VALUES (\"$mid\", \"$dt\", \"$gn\");";
	if($dbf)
	{
		$res=mysql_query($sql);
		if($res)
		{
			?>
			<script language="javascript">
			alert("Successful...!")
			window.location.href='attendance.php?success';
			</script>
			<?php
		}
		else
		{
			?>
			<script language="javascript">
			alert("Unsuccessful...!");
			window.location.href='attendance.php?success';
			</script>
			<?php
		}
	}
}

?>