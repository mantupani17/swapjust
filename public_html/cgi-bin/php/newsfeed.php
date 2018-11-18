<?php
	include_once "db.php";
	$d=$_POST['DOE'];
	$news=$_POST['query'];
	
	if(isset($_POST['submit']))
	{
	if($dbf)
	{
		$sql="insert into news(news,DOE) values(\"$news\",\"$d\");";
		$result=mysql_query($sql);
		if($result)
		{
			?>
			<script type="text/javascript">
			alert('news Added Successfully...!'); 
			window.location.href='admin.php?success'; 
			</script>
			<?php
		}
		else
		{
			?>
			<script type="text/javascript">
			alert('There is a problem...!'); 
			window.location.href='admin.php?success'; 
			</script>
			<?php
		}
		
	}
	}
	if(isset($_POST['remove']))
	{
		$sql="truncate table news";
		if($dbf)
		{
			$r=mysql_query($sql);
			if($r)
			{
				?>
				<script>
				alert('All news cleared...!');
				window.location.href='admin.php?success';
				</script>
				<?php
			}
		}
	}
	?>
<!--<html>
<head>
<link href='homepage.css'  rel='stylesheet' type='text/css' />
<title>News Feed server scripting</title>
</head>
<body>
<form action="newsfeed.php" method="POST" name="newsfeed">
<table width="100%" height="70%" border="0">
<tr>
	<td width="30%" valign="top">Enter Your NEWS:</td>
	<td width="70%" height="50%" valign="top" ><textarea value="Query" class="impTxt" name="query" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Query';}">News</textarea>
	</td>
</tr>	
	<tr>
	<td>Date OF Entry:</td>
	<td height="25%"><input type="date" name="DOE" /></td>
</tr>
<tr>	
	<td colspan="2" height="25% "align="center" ><input type="submit" value="news" name="submit" />
	<input type="submit" value="Remove News" name="remove" />
	</td>
	
</tr>
</table>	
</form>
</body>
</html>-->