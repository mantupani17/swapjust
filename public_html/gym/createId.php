<?php
include_once "Db.php";
$uname=$_POST['gname'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];
$un=$_POST['uname'];
$ps=$_POST['upass'];
$ps1=$_POST['upass1'];
if(isset($_POST['create']))
{
	if($dbf)
	{
		$sql = "INSERT INTO log_tab (uname,pass) VALUES (\"$uname\",\"$pass1\");";
		$res=mysql_query($sql);
		if($res)
		{
			?>
			<script language="javascript">
			alert("Created...!")
			window.location.href='setin.php?success';
			</script>
			<?
		}
		else{
			?>
			<script language="javascript">
			alert("Something Error...!")
			window.location.href='setin.php?success';
			</script>
			<?
		}
	}
	else
	{
			viewDbError();
	}
	
}
else if($_POST['chn'])
{
	if($dbf)
	{
		$sql="UPDATE log_tab set pass=\"$pass2\" WHERE uname LIKE \"$uname\";";
		$res=mysql_query($sql);
		if($pass1 == $pass2)
		{
			if($res)
			{
			?>
			<script language="javascript">
			alert("Updated...!")
			window.location.href='setin.php?success';
			</script>
			<?
			}
			else
			{
			?>
			<script language="javascript">
			alert("Record not found...!")
			window.location.href='setin.php?success';
			</script>
			<?
			}
		}
		else
		{
			passwordNotMatch();
		}
	}
	else
	{
		viewDbError();
	}
}
else if(isset($_POST['rem']))
{
	if($dbf)
	{
		$sql="DELETE FROM log_tab WHERE uname=\"$uname\" AND pass=\"$pass1\";";
		$res=mysql_query($sql);
		if($pass1==$pass2)
		{
		if($res)
		{
			
			?>
			<script language="javascript">
			alert("Deleted...!")
			window.location.href='setin.php?success';
			</script>
			<?
			
		}
		}
		else
		{
			passwordNotMatch();
		}
	}
	else
	{
		viewDbError();
	}
}
else if(isset($_POST['sub1']))
{
	if($dbf)
	{
		$sql="UPDATE admin_log set pass=\"$ps1\" WHERE uname LIKE \"$un\";";
		$res=mysql_query($sql);
		if($ps == $ps1)
		{
			if($res)
			{
			?>
			<script language="javascript">
			alert("Updated...!")
			window.location.href='setin.php?success';
			</script>
			<?
			}
			else
			{
			?>
			<script language="javascript">
			alert("Record not found...!")
			window.location.href='setin.php?success';
			</script>
			<?
			}
		}
		else
		{
			passwordNotMatch();
		}
	}
	else
	{
		viewDbError();
	}
}
else if(isset($_POST['sub2']))
{
	if($dbf)
	{
		$sql = "INSERT INTO admin_log (uname,pass) VALUES (\"$un\",\"$ps\");";
		$res=mysql_query($sql);
		if($res)
		{
			?>
			<script language="javascript">
			alert("Created...!")
			window.location.href='setin.php?success';
			</script>
			<?
		}
		else{
			?>
			<script language="javascript">
			alert("Something Error...!")
			window.location.href='setin.php?success';
			</script>
			<?
		}
	}
	else
	{
			viewDbError();
	}
}
else if(isset($_POST['sub3']))
{
	if($dbf)
	{
		$sql="DELETE FROM admin_log WHERE uname=\"$un\" AND pass=\"$ps\";";
		$res=mysql_query($sql);
		if($ps==$ps1)
		{
		if($res)
		{
			
			?>
			<script language="javascript">
			alert("Deleted...!")
			window.location.href='setin.php?success';
			</script>
			<?
			
		}
		}
		else
		{
			passwordNotMatch();
		}
	}
	else
	{
		viewDbError();
	}
}
function passwordNotMatch()
{
			?>
			<script language="javascript">
			alert("Password Not Match...!")
			window.location.href='setin.php?success';
			</script>
			<?
}
function viewDbError()
{
			?>
			<script language="javascript">
			alert("Data base not found...!")
			window.location.href='setin.php?success';
			</script>
			<?
	
}
?>