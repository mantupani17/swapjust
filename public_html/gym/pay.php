<?php
include_once 'Db.php';
$life=21600;
session_set_cookie_params($life);
$mid=$_POST['p1'];
session_start();
$_SEESION['mno']=$mid;
//$_SEESION['gn'] ;
$bid=$_POST['p2'];
$mname=$_POST['p3'];
$mbasis=$_POST['p4'];
$addr=$_POST['p5'];
$doj=$_POST['p6'];
$pdt=$_POST['p8'];
$amnt=$_POST['p9'];
$mno=$_POST['p7'];

$nor=null;
/*if($_SEESION['gn'] == null)
{
	header('Location: Gym.html');
}*/

if($dbf)
{
						$sql2 = "select * from pay_tab ";
						$res2=mysql_query($sql2);
						$nor=mysql_num_rows($res2);
}
	
if(isset($_POST['b1']))
{
	$sql = "INSERT INTO pay_tab (mid,bid,pdt,pamnt) VALUES (\"$mid\", \"$bid\", \"$pdt\", \"$amnt\");";
	$sql1="UPDATE reg_tab set lpd=\"$pdt\" where mid=\"$mid\"";
	if($dbf)
	{
		$res1=mysql_query($sql1);
		$res=mysql_query($sql);
		if($res && $res1)
		{
			
			?>
			<script language="javascript">
			alert("Paid Successful...!")
			window.location.href='pay.php?success';
			</script>
			<?
		}
		else
		{
			?>
			<script language="javascript">
			alert("Unsuccessfull...!")
			window.location.href='pay.php?success';
			</script>
			<?
		}
	}
}

if(isset($_POST['b2']))
{
	$sql = "select cname,reg_tab.mid,pbasis,addr,doj,mno,pamnt from reg_tab,pay_tab where pay_tab.bid=\"$bid\" and reg_tab.mid=pay_tab.mid ";
	if($dbf)
	{
		
		$res=mysql_query($sql);
		if($res)
		{
			if($df=mysql_fetch_assoc($res))
			{
			$mid=$df['mid'];
			$mname=$df['cname'];
			$amnt=$df['pamnt'];
			$mbasis=$df['pbasis'];
			$doj=$df['doj'];
			$addr=$df['addr'];
			$mno=$df['mno'];
			}
			
		}
		else
		{
			?>
			<script language="javascript">
			alert("data Not Found...!")
			window.location.href='pay.php?success';
			</script>
			<?php
		}
	}
	else
	{
		echo 'mantu';
	}
}
if(isset($_POST['b7']))
{
	$sql = "select cname,pbasis,addr,doj,mno from reg_tab where mid LIKE \"$mid\"" ;
	if($dbf)
	{
		
		$res=mysql_query($sql);
		if($res)
		{
			if($df=mysql_fetch_assoc($res))
			{
			$mid=$df['mid'];
			$mname=$df['cname'];
			$amnt=$df['pamnt'];
			$mbasis=$df['pbasis'];
			$doj=$df['doj'];
			$addr=$df['addr'];
			$mno=$df['mno'];
			}
			
		}
		else
		{
			?>
			<script language="javascript">
			alert("data Not Found...!")
			window.location.href='pay.php?success';
			</script>
			<?php
		}
	}
	else
	{
		echo 'mantu';
	}
}


