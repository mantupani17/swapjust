<?php
include '../Objects/Sales.class.php';
include '../sjfunctions/product.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$product_code = $_POST['pcode'];
$quantity = $_POST['quantity'];
$mrp= $_POST['mrp'];
$discount = $_POST['discount'];
$date_of_entry = date('Y-m-d H:i:s');
$res = 'no'; 
$sales = new Sales($product_code, $discount, $date_of_entry, $quantity, $res, $mrp);
$sql = "insert into hsy_sales(product_code,quantity,mrp,discount,edate,status) values"
        . " ('".$sales->getProduct_code()."',".$sales->getQuantity().",".$sales->getMrp().","
        . "".$sales->getDiscount().",'".$sales->getDate_of_entry()."','".$sales->getRes()."')";
addSalesProduct($sql);
?>
                        <script language="javascript" type="text/javascript">
			window.location.href='Admin_Sales_Entry.php?success';
			</script>
	<?php
?>
