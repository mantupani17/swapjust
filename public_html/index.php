<?php
include_once "db.php";
?>
<html>
<head>
<link rel="shortcut icon" href="logo.jpg" />
<meta charset="UTF-8" >
<meta http-equiv="refresh" content="30" >
<meta name="keywords" content="products,feedback,gallery,handshake you,about us,gyms,nutritions,health tips,fitness tips">
<meta name="description" content="this site is not properly uploaded but we upload with in a short period of time.">
<meta name="author" content="Mantu pani,Venketes achary,Om sankar" >
<title>Handshake you</title>
<link href='homepage.css'  rel='stylesheet' type='text/css' />
<script src="js/jquery.min.js"></script>
<link href="css/img-slider.css" rel="stylesheet" type="text/css" />
    <script src="js/img-slider.js" type="text/javascript"></script>
    <link href="css/t-text.css" rel="stylesheet" type="text/css" />
    <script src="js/t-text.js" type="text/javascript"></script>
    <link href="css/general.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
        
    </script>
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
			});
		});
		imageSlider.thumbnailPreview(function (thumbIndex) { 
		return "<img src='images/thumb" + (thumbIndex + 1) + ".jpg' style='width:100px;height:60px;' />"; 
		});
	</script>

</head>
<body background="wp.jpg">

	<div class="menu" id="menu-bar">
	<table border="0px" width="100%" style="margin-left:2px;" height="100%">
	<tr><td width="20%"><img src="logo1.jpg" /></td>
	<td width="80%">
		<ul style="margin-left:10px;">
			<li class="active"><a href="index.php" >Home</a></li>
			<li><a href="php/abtus.php" >About</a></li>
			<li><a href="php/viewgym.php" >Products</a></li>
			<li><a href="php/classes.php" >Education</a></li>
			<!--<li><a href="php/viewgym.php" >Gyms</a></li>-->
			<li><a href="php/blogs.php" >Blogs</a></li>
			<li><a href="php/galary.php" >Gallery</a></li>
			<li><a href="tips.html" >handshake Tips</a></li>
                        <li><a href="gym/Gym.html" >Gym</a></li>
			<!--<li> <div class="bo"><form class="for cf">
<input type="text" placeholder="search here" required>
<button type="submit" />search</button>
</form>
</div>
</li>-->
</ul>
</td>
</tr>
</table>
</div>
<div>
<table border="0px" width="100%" height="auto">
<tr><td align="center">
<div id="sliderFrame">
        <div id="slider">
            <img src="hg1.jpg" alt="work in progress" />
            <img src="hg1.jpg" alt="wait several day" />
            <img src="hg1.jpg" alt="coming soon" />
            <img src="hg.jpg" alt="coming soon" />
        </div>
	</div>
</td></tr>
</table>

<div>
<table border="0px" width="100%" height="auto" >
<tr>
	<td> 
			<a href="#"><img src="hf.jpg" width="100%" height="auto" style="border-radius:10px;" /></a>
	</td>
	<td>
		<a href="#"><img src="tr.jpg" width="100%" height="auto"  style="border-radius:10px;" /></a>
	</td>
	<td>
		<a href="#"><img src="hf.jpg" width="100%" height="auto"  style="border-radius:10px;" /></a>
	</td>
	<td>
		<a href="#"><img src="tr.jpg" width="100%" height="auto"  style="border-radius:10px;" /></a>
	</td>
	<td>
		<a href="#"><img src="hf.jpg" width="100%" height="auto"  style="border-radius:10px;" /></a>
	</td>
	<td>
		<a href="#"><img src="tr.jpg" width="100%" height="auto"  style="border-radius:10px;" /></a>
	</td>
</tr>
<tr>
	<td> 
			<a href="#"><img src="hf.jpg" width="100%" height="auto" style="border-radius:10px;" /></a>
	</td>
	<td>
		<a href="#"><img src="tr.jpg" width="100%" height="auto"  style="border-radius:10px;" /></a>
	</td>
	<td>
		<a href="#"><img src="hf.jpg" width="100%" height="auto"  style="border-radius:10px;" /></a>
	</td>
	<td>
		<a href="#"><img src="tr.jpg" width="100%" height="auto"  style="border-radius:10px;" /></a>
	</td>
	<td>
		<a href="#"><img src="hf.jpg" width="100%" height="auto"  style="border-radius:10px;" /></a>
	</td>
	<td>
		<a href="#"><img src="tr.jpg" width="100%" height="auto"  style="border-radius:10px;" /></a>
	</td>
</tr>
</table>
</div>
<table border="0px" width="100%"><tr><td>
<div class="jws">
<p><i>Join With Us <br>Start a Blue Revolution Save Water...!!!!</i></p>
</div>
</td>
<td>
<img src="be.jpg" width="25%" height="40%" />
</td>
</tr>
</table>
<div>
    <!--this webpage is made by mantu pani and A.Venketes Achary-->
<marquee  direction="left" >
				<h6>
				<b>NEWS FEED:</b>
				<i>
				<?php 
				$sql="SELECT * FROM news"; 
				$result_set=mysql_query($sql); 
				$i=1;
				while($row=mysql_fetch_array($result_set)) 
				{ 
					 echo $i++,".",$row['news'],"&nbsp;&nbsp;&nbsp;";
					
				}
				?>
				</i>
				</h6>
</marquee>
<table border="0px" width="100%" class="ftr">
<tr>
<td align="center" colspan="3"><h2>Handshake </h2></td>
</tr>
<tr> 			
<td rowspan="2" width="20%" valign="top">
<p class="sus"><b>Menu</b></p>
<div class="an">
<p class="alt"><a class="fsa" href="reggym.html">Gym Register</a></p>
<p class="alt"><a class="fsa" href="sginupmemb.html"> Member Register</a></p>
<p class="alt"><a class="fsa" href="php/galary.php">Galary</a></p>
<p class="alt"><a class="fsa" href="php/admin.php">Admin</a></p>
<p class="alt"><a href="php/abtus.php" class="fsa">about us</a></p>
</div>
</td>
<td width="40%" rowspan="2" valign="top">
<div>
<p class="icn"><span><a href="www.facebook.com/handshakyou">
<img width="25px" height="25px" src="fb.jpg"></a>
<a href=""><img src="twt.jpg" /></a></span></p>
<p class="alt">&copy;opy rights reserved by www.handshakeyou.com</p></div>
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
		<td colspan="2" align="center">
		<input  type="submit" value="Drope Your Query" class="impBTn" name="submit" alt="feedback" />
		</td>
		</tr>
	
</table>
</form>
</td>
</tr>

</table>
</div>

	</body>
</html>