<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include '../sjfunctions/product.php';
       $dt = date('Y-m-d H:i:s');
       $pid = $_POST['prod_code'];
       $quantity =$_POST['quantity'];
       $discount =$_POST['discount'];
       $hour = $_POST['hour'];
       $status = 'no';
       $sql = "INSERT INTO hsy_offer(product_code,quantity,discount,edate,hour,status) VALUES('".$pid."',".$quantity.",".$discount.",'".$dt."',".$hour.",'".$status."');";
       addNewProduct($sql);
       ?>
                        <script language="javascript" type="text/javascript">
			window.location.href='new_discount_offer_entry.php?success';
			</script>
	<?php
?>