?>
<!DOCTYPE>
<html>
<head>
<link rel="shortcut icon" href="../logo.jpg" />
<title>Payment</title>
<link href="new.css" type="text/css" rel="stylesheet" />
</head>
<script src="jquery.min.js"></script>
<script language="javascript" type="text/javascript">
	
	$("#b6").live("click",function (){
		/*var contents=$("#div1").html();
		var pwind=window.open(",","height=200,width=200");
		pwind.document.write("<html><head><tite>Print Document</title>");
		pwind.document.write("</head><body>");
		pwind.document.write(contents);
		pwind.document.write("</body></html>");
		pwind.document.close();
		pwind.print();*/
		
	});
	function printDiv()
	{
		var contents=document.getElementById("div1").innerHTML;
		var fr1=document.createElement("iframe");
		fr1.name="fr1";
		fr1.style.position="absolute";
		fr1.style.top="-1000000px";
		document.body.appendChild(fr1);
		var fdoc=fr1.contentWindow ?fr1.contentWindow:fr1.contentDocument.document ?fr1.contentDocument.document:fr1.contentDocument;
		fdoc.document.open();
		fdoc.document.write("<html><head><tite>Print Document</title></head><body>");
		fdoc.document.write(contents);
		fdoc.document.write("</body></html>");
		fdoc.document.close();
		setTimeout(function ()
		{
			window.frames.fr1.focus();
			window.frames.fr1.print();
		document.body.removeChild(fr1);
		},500);
		return false;
		
	}
</script>
<body>
<h2 align="center" style="color:#0099FF"><u>Monthly Payment</u></h2>
<form ACTION="pay.php" method="POST" name="f1">

<table border="0px" width="100%">
	<tr>
	
		<td width="60%">
		<table border="0px" width="100%" cellpadding="8">
			<tr>
				<td align="right" width="20%" ><label>Membership ID :</label></td>
				<td>
				<input type="text" name="p1" placeholder="Mem ID" style="width:50%;" class="txtpay" value='<?php echo $mid; ?>'/>
				<td align="right" width="20%"><label>Bill NO :</label></td>
				<td><input type="text" name="p2"  class="txtpay" value="<?php echo $nor+1; ?>" /></td>
			</tr>
			<tr>
			<td align="right"><label> Name :</label></td>
			<td><input type="text" name="p3" class="txtpay" value='<?php echo $mname; ?>' /></td>
			<td align="right"><label>Monthly basics :</label></td>
			<td><input type="text" name="p4" class="txtpay" value='<?php echo $mbasis; ?>' /></td>
			</tr>
			<tr>
			<td align="right"><label>Address :</label></td>
			<td><input type="text" name="p5" class="txtpay" value='<?php echo $addr; ?>' /></td>
			<td align="right"><label>Date of join :</label></td>
			<td><input type="text" name="p6" class="txtpay"  value='<?php echo $doj; ?>' /></td>
			</tr>
			<tr>
			<td align="right"><label>Mobile no :</label></td>
			<td><input type="text" name="p7" class="txtpay" value='<?php echo $mno; ?>' /></td>
			<td align="right"><label>Date :</label></td>
			<td><input type="date" name="p8" class="txtpay" /></td>
			</tr>
			<tr>
			<td align="right"><label>Rupees :</label></td>
			<td><input type="text" name="p9" class="txtpay" value="<?php echo $amnt;?>" /></td>
			</tr>
		</table>
		</td>
<td valign="top">
	<fieldset class="fld">
	<legend class="lgd">Payment</legend>
		<div >
			<table border="0" width="100%" height="100%" id="div1">
			<tr>
			<td colspan="2" align="center"><img src="logo.jpg" width="200px" height="80px" /></td>
			</tr>
			<tr>
			<td align="left">Reciept No:</td>
			<td><? echo $bid; ?></td>
			</tr>
			<tr>
			<td align="left">Name:</td>
			<td><? echo $mname; ?></td>
			</tr>
			<tr>
			<td align="left">Date:</td>
			<td><? echo date("m/d/y"); ?></td>
			</tr>
			<tr>
			<td align="left">Amount:</td>
			<td><? echo $amnt; ?></td>
			</tr>
			<tr>
			<td colspan="2" align="right">Signature</td>
			</tr>
			</table>
		</div>
	</fieldset>
