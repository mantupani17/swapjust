<?php
	include_once "db.php";
	$mname=$_POST['t1'];
	$gname=$_POST['t2'];
	$sname=$_POST['t3'];
	$lname=$_POST['t4'];
	$pcode=$_POST['t5'];
	$cname=$_POST['t6'];
	$dname=$_POST['t7'];
	$stname=$_POST['t8'];
	$phno=$_POST['t9'];
	$age=$_POST['t10'];
	$qual=$_POST['t11'];
	$occp=$_POST['t12'];
	$mailid=$_POST['t13'];
	$bg=$_POST['t14'];
	$weight=$_POST['t15'];
	$height=$_POST['t16'];
	$nation=$_POST['t17'];
	$ptime=$_POST['t18'];
	$bgmark=$_POST['t19'];
	$msts=$_POST['t20'];
	$gen=$_POST['t21'];
	$pass=$_POST['pass'];
	$cpass=$_POST['cpass'];
	$gymname="Handshake you gym";
	
	if(isset($_POST['reg']))
	{
		if($pass==$cpass)
		{
			$d=date("y-m-d");
		if($dbf)
		{
			$sql="INSERT INTO MEM_REG(MNAME,GNAME,SNAME,LNAME,PCODE,CNAME,DNAME,STATE,PHNO,AGE,QUAL,OCCP,
									MAILID,BG,WEIGHT,HEIGHT,NATION,PTIME,BGMARK,MSTS,GEN,DOE,PASSWORD,GYMNAME)
									VALUES('$mname','$gname','$sname','$lname','$pcode','$cname',
									'$dname','$stname','$phno','$age','$qual','$occp','$mailid','$bg',
									'$weight','$height','$nation','$ptime','$bgmark','$msts','$gen',
									'$d','$pass','$gymname')"; 
			$result_set=mysql_query($sql); 
			if($result_set)
			{
				?>
				<script>
				alert("Member Registered Successfully");
				window.location.href='sginupmemb.html?success'; 
				</script>
				<?php
			}
			else
			{
				?>
				<script>
				alert("Data already Exist");
				window.location.href='sginupmemb.html?success'; 
				</script>
				<?php
			}
		}
		else{
			?>
				<script>
				alert("Database Not Found");
				window.location.href='sginupmemb.html?success'; 
				</script>
				<?php
		}
		}
		else
		{
			?>
				<script>
				alert("PASSWORD not matched");
				window.location.href='sginupmemb.html?success'; 
				</script>
				<?php
		}
	}
?>