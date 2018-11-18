<?php
//include_once 'Db.php';
?>
<html>
<head>
<title>Attendance Details</title>
<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
</script>
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
	background-image:url(sm-3.jpg);
	color:#fff;
	height:30px;

	border-radius:0px;
}
.fnt{
	font-size:12px;
	font-family:monospace;
	font-weight:bolder;
	font-style:oblique;
	}
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
input[type=submit]
{
color:#33ccff;
background-color:#fff;
border-color:33ccff;
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
      <li><a href="Admin1.php" id="sv">Add member</a></li>
      <li><a href="pay.php" id="sv">Monthly Payment</a></li>
      <li><a href="payDetails.php" id="sv">Payment Details</a></li>
	  <li><a href="#" id="sv">About us</a></li>
      <li><button type="b" class="btn btn-default pull-right" id="sv" style=" margin-top:1%; margin-left:400px; border:none;" >Logout</button></li>
    </ul>
  </div>
</nav>
<div id="id4">
<table border="0" width="100%" class="table" style="margin-left:1px;">
	<tr >
		<td style="color:#660066;" width="12%">Enter Member ID</td>
		<td width="9%"><input type="text" name="mid1" placeholder="Membership No" /></td>
		<td width="5%"><input type="submit" value="Search"></td>
		<td width="5%"><input type="submit" value="View All"></td>
		<td style="color:#660066;" width="11%;">Enter Member ID</td>
		<td width="9%"><input type="text" name="mname1" placeholder="Enter Name" /></td>
		<td><input type="submit" value="Search"></td>
	</tr>
	</table>
	<table border="0" width="100%" class="table" style="margin-left:1px;">
	<tr >
	<th>Membership no</th>
	<th>bill no</th>
	<th>Name</th>
	<th>Mobile no</th>
	<th>Gym</th>
	<th>Pay date</th>
	<th>Paid Amount</th>
	
	</tr>
	
	<?php
	
	/*if($dbf)
	{
			$sql="SELECT pay_tab.mid,cname,mno,GNAME,pdt,pamnt,bid FROM pay_tab,reg_tab where pay_tab.mid = reg_tab.mid ";
			$res=mysql_query($sql);
			while($df=mysql_fetch_array($res))
			{
				echo '<tr class="fnt">
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
	}*/
	
	?>
	</table>
</div>

</body>
</html>