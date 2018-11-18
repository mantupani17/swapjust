<?php
$life=21600;
session_set_cookie_params($life);
session_start();
if($_SESSION['gn'] == null)
{	
header('Location: Gym.html');
}
?>
<!DOCTYPE>
<html>
<head><link rel="shortcut icon" href="../logo.jpg" /><meta name="description" content="Handshakeyou Admin Login" ><meta name="keywords" content="Member Profile,Handshake,Handshakeyou,Handshake User,Handshake admin,Handshake Attender,Hand,admin page,handshakeyou admin login" ><meta name="author" content="mantu pani,venketes achary"><meta name="viewport" content="width=device-width.intial-scale=1.0">
<!--<link href="new.css" rel="stylesheet" type="text/css" />--><link href="new.css" rel="stylesheet" type="text/css" /><script type="text/javascript" src="jquery-3.1.1.min.js"></script><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"><script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Attender</title><style type="text/css">.vs{background-color:#33ccff;}#sv{background-color:#33ccff;color:#fff;margin-left:2px;}#sv:hover{	 -webkit-transition: all 0.5s ease-in-out;   -moz-transition: all 0.5s ease-in-out;   -o-transition: all 0.5s ease-in-out;   -ms-transition: all 0.5s ease-in-out;   transition: all 0.5s ease-in-out;	-webkit-border-radius:10px;	-webkit-box-shadow:0px  0px 5px 5px white;	background-color:#fff;	color:#33ccff;}</style>
</head>
<body><nav class="navbar navbar-default vs">  <div class="container-fluid">    <div class="navbar-header">      <a class="navbar-brand" href="http://www.handshakeyou.com" id="sv">handshakeyou.com</a>    </div>    <ul class="nav navbar-nav">      <li><a href="Admin1.php" id="sv">Member Entry</a></li>      <li><a href="" id="sv">Workout</a></li>      <li><a href="member.php" id="sv">Member Profile</a></li>	  <li><a href="setin.php" id="sv">Settings</a></li>	  <li><a href="#" id="sv">About us</a></li>	  <li><label id="sv" style="margin-top:25%;color:black;"><?php echo $_SESSION["gn"]; ?></label></li>	  <li>	  <form method="GET" action="logout.php" name="logout">	  <input type="submit" name="logout" value="Logout" id="sv" style="margin-top:20%;-webkit-border-radius:10px;" />	  </form>	  </li>    </ul>  </div></nav>

</body>
</html>