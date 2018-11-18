<?php
include '../swapjustconfig/Swapjust_Connection.php';
$salesProduct = new Swapjust_Connection();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$pcode = $_GET['pcode'];
$sql = 'update hsy_sales set status = "yes"  where product_code LIKE "'.$pcode.'"';
$salesProduct->execute($sql);
            ?>
                        <script language="javascript" type="text/javascript">
			window.location.href='Admin_Sales_Entry.php?success';
			</script>
	<?php
?>
