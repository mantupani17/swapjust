<?php
	/*include_once "db.php";
	
		function show()
		{
			?>
			<form action="admin.php" method="POST">
			<table border="1px" class="menu-bar">
				<tr>
					<th><input type="submit" name="img" value="Image Uploads"/></th>
					<th><input type="submit" name="news" value="Set News"/></th>
					<th><input type="submit" name="classes" value="Set Classes"/></th>
					<th><input type="submit" name="htips" value="Health And Tips"/></th>
				</tr>
			</table>
			</form>
			<?php
		}
		function uploads()
		{
			if(isset($_POST['news']))
			{
				?>
				<td colspan="3">
					<table border="1px" width="100%" height="auto">
					
					<tr>
						<td>
						<div id="header"> 
							<label>Set News Feed</label> 
						</div> 
						<div id="body">
						<form action="newsfeed.php" method="POST">
							<label style="margin-top:10px;">Enter Tips:</label>
							<Textarea value="Enter Tips" name="query" cols="100" rows="5"></textarea>
							<br/><label> Select date:</label><input type="date" name="DOE" />
							<input type="submit" value="news" name="submit" />
							<input type="submit" value="Remove News" name="remove" />
						</form>
						</div>
						<div id="footer"> 
							<label>About us <a href="">mantuwaterfall@gmail.com</a></label> 
						</div> 
						</td>
					</tr>
					</table>
				</td>
				<?php
			}
			else if(isset($_POST['htips']))
			{
				?>
				<td colspan="3">Mantu</td>
				<?php
			}
			else if(isset($_POST['classes']))
			{
				?>
				<td colspan="3">Mantu</td>
				<?php
			}
			else if(isset($_POST['img']))
			{
				?>
				<td colspan="3" align="center">
					<table border="1px" width="100%" height="auto">
					
					<tr>
						<td>
						<div id="header"> 
							<label>Admin form for Image uploading</label> 
						</div> 
						<div id="body"> 
						<form action="upload.php" method="post" enctype="multipart/form-data"> 
							<input type="file" name="file" class="cont"/> 
							<button type="submit" name="btn-upload">upload</button> 
						</form> 
				<br /><br /> 
			<?php 
		if(isset($_GET['success'])) 
		{ 
			?> 
        <label>File Uploaded Successfully...</label> 
		<?php 
		} 
		else if(isset($_GET['fail'])) 
		{ 
		?> 
        <label>Problem While File Uploading !</label> 
		<?php 
		} 
		else 
		{	 
			?> 
			<label>Try to upload any files(.jpg,.gif,and all Image files)</label> 
		<?php 
 } 
 ?> 
</div>
<div id="footer"> 
<label>About us <a href="">mantuwaterfall@gmail.com</a></label> 
</div>  
						</td>
					</tr>
					</table>
				</td>
				<?php
			}
		}
		
?>
*/
<html>
<head>
<title>My Admin </title>
<link href='admin.css'  rel='stylesheet' type='text/css' />
<link href='..//style.css'  rel='stylesheet' type='text/css' />

<!--<script type="text/javascript" src="admin.js"></script>
<script src="jquery-1.11.3.min.js"></script>-->

</head>
<body>

<table border="1px" class="menu-bar">
<tr>
	<td colspan="3">Admin Page</td>
</tr>
	<tr>
		<form action="admin.php" method="POST" name="fuid">
		<td>User ID:<input type="text" placeholder="User ID" name="uid"/></td>
		<td>Password:<input type="Password" placeholder="Password" name="pass"/></td>
		<td><input type="submit" name="submit" /></td>
		</form>
	</tr>
<tr>
	<td colspan="3" align="center">
		<?php
		if(isset($_POST['submit']))
		{
		show();
		}
		
		?>
	</td>
</tr>
<tr>
<?php
	uploads();
?>
</tr>
</table>

</body>
</html>