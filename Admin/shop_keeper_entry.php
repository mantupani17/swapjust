<?php 
session_start();
include '../sjfunctions/product.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    $sname = 'MY MART';
    $productName=$_POST['pName'];
    $quantity=$_POST['qun'];
    $mrp=$_POST['mrpr'];
    $sellingprice=$_POST['spr'];
    $status = 'no';
    $edate = date('Y-m-d H:i:s');
    if(isset($_POST['en']))
    {
        $sql = "insert into hsy_sk_data(shop_name,product_name,quantity,mrp,sj_price,status,edate) "
                . "values('".$sname."','".$productName."',".$quantity.",".$mrp.",".$sellingprice.",'".$status."','".$edate."')";
        addNewProduct($sql);
        ?>
                        <script language="javascript" type="text/javascript">
			window.location.href='add-new-data-shop-keeper.php?success';
			</script>
	<?php
    }
?>