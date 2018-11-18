<?php
include_once "db.php";
$gname=$_POST['gname'];
$gadder=$_POST['gadder'];
$glname=$_POST['glname'];
$gpcode=$_POST['gpcode'];
$gcity=$_POST['gcity'];
$gdist=$_POST['gdist'];
$gstate=$_POST['gstate'];
$gcountry=$_POST['gcountry'];
$phno=$_POST['phno'];
$oname=$_POST['oname'];
/*$oadder=$_POST['oadder'];
$olname=$_POST['olname'];
$opcode=$_POST['opcode'];
$ocity=$_POST['ocity'];
$odist=$_POST['odist'];
$ostate=$_POST['ostate'];
$ocountry=$_POST['ocountry'];*/
$omailid=$_POST['omailid'];
$userpass=$_POST['userpass'];
$cuserpass=$_POST['cuserpass'];

//echo $gadder;
if($userpass==$cuserpass)
{
			if($dbf)
			{
				$d=date("y-m-d");
	$sql = "insert into Gym_reg(GNAME,GADDER, GLNAME, GPCODE, GCITY, GDIST, GSTATE, GCONT, GPHNO, ONAME, OMAIL_ID, PASSWORD, DOR) values(\"$gname\",\"$gadder\",\"$glname\",$gpcode,\"$gcity\",\"$gdist\",\"$gstate\",\"$gcountry\",\"$phno\",\"$oname\",\"$omailid\",\"$userpass\",\"$d\");";
	#$sql=$sql = "INSERT INTO `myservice`.`gym_reg` (`GNAME`, `GADDER`, `GLNAME`, `GPCODE`, `GCITY`, `GDIST`, `GSTATE`, `GCONT`, `GPHNO`, `ONAME`, `OSNAME`, `OLNAME`, `OPCODE`, `OCITY`, `ODIST`, `OSTATE`, `OCONT`, `OMAIL_ID`, `PASSWORD`, `DOR`) VALUES (\'handshake you gym\', \'Berhampur\', \'g.nagar\', \'760006\', \'Berhampur\', \'ganjam\', \'Odisha\', \'india\', \'7873160006\', \'susanta madala\', \'sriram nagar\', \'sriram nagar\', \'760006\', \'Berhampur\', \'ganjam\', \'Odisha\', \'india\', \'susantamadala@gmail.com\', \'123456\', \'2016-02-10\');";
	$result=mysql_query($sql);
		if($result)
		{
				?>
				<script>
				alert("thanks to Register your gym ");
				window.location.href='../reggym.html?success';
				</script>
				<?php	
		
		}
			else
			{
				?>
				<script>
				alert("Something is going to wrong or duplicate values entered");
				window.location.href='../reggym.html?FAIL';
				</script>
				<?php

			}
	}
	else
	{
	print("<h1 style='background-color:#ffebcd;color:#008b8b;text-align:center;margin:33%;width:auto;height:auto;'>the password not matched</h1>");
	}
}


?>