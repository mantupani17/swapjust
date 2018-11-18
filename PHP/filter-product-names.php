<?php
include '../sjfunctions/product.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script src="../js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
        <link rel="stylesheet" href="../w3css/w3css.css" />
        <link rel="stylesheet" href="../bootstrap-3.3.7/dist/css/bootstrap.css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <link rel="stylesheet" href="../icons/font-awesome-4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="../o/docs/assets/css/docs.theme.min.css">
        <link rel="stylesheet" href="../o/docs/assets/owlcarousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="../o/docs/assets/owlcarousel/assets/owl.theme.default.min.css">
        <script src="../o/docs/assets/vendors/jquery.min.js"></script>
        <script src="../o/docs/assets/owlcarousel/owl.carousel.js"></script>
        <script type="text/javascript" src="../bxslider/jquery.bxslider.js"></script>
        <script type="text/javascript" src="../bootstrap-3.3.7\dist\js\bootstrap.min.js" ></script>
        <link href="../PHP/header.css" rel="stylesheet" type="text/css" />
        <link href="style_1.css" rel="stylesheet" type="text/css" />
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $pname = $_POST['pname'];
        $codes = selectProductsfromSales($pname);
        echo $codes['product_code'];
        ?>
       <div id="product_grid">
           <?php 
           foreach($codes as $code)
           {
               $pcode = $code['product_code'];
               $mrp = $code['mrp'];
               $dis = $code['discount'];
               ?>
               <div class="product-item">
                   <form method="post" action="cartController.php?action=add&code=<?php echo $pcode;?>">
                       <div class="product-image"><img src="../Gallery/<?php echo selectsingleImage($pcode);?>" WIDTH="150PX" height="200PX"></div>
                            <div><strong STYLE="color: white;"><?php echo selectProductName($pcode)?></strong></div>
			<div class="product-price"><?php echo $mrp;?></div>
			<div><input type="text" name="quantity" value="1" size="2" />
                            <input type="submit" value="Add to cart" class="btnAddAction" /></div>
			</form>
		</div>
        <?php
           }
           ?>
       </div>
    </body>
</html>
