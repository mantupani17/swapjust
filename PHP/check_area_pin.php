<?php
include '../sjfunctions/product.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$pin = $_GET['pincode'];
$res = check_area_Pin($pin);
echo '<b>'.$res.'</b>';
?>
