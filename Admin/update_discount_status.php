<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include '../sjfunctions/product.php';
$pid = $_GET['pid'];
$sql = "update hsy_offer set status = 'yes' where product_code LIKE '".$pid."'";
addNewProduct($sql);
?>
                        <script language="javascript" type="text/javascript">
			window.location.href='new_discount_offer_entry.php?success';
			</script>
	<?php
?>
