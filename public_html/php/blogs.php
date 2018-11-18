<?php
include_once "db.php";
?>
<html>
<head>
<meta charset="UTF-8" >
<meta http-equiv="refresh" content="30" >
<meta name="keywords" content="products,feedback,gallery,handshake you,about us,gyms,nutritions,health tips,fitness tips">
<meta name="description" content="this site is not properly uploaded but we upload with in a short period of time.">
<meta name="author" content="Mantu pani,Venketes achary,Om sankar" >
<title>Handshake you-Blogs</title>
<link href='../homepage.css'  rel='stylesheet' type='text/css' />
<!--<script src="js/jquery.min.js"></script>-->
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
			});
		});
	</script>


</head>
<body background="../wp.jpg">
<div class="menu" id="menu-bar">
	<table border="0px" width="100%" style="margin-left:2px;" height="100%">
	<tr><td width="20%"><img src="Untitled-1 copy.jpg" /></td>
	<td width="80%">
		<ul style="margin-left:10px;">
			<li class="active"><a href="../index.php" >Home</a></li>
			<li><a href="abtus.php" >About</a></li>
			<li><a href="viewgym.php" >Sports</a></li>
			<li><a href="classes.php" >Education</a></li>
			<!--<li><a href="php/viewgym.php" >Gyms</a></li>
			<li><a href="blogs.php" >Blogs</a></li>-->
			<li><a href="galary.php" >Gallery</a></li>
			<li><a href="../tips.html" >handshake Tips</a></li>
			<li> <div class="bo"><form class="for cf">
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
<section>

<div class="mid-section">
<p align="center" >Feedbacks </p>
<?php
	$sql="SELECT * FROM feedback"; 
				$result_set=mysql_query($sql); 
				$i=1;
				while($row=mysql_fetch_array($result_set)) 
				{ 
					$fname=$row['fname'];
					$mailid=$row['EmailID'];
					$fb=$row['fback'];
					 ?>
					 <p class="feed-blocks">Name:&nbsp;<?php echo $fname;?><br/>
					 Emai ID:&nbsp;<?php echo $mailid;?><br/>
					 Feedback:&nbsp;<?php echo $fb;?></p><br/><br/>
					 <?php
					
				}
?>

</div>
</section>
</body>
</html>