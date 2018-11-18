<?php 
include_once 'db.php'; 
?> 
<!DOCTYPE html> 
<html> 
<head> 
<title>Server Side uploading images</title> 
<link rel="stylesheet" href="..//style.css" type="text/css" 
/> 
</head> 
<body> 
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
			<label>File Uploaded Successfully...  <a href="view.php">click here to view file.</a></label> 
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
</body> 
</html> 