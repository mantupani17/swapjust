<?php
//include_once 'Db.php';
$life=21600;
session_set_cookie_params($life);
session_start();
$_SESSION["gn"];
$_SESSION['cid'];
$lpd=null;
$mn=null;
$pbas=null;
if($_SESSION['gn'] == null)
{
	header('Location: Gym.html');
}
display();

function display()
{
	include_once 'Db.php';
	$dt=date("m/d/Y");
//$gn=$_POST['txt1'];
	?>
	<html>
	<head>
	<link rel="shortcut icon" href="../logo.jpg" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Attendance Register</title>
<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
</script>
<link href="new.css" type="text/css" rel="stylesheet" /> 
<style type="text/css">
.vs
{
background-color:#33ccff;
}
#sv
{
background-color:#33ccff;
color:#fff;
margin-left:7px;
}

#sv:hover
{
	-webkit-transition: all 0.5s ease-in-out;
   -moz-transition: all 0.5s ease-in-out;
   -o-transition: all 0.5s ease-in-out;
   -ms-transition: all 0.5s ease-in-out;
   transition: all 0.5s ease-in-out;
	-webkit-border-radius:10px;
	-webkit-box-shadow:0px  0px 5px 5px white;
	background-color:#fff;
	color:#33ccff;
}
</style>
</head>

<body>
<nav class="navbar navbar-default vs">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://www.handshakeyou.com" id="sv">handshakeyou.com</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="Register.html" id="sv">Member Entry</a></li>
      <li><a href="attendance.php" id="sv">Daily Register</a></li>
      <li><a href="index.html" id="sv">Member Profile</a></li>
	  <li><a href="index.html" id="sv">Attender</a></li>
	  <li><a href="index.html" id="sv">Workout</a></li>
	  <li><label id="sv" style="margin-top:25%;color:black;"><?php echo $_SESSION["gn"]; ?></label></li>
	  <li>
	 <form method="GET" action="logout.php" name="logout"> <input type="submit" name="logout" value="Logout" id="sv" style="margin-top:20%;-webkit-border-radius:10px;" /></form>
	  </li>
    </ul>
  </div>
</nav>

<form action="Atten.php" method="post" name="f1">
<h1 style="color:#00CCFF;" align="center"><u>
<?php echo 'FOR GYM  '.$_SESSION["gn"].' ATTENDANCE SHEET OF THE '.$dt ?>&nbsp;</u></h1>
<!--<input type="hidden" value="" name="gn" />-->
<!-- This is for registration -->
<table border="0px" width="100%" style="margin-left: 5px;" class="pt">
	<tr>
		<td width="40%" valign="top" colspan="2">
		<fieldset class="fld">
			<legend class="lgd">Attendance</legend>
		<table border="0px" width="100%">
		<tr>
			<td width="25%">
			<input type="text" placeholder ="Enter membership number" id="mem" class="txta" name="mid"  />
			</td>
			<td width="80px">
			<input type="submit" value="Enter"  id="si" class="btn1" name="ent"  />
			</td>
			<td>
                            <label>From:</label><input type="date" width="10%" placeholder="Select A date" class="txta1"/>
			</td>
			<td>
			<label>To:</label><input type="date" placeholder=""  id="tdt" class="txta1" />
			</td>
		</form>
		<form action="attendance.php" method="POST" name="f2">
			<td>
			<input type="text" placeholder="Enter the name" name="snm" class="txta1"/>
			</td>
			<td width="60px">
			<input type="submit" value="ok"  class="btn1" name="sn" id="s1" />
			</td>
			<td>
			<input type="text" placeholder="Enter phone number" id="pno" name="pno" class="txta1"/>
			</td>
			<td width="60px">
			<input type="submit" value="ok" class="btn1" name="s2"  />
			</td>
		</tr>
		</table>
		</fieldset>
		</td>
	</tr>
		</form>
<!-- this is for Data -->
<tr>
	<td rowspan="2" width="60%" valign="top">
		<fieldset class="fld">
				<legend class="lgd">Sheet</legend>
		<table width="100%" border="0px">
		<tr bgcolor="green">
			<th>sr.no</th>
			<th>Mid</th>
			<th>name</th>
			<th>Last Paid Date</th>
			<th>Branch</th>
		</tr>
		
	<?php
	$dt=date('y/m/d');
	$gn=$_SESSION['gn'];
	//$sql = "SELECT * FROM att_tab WHERE Cdate = \"$dt\" AND gname LIKE \"$gn\";";
	$sql = "select * from reg_tab where mid in(select mid from att_tab where Cdate=\"$dt\" ) and Gname like \"$gn\";";
	$c=1;
	if(dbf)
	{
		$res1=mysql_query($sql);
		if($res1)
		{
		while($df=mysql_fetch_assoc($res1))
		{
			
			echo '<tr align="center"  class="hfnt">
			<td width="5%">'.$c++.'</td>
			<td width="10%">'.$df['mid'].'</td>
			<td width="40%">'.$df['cname'].'</td>
			<td width="20%">'.$df['lpd'].'</td>
			<td width="25%">'.$df['GNAME'].'</td>
			</tr>';
		}
		}
		else{
			echo '<tr><td colspan=\'5\'>REsultset Error</td></tr>';
		}
	}
	else
	{
		echo '<tr><td colspan=\'2\'>Database not found</td></tr>';
	}
	
	?>
		</table>
		
		
	</fieldset>
	</td>
	<td width="40%">
	<fieldset class="fld">
	<legend class="lgd">Member Details</legend>
	
	<?php
	
	if($dbf)
	{
		$cid=$_SESSION['cid'];
		$sql2="SELECT mid,cname,addr,mno,pcode,state,dist,lpd,DATE_ADD(lpd,INTERVAL 20 DAY),GNAME,pbasis,amnt FROM reg_tab WHERE mid like \"$cid\";";
		$res2=mysql_query($sql2);
	if($res2)
	{
		if($df1=mysql_fetch_assoc($res2))
		{
			$mid=$df1['mid'];
			$lpd=$df1['lpd'];
			$mn=$df1['cname'];
			$pbas=$df1['pbasis'];
			$sql4=null;
			$dt=null;
			if($pbas=="Monthly(32 days)")
			{
				//echo $df2['DATE_ADD(lpd,INTERVALS 32 DAY)'];
				$sql4="SELECT lpd,DATE_ADD(lpd,INTERVAL 32 DAY) FROM reg_tab WHERE mid=\"$cid\";";
				$re4=mysql_query($sql4);
			if($re4)
			{
				if($df2=mysql_fetch_assoc($re4))
				{
					 $dt=$df2['DATE_ADD(lpd,INTERVAL 32 DAY)'];
				}
			}
				
			}
			else if($pbas=="Quarterly(93 days)")
			{
				$sql4="SELECT lpd,DATE_ADD(lpd,INTERVAL 93 DAY) FROM reg_tab WHERE mid=\"$cid\";";
				$re4=mysql_query($sql4);
			if($re4)
			{
				if($df2=mysql_fetch_assoc($re4))
				{
					 $dt=$df2['DATE_ADD(lpd,INTERVAL 93 DAY)'];
				}
			}
			}
			else if($pbas=="Half yearly(186 days)")
			{
				$sql4="SELECT lpd,DATE_ADD(lpd,INTERVAL 186 DAY) FROM reg_tab WHERE mid=\"$cid\";";
				$re4=mysql_query($sql4);
			if($re4)
			{
				if($df2=mysql_fetch_assoc($re4))
				{
					 $dt=$df2['DATE_ADD(lpd,INTERVAL 186 DAY)'];
				}
			}
			}
			else if($pbas=="Yearly(372 days)")
			{
				$sql4="SELECT lpd,DATE_ADD(lpd,INTERVAL 365 DAY) FROM reg_tab WHERE mid=\"$cid\";";
				$re4=mysql_query($sql4);
			if($re4)
			{
				if($df2=mysql_fetch_assoc($re4))
				{
					 $dt=$df2['DATE_ADD(lpd,INTERVAL 365 DAY)'];
				}
			}
			}
			else
			{
				echo 'All Clear';
			}
			//echo $sql4;
			
			
			echo '<table border="0" width="100%">
		<tr class="dtl" >
			<td width="40%" align="right"><label>Name:&nbsp;&nbsp;</label></th>
			<td><label class="fnt">'.$mn.'</label></td>
		</tr>
		<tr class="dtl" >
			<td width="40%" align="right"><label>Membership No:&nbsp;&nbsp;</label></td>
			<td><label class="fnt">'.$df1['mid'].'</label></td>
		</tr>
		<tr class="dtl" >
			<td width="40%" valign="top" align="right"><label>Address:&nbsp;&nbsp;</label></td>
			<td><label class="fnt">'.$df1['addr'].'<br/>'.$df1['pcode'].'<br/>'.$df1['state'].'<br/>'.$df1['dist'].'</label></td>
		</tr><tr class="dtl" >
			<td width="40%" align="right"><label>Mobile No:</label></td>
			<td><label class="fnt">'.$df1['mno'].'</label></td>
		</tr>
		<tr class="dtl" >
			<td width="40%" align="right"><label>Last Paid Date:&nbsp;&nbsp;</label></td>
			<td><label class="fnt">'.$lpd.'</label></td>
		</tr>
		<tr class="dtl" >
			<td width="40%" align="right"><label>Expire DATE:&nbsp;&nbsp;</label></td>
			<td><label class="fnt">'.$dt.'</label></td>
		</tr>
		<tr class="dtl" >
			<td width="40%" align="right"><label>Branch: &nbsp;&nbsp;</label></td>
			<td><label class="fnt">'.$df1['GNAME'].'</label></td>
		</tr>
		<tr class="dtl" >
			<td width="40%" align="right"><label>Joining Amount: &nbsp;&nbsp;</label></td>
			<td><label class="fnt">'.$df1['amnt'].'</label></td>
		</tr>
		</table>';
		}
	}
	else
	{
		echo 'ResultSet Error';
	}
	}
	else
	{
		echo "Not Found";
	}
	?>
	
		
	</fieldset>
	</td>
</tr>
<tr>
<td>
<fieldset class="fld">
<legend class="lgd">Payment Ditails</legend>
<table border="0px" cellpadding="5px" width="100%">
<tr class="dtl">
<th>Membership no</th>
<th>Bill no</th>
<th>Paid date</th>
<th>paid amount</th>
</tr>

<?php
if($dbf)
{
	$cid=$_SESSION['cid'];
	$sql4 = "SELECT * FROM pay_tab WHERE mid LIKE \"$cid\";";
	$res4=mysql_query($sql4);
	if($res4)
	{
		
		while($df=mysql_fetch_assoc($res4))
		{
			echo '<tr class="dtl" align="center">
			<td>'.$df['mid'].'</td>
			<td>'.$df['bid'].'</td>
			<td>'.$df['pdt'].'</td>
			<td bgcolor="red">'.$df['pamnt'].'</td>
			</tr>';
		}
	
	}
}
?>

</table>
</table>
<?
if(isset($_POST['sn']))
	{
		$sname=$_POST['snm'];
	if($dbf)
	{
		$sql="select * from reg_tab where cname LIKE \"$sname%\";";
		$res=mysql_query($sql);
		//$res1=mysql_query($sql);
		if($res)
		{
			echo '<table border=2>';
			while($df=mysql_fetch_assoc($res))
			{
			
			echo '<tr align="center"  class="hfnt">
			<td width="5%">'.$c++.'</td>
			<td width="10%">'.$df['mid'].'</td>
			<td width="40%">'.$df['cname'].'</td>
			<td width="20%">'.$df['lpd'].'</td>
			<td width="25%">'.$df['GNAME'].'</td>
			<td width="25%">'.$df['mno'].'</td>
			</tr>';
			}
			echo '</table>';
		}
		else{
			echo '<tr><td colspan=\'5\'>REsultset Error</td></tr>';
		}
	}
	else
	{
		echo '<tr><td colspan=\'2\'>Database not found</td></tr>';
	}
	}
	if(isset($_POST['s2']))
	{
		echo '<table>';
		if($dbf)
	{
		$pno=$_POST['pno'];
		$sql="select * from reg_tab where mno LIKE \"$pno%\";";
		$res=mysql_query($sql);
		//$res1=mysql_query($sql);
		if($res)
		{
			echo '<table border=2>';
			while($df=mysql_fetch_assoc($res))
			{
			
			echo '<tr align="center"  class="hfnt">
			<td width="5%">'.$c++.'</td>
			<td width="10%">'.$df['mid'].'</td>
			<td width="40%">'.$df['cname'].'</td>
			<td width="20%">'.$df['lpd'].'</td>
			<td width="25%">'.$df['GNAME'].'</td>
			<td width="25%">'.$df['mno'].'</td>
			</tr>';
			}
			echo '</table>';
		}
		else{
			echo '<tr><td colspan=\'5\'>REsultset Error</td></tr>';
		}
	}
	else
	{
		echo '<tr><td colspan=\'2\'>Database not found</td></tr>';
	}
		echo '</table>';
	}
?>	
<marquee direction="right" behavior="alternate" scrollamount="07" class="mrq"><?php echo $mn; ?> Your last Payment Date is <?php echo $lpd; ?> and your Choosing the <?php echo $pbas; ?> Basis</marquee>

</body>
</html>
	<?php
}	
?>
