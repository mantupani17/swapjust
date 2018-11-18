<?php 
include '../Objects/Offer.class.php';
include '../sjfunctions/product.php';

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$product1 = $_POST['prod_code'];
$product2 = $_POST['prod_code1'];
$product3 = $_POST['prod_code2'];
$product4 = $_POST['prod_code3'];
$product5 = $_POST['prod_code4'];
$product6 = $_POST['prod_code5'];
$product7 = $_POST['prod_code6'];
$product8 = $_POST['prod_code7'];
$product9 = $_POST['prod_code8'];
$product10 = $_POST['prod_code9'];
$product11 = $_POST['prod_code10'];
$product12 = $_POST['prod_code11'];
$product13 = $_POST['prod_code12'];
$product14 = $_POST['prod_code13'];
$combo_id = $_POST['ccode'];
$status = "no";
$edate = date('Y-m-d H:i:s');
$combo_return_option = $_POST['status'];
$quantity = $_POST['cquantity'];
$hour = $_POST['hour'];
$price = $_POST['price'];
$combo_name = $_POST['combo_name'];

$offer = new Offer($product1, $product2, $product3, $product4, $product5, $product6, $product7, $product8, $product9, $product10, $product11, $product12, $product13, $product14, $combo_id, $status, $edate, $combo_return_option, $hour, $quantity, $price, $combo_name);
/*$sql = "insert into hsy_combo (combo_id,product1,product2,product3,product4,product5,product6,product7,product8,product9,product10,product11,product12,product13,product14,quantity,mrp,hour,return_avail,status,edate,combo_name)"
        . " VALUES ('".$offer->getCombo_id()."','".$offer->getProduct1()."','".$offer->getProduct2()."','".$offer->getProduct3()."'"
        . ",'".$offer->getProduct4()."','".$offer->getProduct5()."','".$offer->getProduct6()."'"
        . ",'".$offer->getProduct7()."','".$offer->getProduct8()."','".$offer->getProduct9()."'"
        . ",'".$offer->getProduct10()."','".$offer->getProduct11()."','".$offer->getProduct12()."'"
        . ",'".$offer->getProduct13()."','".$offer->getProduct14()."',".$offer->getQuantity().","
        . "".$offer->getPrice().",".$offer->getHour().",'".$offer->getCombo_return_option()."'"
        . ",'".$offer->getStatus()."','".$offer->getEdate()."','".$offer->getCombo_name()."')";
addNewProduct($sql);*/
$sql = "INSERT INTO hsy_combo (combo_id,product1,product2,product3,product4,product5,product6,product7,product8,product9,product10,product11,product12,product13,product14,quantity,mrp,hour,return_avail,status,edate,combo_name) "
        . "VALUES ('".$offer->getCombo_id()."','".$offer->getProduct1()."','".$offer->getProduct2()."'"
        . ",'".$offer->getProduct3()."','".$offer->getProduct4()."','".$offer->getProduct5()."'"
        . ",'".$offer->getProduct6()."','".$offer->getProduct7()."','".$offer->getProduct8()."'"
        . ",'".$offer->getProduct9()."','".$offer->getProduct10()."','".$offer->getProduct11()."'"
        . ",'".$offer->getProduct12()."','".$offer->getProduct12()."','".$offer->getProduct13()."'"
        . ",'".$offer->getProduct14()."',".$offer->getQuantity().",".$offer->getPrice().",".$offer->getHour().""
        . ",'".$offer->getCombo_return_option()."','".$offer->getStatus()."','".$offer->getEdate()."','".$offer->getCombo_name()."')";
addNewProduct($sql);
?>