</td>
</tr>
<tr>
		<td colspan="2">
			<table border="0px" width="100%">
		<tr>
			<td><input type="submit" value="Pay" name="b1" class="btx" /></td>
			<td><input class="btx" type="submit" name="b7" value="Search Data" /></td>
			<td><input type="submit" value="Search Pay" name="b2" class="btx"  /></td>
			<td><input type="submit" formaction="del.php" value="Delete" name="b3" class="btx" /></td>
			<td><input type="submit"  value="View Paid Data" name="b4" class="btx" id="b04" /></td>
			<td><input type="submit" formaction="update.php" value="Update" name="b5" class="btx" /></td>
			<td><input type="button"  value="Print" id="b6" class="btx" onClick="printDiv();" /></td>
			
		</tr>
			</table>
		</td>
</tr>
<tr>
		<td valign="top">
			<fieldset class="fld">
				<legend class="lgd">Payment Table</legend>
				
				<table border="0px" width="100%">
					<tr>
						<th><label>Slo</label></th>
						<th><label>Bno</label></th>
						<th><label>Mid</label></th>
						<th><label>Name </label></th>
						<th><label>Address</label></th>
						<th><label>Mobile no</label></th>
						<th><label>Paid date</label></th>
						<th><label>Rupees</label></th>
					</tr>
					<?php 
					if($dbf)
					{
						$c=1;
						
						$sql = "select reg_tab.mid,cname,addr,mno,bid,pdt,pamnt from reg_tab,pay_tab where reg_tab.mid=pay_tab.mid";
						$res1=mysql_query($sql);
						if($res1)
						{
						while($df1=mysql_fetch_assoc($res1))
						{
							echo 
							'<tr align="center" style="font-size:12px;">
							<td>'.$c++.'</td>
							<td>'.$df1['bid'].'</td>
							<td>'.$df1['mid'].'</td>
							<td>'.$df1['cname'].'</td>
							<td>'.$df1['addr'].'</td>
							<td>'.$df1['mno'].'</td>
							<td bgcolor="red" Style="Color:white;">'.$df1['pdt'].'</td>
							<td>'.$df1['pamnt'].'</td>
							
							</tr>';
						}
						}
						else
						{
							echo 'Mantu';
						}
							
					}
					?>
					</div>
					</table>
					</fieldset>
			</td>
			<td valign="top">
					<fieldset class="fld">
				<legend class="lgd">Detailed information on Payment</legend>
				<div id="d2">
				<table border="0px" width="100%">
					<tr>
						<th><label>Slo</label></th>
						<th><label>Bno</label></th>
						<th><label>Mid</label></th>
						<th><label>Name </label></th>
						<th><label>Address</label></th>
						<th><label>Mobile no</label></th>
						<th><label>Paid date</label></th>
						<th><label>Rupees</label></th>
					</tr>
				<?php
		if($dbf)
			{
				
				$sql1 = "select cname,reg_tab.mid,pbasis,addr,doj,mno,pamnt,pay_tab.bid,pdt from reg_tab,pay_tab where pay_tab.mid =\"$mid\" and reg_tab.mid = \"$mid\";";
				$c=1;
				$res1=mysql_query($sql1);
				if($res1)
				{
					while($df1=mysql_fetch_assoc($res1))
					{
						echo 
							'<tr align="center">
							<td>'.$c++.'</td>
							<td>'.$df1['bid'].'</td>
							<td>'.$df1['mid'].'</td>
							<td>'.$df1['cname'].'</td>
							<td>'.$df1['addr'].'</td>
							<td>'.$df1['mno'].'</td>
							<td bgcolor="red" Style="Color:white;">'.$df1['pdt'].'</td>
							<td>'.$df1['pamnt'].'</td>
							</tr>';
					}
			
		}
		else
		{
			?>
			<script language="javascript">
			alert("data Not Found...!")
			window.location.href='pay.php?success';
			</script>
			<?php
		}
	}
	?>
				</table>
				</div>
			</fieldset>
		</td>
</tr>
</table>
</form>
</body>
</html>
