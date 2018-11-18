<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
include '../sjfunctions/product.php';
$ocode = $_POST['ocode'];
$pcode1  = $_POST['prod_code'];
$pcode2  = $_POST['prod_code1'];
$offer_name = $_POST['offer_name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$hour = $_POST['hour'];
$edate = date('Y-m-d H:i:s');
$status = "no";
if(isset($_POST['add']))
{
    $sql = "INSERT INTO hsy_buy_one(offer_code,offer_name,first_product_code,second_product_code,price,quantity,edate,hour,status) VALUES('".$ocode."','".$offer_name."','".$pcode1."','".$pcode2."',".$price.",".$quantity.",'".$edate."',".$hour.",'".$status."')";
    addNewProduct($sql);
                    ?>
			<script language="javascript" type="text/javascript">
			window.location.href='buy_one_offer_entry.php?success';
			</script>
			<?php
}
?>
