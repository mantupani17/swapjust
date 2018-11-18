<!DOCTYPE>
<?php
ob_start();
include_once 'Db.php';
?>
<html>
<head>
<link rel="shortcut icon" href="../logo.jpg" />
<link href="new.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
</script>
<title>Setting</title>

<style type="text/css">
.vs
{
background-color:#33ccff;
}
#sv
{
background-color:#33ccff;
color:#fff;
margin-left:2px;
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
<script language="javascript">
$(document).ready(function(){
	
	$("#a1").click(function(){
		$("#id1").show();
		$("#fd").hide();
		$("#cd").show();
		$("#cp").hide();
		$("#id3").hide();
		$("#id4").hide();
		$("#dd").hide();
		$("#id5").hide();
	});
	$("#a2").click(function(){
		$("#id1").show();
		$("#fd").show();
		$("#cd").hide();
		$("#cp").show();
		$("#id3").hide();
		$("#id4").hide();
		$("#dd").hide();
		$("#id5").hide();
	});
	$("#a3").click(function(){
		$("#id1").hide();
		$("#id4").hide();
		$("#fd").hide();
		$("#cd").hide();
		$("#cp").hide();
		$("#dd").hide();
		$("#id2").show();
		$("#id5").hide();
	});
	$("#a4").click(function(){
		$("#id1").show();
		$("#id4").hide();
		$("#fd").hide();
		$("#cd").hide();
		$("#dd").show();
		$("#cp").show();
		$("#id3").hide();
		$("#id5").hide();
	});
	$("#b2").click(function(){
		$("#id3").show();
		$("#id1").hide();
		$("#id4").hide();
		$("#fd").hide();
		$("#cd").hide();
		$("#dd").hide();
		$("#cp").hide();
		$("#id5").hide();
		$("#sbu2").hide();
		$("#sbu1").show();
		$("#sbu3").hide();
	});
	hideAll();
	$("#b7").click(function(){
		$("#id4").show();
		$("#id5").hide();
		$("#id3").hide();
		$("#id1").hide();
		$("#fd").hide();
		$("#cd").hide();
		$("#dd").hide();
		$("#cp").hide();
	});
	$("#b8").click(function(){
		$("#id5").show();
		$("#id3").hide();
		$("#id4").hide();
		$("#id1").hide();
		$("#fd").hide();
		$("#cd").hide();
		$("#dd").hide();
		$("#cp").hide();
	});
	$("#b4").click(function(){
		$("#id3").show();
		$("#id1").hide();
		$("#id4").hide();
		$("#fd").hide();
		$("#cd").hide();
		$("#dd").hide();
		$("#cp").hide();
		$("#id5").hide();
		$("#sbu1").hide();
		$("#sbu2").hide();
		$("#sbu3").show();
		
	});
	$("#b3").click(function(){
		$("#id3").show();
		$("#id1").hide();
		$("#id4").hide();
		$("#fd").hide();
		$("#cd").hide();
		$("#dd").hide();
		$("#cp").hide();
		$("#id5").hide();
		$("#st2").hide();
		$("#sbu2").show();
		$("#sbu1").hide();
		$("#sbu3").hide();
		
	});
	$("#b7").click(function(){
		$("#id1").hide();
		$("#id4").hide();
		$("#fd").hide();
		$("#cd").hide();
		$("#cp").hide();
		$("#dd").hide();
		$("#id2").hide();
		$("#id5").hide();
		$("#id4").show();
	});
	$("#b8").click(function(){
		$("#id1").hide();
		$("#id4").hide();
		$("#fd").hide();
		$("#cd").hide();
		$("#cp").hide();
		$("#dd").hide();
		$("#id2").hide();
		$("#id5").hide();
		$("#id5").show();
	});
	function hideAll()
	{
		$("#id4").hide();
		$("#id5").hide();
		$("#id1").hide();
		$("#id3").hide();
		
	}
});
</script>
<style type="text/css" >
.des{
	border-radius:2px;
	background-color:#33ccff;
	margin-top:5px;
	margin-left:5px;
	
}
.cb{
	background-color:#FFF;
	color:33CCFF;
	border-radius:2px;
	font-family:monospace;
	font-weight:bolder;
	font-size:15px;
	height:35px;
	width:90px;
}
th{

	color:#fff;
	border-radius:0px;
}
.fnt{
	font-size:10px;
	font-family:monospace;
	font-weight:bolder;
	font-style:oblique;
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
      <li><a href="attDetails.php" id="sv">Attendance Details</a></li>
	  <li><a href="payDetails.php" id="sv">Payment details</a></li>
	  <li><a href="#" id="sv">About us</a></li>
      <li>
	  <form method="GET" action="logout.php" name="logout">
	  <input type="submit" name="logout" value="Logout" id="sv" style="margin-top:20%;-webkit-border-radius:10px;" />
	  </form>
	  </li>
    </ul>
  </div>
</nav>
<div class="container" style="margin-left:0%">
<ul class="nav nav-tabs">
<li><a href="#id" id="b3">New Admin</a></li>
<li><a href="#id3" id="b2" >Change Admin password</a></li>
<li><a href="#id3" id="b4" >Delete Admin ID</a></li>
<li><a href="#id1" id="a1" >Create Member</a></li>
<li><a href="#id1" id="a2" >Change Member Password</a></li>
<li><a href="#id" id="a3" >Member Details </a></li>
<li><a href="#id2" id="a4" >Delete Member</a></li>
</ul>
</div>
<table border="0" height="5%" width="100%" class="table">
<tr>
<td colspan="9"  align="center">
<form name="f1" action="createId.php" method="POST">
<div id='id3'>
<table border="0" class="des">
<tr>
	<td><input type="text" name="uname" placeholder="User name"/></td>
</tr>
<tr>
	<td><input type="password" name="upass" placeholder="password" id="st1"/>
</tr>
<tr>
	<td><input type="password" name="upass1" placeholder="Confirm password" id="st2"/>
</tr>
<tr>
	<td align="center">
	<input type="submit" name="sub1" value="Change" class="cb" id="sbu1"/>
	<input type="submit" name="sub2" value="Create" class="cb" id="sbu2"/>
	<input type="submit" name="sub3" value="Remove" class="cb" id="sbu3"/>
	</td>
</tr>
</table>
</div>
<div id='id1'>
	<table  border="0"  class="des" style="height:150px;">
	<tr>
	<td>
	<label>Select a Gym Name:</label>
	</td>
	<td valign="top"><select name="gname" style="width:86%; height:90%; margin-top:4px">
				<option>Gym1</option>
				<option>Gym2</option>
				<option>Gym3</option>
				<option>Gym4</option>
				<option>Gym5</option>
				<option>Gym6</option>
				<option>Gym7</option>
				</select>
	</td>
	</tr>
	<tr>
	<td>Password:</td>
	<td><input type="password" name="pass1" style="width:86%; height:80%; border:none;" /></td>
	</tr>
	<tr id="cp">
	<td>Confirm Password:</td>
	<td><input type="password" name="pass2" style="width:86%; height:80%; border:none;" /></td>
	</tr>
	<tr><td colspan="2" align="center">
	<input type="submit" name="create" value="Create" class="cb" id="cd" />
	<input type="submit" name="chn" value="Confirm" id="fd" class="cb" />
	<input type="submit" name="rem" value="Delete" id="dd" class="cb" /></td></tr>
	</table>
</div>
</form>
<form action="setin.php" method="POST" name="f2">
<div id="id2">
	<table width="100%" height="auto" border="0" class="table">
	<tr>
	<td align="left" width="9%"><label>Enter Name</label></td>
	<td align="left" width="10%"><input type="text" name="sn" placeholder="Member name"></td>
	<td align="left" width="9%"><input type="submit" name="search" value="Search" class="cb" /></td>
	<td align="left"><input type="submit" name="viewall" value="View All" class="cb" /></td>
	</tr>
	<table class="table"   >
	<tr  style="background-image:url(sm-3.jpg); background-size:100% 100%;" >
	<th>Sr.no</th>
	<th>ID</th>
	<th>Name</th>
	<th>Care OF</th>
	<th>Address</th>
	<th>City</th>
	<th>PIN</th>
	<th>State</th>
	<th>District</th>
	<th>Mobile no</th>
	<th>Gym</th>
	<th>BG</th>
	<th>Height</th>
	<th>Weight</th>
	</tr>
	<?php
	if(isset($_POST['viewall']))
	{
	if($dbf)
	{
			$sql="SELECT * FROM reg_tab";
			$res=mysql_query($sql);
                        $cnt=1;
			while($df=mysql_fetch_array($res))
			{
				echo '<tr align="center" class="fnt">
                            <td>'.$cnt.'</td>
							<td>'.$df['mid'].'</td>
							<td>'.$df['cname'].'</td>
							<td>'.$df['fname'].'</td>
							<td>'.$df['addr'].'</td>
							<td>'.$df['city'].'</td>
							<td>'.$df['pcode'].'</td>
							<td>'.$df['state'].'</td>
							<td>'.$df['dist'].'</td>
							<td>'.$df['mno'].'</td>
							<td>'.$df['GNAME'].'</td>
							<td>'.$df['bg'].'</td>
							<td>'.$df['height'].'</td>
							<td>'.$df['weight'].'</td>
					</tr>';
                       $cnt++;
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
	if(isset($_POST['search']))
	{
		$cname=$_POST['sn'];
		if($dbf)
		{
			$sql="SELECT * FROM reg_tab WHERE cname LIKE \"$cname%\";";
			$res=mysql_query($sql);
			$cnt=1;
			if($res)
			{
					while($df=mysql_fetch_assoc($res))
					{
						echo '<tr align="left" class="fnt">
							<td>'.$cnt.'</td>
							<td>'.$df['mid'].'</td>
							<td>'.$df['cname'].'</td>
							<td>'.$df['fname'].'</td>
							<td>'.$df['addr'].'</td>
							<td>'.$df['city'].'</td>
							<td>'.$df['pcode'].'</td>
							<td>'.$df['state'].'</td>
							<td>'.$df['dist'].'</td>
							<td>'.$df['mno'].'</td>
							<td>'.$df['GNAME'].'</td>
							<td>'.$df['bg'].'</td>
							<td>'.$df['height'].'</td>
							<td>'.$df['weight'].'</td>
					</tr>';
					$cnt++;
					}
					
			}
			else
			{
			?>
			<script language="javascript">
			alert("Record not found...!")
			window.location.href='setin.php?success';
			</script>
			<?php
			}
		}
	}
	?>
	
	</table>
</div>
</form>
</td>
</tr>
</table>

</body>
</html>
<?php ob_end_flush(); ?>
