<?php
include_once "db.php";
?>
<html>
<head>
<meta>
<title>galary</title>
<link href='homepage.css'  rel='stylesheet' type='text/css' />
<link href="css/galary.css" rel="stylesheet" type="text/css" />
<link href="css/reg.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="menu" id="menu-bar">
	<table border="0px" width="100%" style="margin-left:2px;" height="100%">
	<tr><td width="20%"><img src="Untitled-1 copy.jpg" /></td>
	<td width="80%">
		<ul style="margin-left:10px;">
			<li class="active"><a href="homepage.php" >Home</a></li>
			<li><a href="aboutus.php" >About</a></li>
			<li><a href="trainers.php" >Trainers</a></li>
			<li><a href="classes.php" >Classes</a></li>
			<li><a href="viewgym.php" >Gyms</a></li>
			<li><a href="prices.php" >Prices</a></li>
			<li><a href="galary.php" >Gallery</a></li>
			<li><div class="bo"> 
		
<form class="for cf">
<input type="text" placeholder="search here" required>
<button type="submit" />search</button>
</form>
</div>
</li>
</ul>
</td>
</tr>
</table>
</div>
<div class="txt">Health iz wealth</div>
<div class="txt1">gyming is the best way to stay fit</div>
<div style="font-size:24px; color:#CCCCCC">" U fit life Hit "</div>
<table border="0px" width="auto">
<tr>
<?php
				$sql="SELECT * FROM image_tab"; 
				$result_set=mysql_query($sql);
				$i=1;
				while($row=mysql_fetch_array($result_set))
				{
					
					if($i>4)
					{
				?>
				</tr><tr>
				<?php
				$i=1;
					}
					else
					{
					$fname=$row['FNAME'];
					?>
					
				<td><div class="gal dekhiba_fst"><img src="uploads\<?php echo $fname;?> " alt="<?php echo $fname; ?>" /></td>
					<?php
					$i++;
					}
				}
?>

</table>
<div>
<table border="1px" width="100%" class="ftr">
<tr>
<td align="center" colspan="3"><h2>Handshake YOU</h2></td>
</tr>
<tr> 			
<td rowspan="2" width="40%" valign="top">
<p class="sus"><b>Menu</b></p>
<div class="an">
<p class="alt"><a class="fsa" href="reggym.html">Gym Register</a></p>
<p class="alt"><a class="fsa" href="sginupmemb.html"> Member Register</a></p>
<p class="alt"><a class=" fsa" href="galary.php">Galary</a></p>
<p class="alt">&copy;opy rights reserved by www.handshakeyou.com</p></div>
</td>
<td width="20%" rowspan="2" valign="top">
<p class="icn"><span><a href="www.facebook.com/handshakyou"><img width="25px" height="25px" src="fb.jpg"></a></p>
<a href=""><img src="twt.jpg" /></a></span>
</td>
<td rowspan="2" width="40%" valign="top">
<form action="test.php" method="POST" name="feedback">
<table border="0px" width="100%" height="100%" class="fback">
<tr>
	<td colspan="2" align="center" class="feedbacck">
	feedback
	</td>
</tr>
	<tr>
		<td>Full Name:</td>
		<td><input height="100%" type="text" value="Name" name="fname" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Name';}" /></td>
		</tr>
	<tr>
		<td>Mail ID:</td>
		<td><input type="text" value="emali @" name="mid" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'email@';}" /></td>
		</tr>
	<tr>
		<td>Feedback:</td>
		<td><input type="text" value="Subject" name="subject"  onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Subject';}" /></td>
		</tr>
	<tr>
	<td valign="top">Query:</td>
	<td><textarea value="Query"  name="query" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Query';}">Query</textarea>
	</td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input  type="submit" value="Drope Your Query" class="impBTn" name="submit" alt="feedback" /></td>
		</tr>
	
</table>
</form>
</td>
</tr>

</table>
</div>
</body>
</html>
