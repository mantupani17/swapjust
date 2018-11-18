<?php
include_once 'Db.php';
$uid=$_POST['txt1'];
$life=21600;
session_set_cookie_params($life);
session_start();
$_SESSION['gn']=$uid;
//$_SESSION['uname']='mantu';
$pass=$_POST['txt2'];
if(isset($_POST['login1']))
{
	if($dbf)
	{
		$sql = "SELECT * FROM log_tab WHERE uname=\"$uid\" and pass=\"$pass\";";
		$res=mysql_query($sql);
		if($df=mysql_fetch_assoc($res))
		{
		if(($df['uname']==$uid) &&($df['pass']==$pass))
		{
			//$_SESSION['uname']=$uid;
			?>
			<script language="javascript" type="text/javascript">
			alert('Successful...!'); 
			window.location.href='Attender.php?success';
			</script>
			<?php
			
		}
		}
		else
		{
			require_once("index1.html");
			
		}
		
		//echo "connected";
	}
}
if(isset($_POST['login']))
{
	if($dbf)
	{
		$sql = "SELECT * FROM admin_log WHERE uname=\"$uid\" and pass=\"$pass\";";
		$res=mysql_query($sql);
		if($df=mysql_fetch_assoc($res))
		{
		if(($df['uname']==$uid) &&($df['pass']==$pass))
		{
			//$_SESSION['uname']=$uid;
			?>
			<script language="javascript" type="text/javascript">
			alert('Successful...!'); 
			window.location.href='Admin.php?success';
			</script>
			<?php
			
		}
		}
		else
		{
			require_once('index.html');
		}
		
		//echo "connected";
	}
}
?>