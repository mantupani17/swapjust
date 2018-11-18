<?php
include '../sjfunctions/product.php';
$skdetail = productDetailOfSk();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Shopkeeper desk</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
        <link rel="shortcut icon" href="../logo/logo.jpg" />
        <link rel="stylesheet" href="../w3css/w3css.css" />
        <link rel="stylesheet" href="../bootstrap-3.3.7/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../icons/font-awesome-4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script type="text/javascript" src="../bootstrap-3.3.7/dist/js/bootstrap.min.js" ></script>
    </head>
    <body>
       <div class="w3-bar w3-black">
            <div class="w3-bar-item w3-allerta w3-xlarge">Shopkeeper Product Desk</div>
        </div>  
        <form action="shop_keeper_entry.php" method="post">
        <table class="w3-table">
            <tr>
                <td>
                    Product Name<input type="text" name="pName" id="pn">
                </td>
                <td>quantity <input type="text" name="qun" id="qt"/></td>
                <td>Mrp<input type="text" name="mrpr" id="mrpri"/></td>
                <td>S/J selling price<input type="text" name="spr" id="wpr"/></td>
            </tr>
            <tr >
                <td colspan="4" align="center"><input type="submit" value="Entry" id="ent" name="en" class="w3-button w3-green w3-hover-purple" /></td>
            </tr> 
        </table>
        </form>
        <table style="width: 100%;">
            <thead>
                <tr class="w3-deep-orange">
                    <td>shop Name</td>
                    <td>Product Name</td>
                    <td>Quantity</td>
                    <td>Mrp</td>
                    <td>S/J Selling Price</td>
                    <td>Date</td>
                    <td>Grant</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($skdetail as $detail)
                {
                    $status = $detail['status'];
                ?>
                <tr>
                    <td><?php echo $detail['shop_name'];?></td>
                    <td><?php echo $detail['product_name'];?></td>
                    <td><?php echo $detail['quantity'];?></td>
                    <td><?php echo $detail['mrp'];?></td>
                    <td><?php echo $detail['sj_price'];?></td>
                    <td><?php echo $detail['edate'];?></td>
                    <?php
                    if($status == 'viewed')
                    {
                    ?>
                    <td>Yes Viewed</td>
                </tr>
                <?php
                    }
                else {
                    ?>
                    <td>Not Viewed</td>
                <?php
                }
                }
                ?>
            </tbody>
        </table>
    </body>
</html>

