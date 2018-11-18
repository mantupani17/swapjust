<?php
include_once 'Db.php';
$mid=$_POST['mno'];
$cname=$_POST['cname'];
$fname=$_POST['fname'];
$age=$_POST['age'];
$doj=$_POST['doj'];
$mno=$_POST['mbno'];
$occp=$_POST['occp'];
$qual=$_POST['qual'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$msts=$_POST['msts'];
$gen=$_POST['gen'];
$bg=$_POST['bg'];
$cb=$_POST['cb'];
$crc=$_POST['crc'];
$ide=$_POST['ide'];
$ogym=$_POST['ogym'];
$pbasis=$_POST['pbasis'];
$pamnt=$_POST['pamnt'];
$ptime=$_POST['pt'];
$addr=$_POST['adr'];
$pcode=$_POST['pin'];
$state=$_POST['st'];
$dis=$_POST['distc'];
$mail=$_POST['email'];
$gym=$_POST['gname'];
$nat=$_POST['nat'];
$tmem=$_POST['tmem'];
$city=$_POST['city'];


if(isset($_POST['Entry']))
{
	$sql = "INSERT INTO reg_tab (mid,cname,fname,doj,age,mno,occp,qual,height,weight,msts,gen,bg,cb,ccase,nat,ide,ogym,pbasis,amnt,ptime,
	addr,pcode,state,city,dist,email,lpd,GNAME,tmem) VALUES ( \"$mid\", \"$cname\",
	\"$fname\",\"$doj\", \"$age\",\"$mno\",\"$occp\",\"$qual\",\"$height\",
	\"$weight\",\"$msts\",\"$gen\",\"$bg\",\"$cb\",\"$crc\",\"$nat\",\"$ide\",
	\"$ogym\",\"$pbasis\",\"$pamnt\",\"$ptime\",\"$addr\",\"$pcode\",\"$state\",\"$city\",\"$dis\",
	\"$mail\",\"$doj\",\"$gym\",\"$tmem\");";
	if($dbf)
	{
		$res=mysql_query($sql);
		if($res)
		{
			?>
			<script language="javascript">
			alert("Registered successful...!")
			window.location.href='Admin1.php?success';
			</script>
			<?php
		}
		else
		{
			?>
			<script language="javascript">
			alert("Unsuccessful...!");
			window.location.href='Admin1.php?success';
			</script>
			<?php
		}
	}
}
else if(isset($_POST['del']))
{
	$sql="DELETE FROM reg_tab WHERE mid like \"$mid\";";
	if($dbf)
	{
		$res=mysql_query($sql);
			if($res)
			{
			?>
			<script language="javascript">
			alert("Removed successful...!")
			window.location.href='Admin1.php?success';
			</script>
			<?php
			}
			else
			{
			?>
			<script language="javascript">
			alert("Usuccessful...!")
			window.location.href='Admin1.php?success';
			</script>
			<?php
			}
	}
}
else if(isset($_POST['upd']))
{
	
}


?>