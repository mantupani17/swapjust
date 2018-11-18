<?php
include_once('Db.php');
$life = 26000;
session_set_cookie_params($life);
session_start();
$_SESSION['gn'];
$mid = $_POST['mid'];

if($_SESSION['gn'] == null)
{
	header('Location: Gym.html');
}

if(isset($_POST['getMem']))
{
	if($dbf)
	{
		$sql="SELECT * FROM reg_tab WHERE mid=\"$mid\";";
		$res=mysql_query($sql);
		if($res)
		{
			$df = mysql_fetch_assoc($res);
			if(!$df)
			{
			?>
			<script language="javascript">
			alert("Record Not Found...!")
			window.location.href='member.php?success';
			</script>
			<?php
			}
		}
	}
}
?>
<html>
<head>
<meta name="description" content="view member profile" >
<meta name="keywords" content="Member Profile,Handshake,Handshakeyou,Handshake User,Handshake admin,Handshake Attender ,Hand" >
<meta name="author" content="mantu pani,venketes achary">
<meta name="viewport" content="width=device-width.intial-scale=1.0">
<link rel="shortcut icon" href="../logo.jpg" />
<!--<link href="new.css" rel="stylesheet" type="text/css" />-->
<link href="new.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
</script>
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
label{
	font-style:bold;
	color:black;
	
}
</style>
<title>Memeber Info</title>
</head>
<body>
<nav class="navbar navbar-default vs">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://www.handshakeyou.com" id="sv">handshakeyou.com</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="Admin1.php" id="sv">Member Entry</a></li>
      <li><a href="" id="sv">Workout</a></li>
      <li><a href="member.php" id="sv">Member Profile</a></li>
	  <li><a href="setin.php" id="sv">Settings</a></li>
	  <li><a href="#" id="sv">About us</a></li>
	  <li><label id="sv" style="margin-top:25%;color:black;"><?php echo $_SESSION["gn"]; ?></label></li>
	  <li>
	  <form method="GET" action="logout.php" name="logout">
	  <input type="submit" name="logout" value="Logout" id="sv" style="margin-top:20%;-webkit-border-radius:10px;" />
	  </form>
	  </li>
    </ul>
  </div>
</nav>
<div style="text-align:center;">
<form action="member.php" method="POST" name="mem">
<input type="text" name="mid" placeholder="Enter Member Id" />
<input type="submit" name="getMem" value="view" />
</form>

<label>Name:</label>&nbsp;<?php echo $df['cname']?><br/>
<label>Care OF:</label>&nbsp;<?php echo $df['fname']?><br/>
<label>Address:</label>
<p>
<?php echo $df['addr']?><br/>
<?php echo $df['city']?><br/>
<?php echo $df['pcode']?><br/>
<?php echo $df['state']?><br/>
<?php echo $df['dist']?><br/></p>
<label>Age:</label><?php echo $df['age']?><br/>
<label>contact mo:</label><?php echo $df['mno']?><br/>
<label>Mail ID:</label><?php echo $df['email']?><br/>
<label>Weight:</label><?php echo $df['weight']?><br/>
<label>Height:</label><?php echo $df['height']?><br/>
<label>Blood Group:</label><?php echo $df['bg']?><br/>
<label>Member of Gym:</label><?php echo $df['GNAME']?><br/>
<label>Date of Join:</label><?php echo $df['doj']?><br/>
<label>Payment Scheme: </label><?php echo $df['pbasis']?><br/>
<label>Amount</label> <?php echo $df['amnt']?><br/>
<label>Last Paid Date</label> <?php echo $df['lpd']?><br/>
<label style="font-size:20px;">Payment Details</label><br/>
<table border="2px" align="center">
<tr>
<th>Date Of Paid</th>
<th>Amount</th>
</tr>
<?php 
if(isset($_POST['getMem']))
{
	$mid = $_POST['mid'];
	if($dbf)
	{
		$sql1="SELECT * FROM pay_tab WHERE mid LIKE \"$mid\";";
		$res1=mysql_query($sql1);
		if($res1)
		{
			while($df1 = mysql_fetch_assoc($res1))
			{
				 echo '<tr><td>'.$df1['pdt'].'</td><td>'.$df1['pamnt'].'</td></tr>';
			}
		}
	}
}
?>
</table>
</div>
</body>
</html>