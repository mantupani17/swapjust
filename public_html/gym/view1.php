<?php
include_once "Db.php";
$sname=$_POST['snm'];
?>
<html>
<head>
<link href="new.css" type="text/css" rel="stylesheet" />
</head>
<body>
<table width="100%" border="0px">
		<tr bgcolor="green">
			<th>sr.no</th>
			<th>Mid</th>
			<th>name</th>
			<th>Last Paid Date</th>
			<th>Branch</th>
		</tr>
		
	<?php
	if(isset($_POST['sn']))
	{
	if($dbf)
	{
		$sql="select * from reg_tab where cname LIKE \"$sname%\";";
		$res=mysql_query($sql);
		//$res1=mysql_query($sql);
		if($res)
		{
			while($df=mysql_fetch_assoc($res))
			{
			
			echo '<tr align="center"  class="hfnt">
			<td width="5%">'.$c++.'</td>
			<td width="10%">'.$df['mid'].'</td>
			<td width="40%">'.$df['cname'].'</td>
			<td width="20%">'.$df['lpd'].'</td>
			<td width="25%">'.$df['GNAME'].'</td>
			</tr>';
			}
		}
		else{
			echo '<tr><td colspan=\'5\'>REsultset Error</td></tr>';
		}
	}
	else
	{
		echo '<tr><td colspan=\'2\'>Database not found</td></tr>';
	}
	}
	?>
	
</table>
</body>
</html>
