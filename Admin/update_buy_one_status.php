<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include '../sjfunctions/product.php';
$offcode = $_GET['offcode'];
$sql = "update hsy_buy_one set status = 'yes' where offer_code LIKE '".$offcode."'";
addNewProduct($sql);
                        ?>
			<script language="javascript" type="text/javascript">
			window.location.href='buy_one_offer_entry.php?success';
			</script>
			<?php
?>