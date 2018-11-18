<?php
include_once 'Db.php';
$mid=$_POST['mid2'];
$mname=$_POST['mname2'];
?>
<html>
<head>
<title>Payment Details</title>
<style type="text/css" >
.des{
	border-radius:2px;
	background-color:#faebd7;
	margin-top:5px;
	margin-left:5px;
	
}
.cb{
	background-color:#7fffd4;
	color:blue;
	border-radius:2px;
	font-family:monospace;
	font-weight:bolder;
	font-size:15px;
}
th{
	background-color:#add8e6;
	color:#a52a2a;
	border-radius:5px;
}
.fnt{
	font-size:12px;
	font-family:monospace;
	font-weight:bolder;
	font-style:oblique;
}
input[type=submit]{
	background-color:white;
	border-radius:2px;
	border-color:blue;
}
input[type=text]{
	background-color:white;
	border-radius:2px;
	border-color:blue;
	background-position:10px 10px;
	background-repeat:no-repeat;
	padding-left:40px;
}
</style>
</head>
<body>

<form action="payDetails.php" method="POST" name="f2">
<div id="id5">
<table border="0" width="100%"">
<tr>
	<th colspan="7" valign="bottom"><h2>Payment Details</h2></th>
	
	</tr>
		<tr>
		<td>Enter Member ID</td>
		<td><input type="text" name="mid2" placeholder="Membership No" /></td>
		<td><input type="submit" name="mbt1" value="Search"/></td>
		<td><input type="submit" name="mbt2" value="View All"/></td>
		<td>Enter Name</td>
		<td><input type="text" name="mname2" placeholder="Enter Name" /></td>
	</tr>
	
	<tr>
	<td colspan="7" ><hr color="red" size="5" /></td>
	</tr>
	<tr>
	<th>Membership no</th>
	<th>bill no</th>
	<th>Name</th>
	<th>Mobile no</th>
	<th>Gym</th>
	<th>Pay date</th>
	<th>Paid Amount</th>
	
	</tr>
	
	<?php
	if(isset($_POST['mbt2']))
	{
	if($dbf)
	{
			$sql="SELECT pay_tab.mid,cname,mno,GNAME,pdt,pamnt,bid FROM pay_tab,reg_tab where pay_tab.mid = reg_tab.mid ";
			$res=mysql_query($sql);
			while($df=mysql_fetch_array($res))
			{
				echo '<tr align="center" class="fnt">
							<td>'.$df['mid'].'</td>
							<td>'.$df['bid'].'</td>
							<td>'.$df['cname'].'</td>
							<td>'.$df['mno'].'</td>
							<td>'.$df['GNAME'].'</td>
							<td>'.$df['pdt'].'</td>
							<td>'.$df['pamnt'].'</td>
							
					</tr>';
			}
	}
	else
	{
		?>
			<script language="javascript">
			alert("Data base not found...!")
			window.location.href='setin.php?success';
			</script>
			<?php
	}
	}
	else if(isset($_POST['mbt1']))
	{
		$mid=$_POST['mid2'];
		if($dbf)
		{
			$sql="SELECT pay_tab.mid,cname,mno,GNAME,pdt,pamnt,bid FROM pay_tab,
					reg_tab where pay_tab.mid = reg_tab.mid and reg_tab.mid=\"$mid\"
					and pay_tab.mid=\"$mid\";";
			$res1=mysql_query($sql);
			if($res1)
			{
			while($df=mysql_fetch_array($res1))
			{
				echo '<tr align="center" class="fnt">
							<td>'.$df['mid'].'</td>
							<td>'.$df['bid'].'</td>
							<td>'.$df['cname'].'</td>
							<td>'.$df['mno'].'</td>
							<td>'.$df['GNAME'].'</td>
							<td>'.$df['pdt'].'</td>
							<td>'.$df['pamnt'].'</td>
							
					</tr>';
			}
			}
			else{
				echo 'Resultset Error';
			}
		}
		else
		{
		?>
			<script language="javascript">
			alert("Data base not found...!")
			window.location.href='setin.php?success';
			</script>
			<?php
		}
		//echo $md;
		
	}
	if(isset($_POST['mname2']))
	{
		$mname=$_POST['mname2'];
		if($dbf)
		{
			$sql="SELECT pay_tab.mid,cname,mno,GNAME,pdt,pamnt,bid FROM pay_tab,
					reg_tab where pay_tab.mid = reg_tab.mid and reg_tab.cname like \"$mname%\";";
			$res1=mysql_query($sql);
			if($res1)
			{
			while($df=mysql_fetch_array($res1))
			{
				echo '<tr align="center" class="fnt">
							<td>'.$df['mid'].'</td>
							<td>'.$df['bid'].'</td>
							<td>'.$df['cname'].'</td>
							<td>'.$df['mno'].'</td>
							<td>'.$df['GNAME'].'</td>
							<td>'.$df['pdt'].'</td>
							<td>'.$df['pamnt'].'</td>
							
					</tr>';
			}
			}
			else{
				echo 'Resultset Error';
			}
		}
		else
		{
		?>
			<script language="javascript">
			alert("Data base not found...!")
			window.location.href='setin.php?success';
			</script>
			<?php
		}
		//echo $md;
		
	}
	
	?>
	
	
	</table>
</div>
</body>
</html>