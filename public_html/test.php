<?php
 include_once "php/db.php";
 $fname=$_POST['fname'];
 $mailID=$_POST['mid'];
 $sub=$_POST['subject'];
 $que=$_POST['query'];

 if(isset($_POST['submit']))
 {
	if($dbf)
	{
		$sql = "INSERT INTO feedback(fname, EmailID, subject, fback) VALUES
		 (\"$fname\", \"$mailID\",\"$sub\",\"$que\");";
		$result=mysql_query($sql);
		if($result)
		{
			?>
			<script type="text/javascript">
			alert('Thanks you to give your valuable feedback to us.'); 
        window.location.href='index.php?success'; 
			</script>
			<?php
		}
else
		{
			?>
			<script type="text/javascript">
			alert('Something Error will Happen.'); 
        window.location.href='index.php?fail'; 
			</script>
			<?php
		}
	}
 }
?>