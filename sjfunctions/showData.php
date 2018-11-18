<?php
include "product.php";
	$codes = selectProductsfromSales("MASSGAINER");
        
?>
<html>
    <head>
        <link href="../PHP/style_1.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
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
                       <div class="product-image"><img src="../Gallery/<?php echo selectsingleImage($pcode);?>" width="120px" height="120px"></div>
                            <div><strong><?php echo selectProductName($pcode)?></strong></div>
                            <div class="product-price"><s>Rs&nbsp;<?php echo $mrp;?></s></div>
                            <div class="product-price">Rs&nbsp;<?php echo ($mrp-($mrp*($dis/100)))?></div>
			<div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
			</form>
		</div>
        <?php
           }
           ?>
       </div>
</body>
</html>
