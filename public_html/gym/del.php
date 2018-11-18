<?php
include_once 'Db.php';
$bid=$_POST['p2'];
	if(isset($_POST['b3']))
	{
		if($dbf)
		{
			$sql = "DELETE FROM pay_tab WHERE bid = $bid "; 
			$res=mysql_query($sql);
			if($res)
			{
				?>
			<script language="javascript" type="text/javascript">
			alert('Delete Successful...!'); 
			window.location.href='pay.php?success';
			</script>
			<?php
			
			}
			else{
				?>
			<script language="javascript" type="text/javascript">
			alert('Data Not Found...!'); 
			window.location.href='pay.php?success';
			</script>
			<?php
			
			}
		}
		else
		{
				?>
			<script language="javascript" type="text/javascript">
			alert('Database Not found...!'); 
			window.location.href='pay.php?success';
			</script>
			<?php
		}
	}
?>