<?php
include_once 'Db.php';
$life=21600;
session_set_cookie_params($life);
session_start();
$_SESSION['gn'];
if($_SESSION['gn'] == null)
{
	header('Location: Gym.html');
}
$mid=$_POST['mno'];
$cname=$_POST['cname'];
$fname=$_POST['fname'];
$doj=$_POST['doj'];
$age=$_POST['age'];
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
$nat=$_POST['nat'];
$ide=$_POST['ide'];
$ogym=$_POST['ogym'];
$pbasis=$_POST['pbasis'];
$pamnt=$_POST['pamnt'];
$ptime=$_POST['pt'];
$addr=$_POST['adr'];
$pcode=$_POST['pin'];
$state=$_POST['st'];
$city=$_POST['city'];
$dis=$_POST['distc'];
$mail=$_POST['email'];
$gym=$_POST['gname'];
$tmem=$_POST['tmem'];


if(isset($_POST['vie']))
{
	if($dbf)
	{
		$sql="SELECT * FROM reg_tab WHERE mid=\"$mid\";";
		$res=mysql_query($sql);
		if($res)
		{
			$df=mysql_fetch_assoc($res);
			if(!$df)
			{
			?>
			<script language="javascript">
			alert("Record Not Found...!")
			window.location.href='Admin1.php?success';
			</script>
			<?php
			}
		}
	}
}
else if(isset($_POST['upd']))
{
	if($dbf)
	{
		$sql="UPDATE reg_tab SET cname=\"$cname\",fname=\"$fname\",doj=\"$doj\",age= $age WHERE mid =$mid";
		$res=mysql_query($res);
		if($res)
		{
			?>
			<script language="javascript">
			alert("Update Success...!")
			window.location.href='Admin1.php?success';
			</script>
			<?php
		}
		else
		{
			
			?>
			<script language="javascript">
			alert("not found...!")
			window.location.href='Admin1.php?success';
			</script>
			<?php
		}
	}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<link rel="shortcut icon" href="../logo.jpg" />
<meta name="description" content="Add,Remove,Update and View Member Data" >
<meta name="keywords" content="Add data,Member Data,Remove Member Data,Update Member Data,Member Profile,Handshake,Handshakeyou,Handshake User,Handshake admin,Handshake Attender ,Hand" >
<meta name="author" content="mantu pani,venketes achary">
<meta name="viewport" content="width=device-width.intial-scale=1.0">
<link href='new.css'  rel='stylesheet' type='text/css'/>
<link href='Reg.css'  rel='stylesheet' type='text/css'/>
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
</style>
<title>Online Register</title>
<script language="javascript">
</script>
<script language="javascript"  src="reg.js"  type="text/javascript"></script>
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
<table border="0" width="100%" height="100%"  >
<tr><td colspan="2" align="center"><fieldset class="corners" style="border:2px;"><h2>Online Register</h2></fieldset></td></tr>
<tr>
<td width="50%">
<form action="Reg.php" method="POST" name="f1">
<fieldset class="detail">
<legend align="center">Details</legend>
<table width="100%" BORDER="0" height="100%" >
<tr>
		<td> Membership no: </td>
		<td><input type="text" name="mno" id="id1" onblur="return onlyText(document.getElementById('id1'),'Invalid Data');" /></td>
		<td>Candidate name:</td>
		<td><input type="text" name="cname" value="<? echo $df['cname']; ?>" placeholder="Candidate name" id="id2" onblur="return plainText(document.getElementById('id2'),'Invalid Data');" /></td>
		<td>Father's/Guardian's Name:</td>
		<td><input type="text" name="fname" value="<? echo $df['fname'] ?>" id="id3" placeholder="Father's/Guardian's Name" onblur="return plainText(document.getElementById('id3'),'Invalid Data');" />
		</td>
</tr>
<tr>
		
		<td>Date:</td>
		<td><input type="date" name="doj" value="<?echo $df['doj'] ?>" /></td>
		<td>Age</td>
		<td><input type="number" name="age" placeholder="age" value="<?echo $df['age'] ?>"></td>
		<td>Mobile No:</td>
		<td><input type="text" name="mbno" placeholder="+91" value="<?echo $df['mno'] ?>" id="id4" onblur="return onlyNumeric(document.getElementById('id4'),'Invalid mobile number');"></td>
</tr>
<tr>
		<td>Occupation:</td>
		<td><input type="text" name="occp" placeholder="Occupation" value="<?echo $df['occp']; ?>" /></td>
		<td>Qualification:</td>
		<td>
			<select name="qual" style="width:88%;">
			<option>+2</option>
			<option>Graduation</option>
			<option>10th</option>
			<option>schooling</option>
			<option>others</option>
			</select>
		</td>
		<td> height: </td>
		<td><input type="text" name="height" placeholder="height" value="<?echo $df['height'] ?>" id="id5" onblur="onlyNumber(document.getElementById('id5'),'Invalid Data');"/></td>
</tr>
<tr>
		
		<td>weight:</td>
		<td><input type="text" name="weight" placeholder="weight" value="<?echo $df['weight'] ?>" id="id6" onblur="onlyNumber(document.getElementById('id6'),'Invalid Data');" ></td>
		<td>Marital Status:</td>
		<td>Married&nbsp;<input type="radio" name="msts" value="Married"/>Bachelor&nbsp;<input type="radio" name="msts" value="Bachelor" checked /></td>
		<td>Gender:</td>
		<td><select name="gen" style="width:88%;">
			<option>Male</option>
			<option>Female</option>
			<option>Kid</option>
			<option>others</option>
			</select>
		</td>
</tr>
<tr>
		<td> Blood Group: </td>
		<td>
			<select name="bg" style="width:88%;">
			<option>O+</option>
			<option>O-</option>
			<option selected>A+</option>
			<option>A-</option>
			<option>B+</option>
			<option>B-</option>
			<option>AB+</option>
			<option>AB-</option>
			<option>Others</option>
			</select>
		</td>
		<td> Candidate belongs: </td>
		<td>
			<select name="cb" style="width:88%;">
			<option>SC</option>
			<option>ST</option>
			<option selected>General</option>
			<option>OBC</option>
			<option>Others</option>
			</select>
		</td>
				<td> Criminal Case: </td>
		<td>Yes&nbsp;<input type="radio" name="crc" value="yes"/>No&nbsp;<input type="radio"  name="crc"  value="no" checked /></td>
</tr>
<tr>

		<td> Nationality: </td>
		<td>
			<select name="nat" style="width:88%;">
			<option selected>INDIAN</option>
			<option>OTHERS</option>
			</select>
		</td>
		<td> Identity </td>
		<td><input type="text" name="ide" placeholder="Identity Mark" value="<?echo $df['ide'] ?>"/></td>
		<td> Any Other Gym: </td>
		<td>Yes&nbsp;<input type="radio" name="ogym" value="yes" />No&nbsp;<input type="radio" name="ogym" value="no" checked /></td>
</tr>
<tr>
		<td> Payment Basis: </td>
		<td>
			<select name="pbasis" style="width:88%;">
			<option selected>Monthly(32 days)</option>
			<option>Quarterly(93 days)</option>
			<option>Half yearly(186 days)</option>
			<option>Yearly(372 days)</option>
			<option>Premium</option>
			<option>Others</option>
			</select>
		</td>
		<td> Paid Amount: </td>
		<td><input type="text" name="pamnt" placeholder="Amount" value="<?echo $df['amnt'] ?>" id="id7" onblur="onlyNumber(document.getElementById('id7'),'Invalid Data');" /></td>
		<td> Practice Time: </td>
		<td>
			<select name="pt" style="width:88%;">
				<option>Morning</option>
				<option>Evening</option>
				<option>Others</option>
			</select>
		</td>
</tr>
<tr>
		<td  valign="top"> Address: </td>
		<td><textarea rows="5" cols="20" name="adr" value="" placeholder="line" id="id8" onblur="addVal(document.getElementById('id8'),'Invalid Data');"><?echo $df['addr'] ?></textarea></td>
		<td valign="top"> Select Gym: </td>
		<td valign="top"><select name="gname" style="width:88%;">
				<option>Gym1</option>
				<option>Gym2</option>
				<option>Gym3</option>
				<option>Gym4</option>
				</select>
		</td>
		<td valign="top">Type Of Member:</td>
		<td valign="top">
				<select name="tmem" style="width:88%;">
					<option>A</option>
					<option>A+</option>
					<option>B</option>
					<option>B+</option>
					<option>C</option>
					<option selected>D</option>
				</select>
		</td>
</tr>
<tr>
		<td>&nbsp;</td>
		<td colspan="6"><input type="text" name="pin" value="<?echo $df['pcode'] ?>" placeholder="pincode" id="id9" onblur="return onlyNumber(document.getElementById('id9'),'Invalid Data');"  /></td>	
</tr>
<tr>
		<td>&nbsp;</td>
		<td colspan="5"><input type="text" value="<?echo $df['city'] ?>" name="city" id="id12" placeholder="City" onblur="return onlyText(document.getElementById('id12'),'Invalid Data');"></td>
</tr>
<tr>
		<td>&nbsp;</td>
		<td colspan="6"><input type="text" name="st" value="<?echo $df['state'] ?>" placeholder="state" id="id10" onblur="return onlyText(document.getElementById('id10'),'Invalid Data');"/></td>
</tr>
<tr>	
		<td>&nbsp;</td>
		<td colspan="6"><input type="text" name="distc" value="<?echo $df['dist'] ?>" placeholder="district" id="id11" onblur="return onlyText(document.getElementById('id11'),'Invalid Data');"/></td>
</tr>
<tr>
		<td>&nbsp;</td>
		<td colspan="5"><input type="text" value="<?echo $df['email'] ?>" name="email" placeholder="email@"></td>
</tr>
<tr>
<td colspan="6">&nbsp;</td>
</tr>
<tr>

<td  colspan="2">
	<input type="submit"  value="Register"  name="Entry" class="btx" style="width:100px;" />
</td>
<td align="center">
	<input type="submit"  value="Delete" name="del" class="btx" style="width:100px;" />
</td>
<td align="center">
	<input type="submit"  value="Update" name="upd" formaction="Admin1.php" class="btx" style="width:100px;"  />
</td>
<td  colspan="2" align="right">
	<input type="submit"  value="view" formaction="Admin1.php" name="vie" class="btx" style="width:100px;"   />
</td>

</tr>
</table>

</fieldset>
</form>
</td>
</tr>
</table>

</body>
</html>