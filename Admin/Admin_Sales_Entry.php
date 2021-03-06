<?php
include '../sjfunctions/product.php';
$salesProduct = selectSalesProduct();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="../jquery-3.1.1.min.js"></script>
        <link rel="shortcut icon" href="../logo/logo.jpg" />
        <link rel="stylesheet" href="../w3css/w3css.css" />
        <title>Sales Entry</title>
    </head>
    <body>
        <div class="w3-bar w3-black">
            <div class="w3-bar-item w3-allerta w3-xlarge">Product Entry Page</div>
        </div><br/>
        <div class="w3-large w3-black" style="margin-left: 0">Sales Entry</div>
        <form action="Admin_sls_ent.php" method="post">
            <table style="width: auto;">
                <tr>
                    <td>Product code</td><td><input type="text" name="pcode" width="100%" placeholder="product code"/></td>
                    <td>Quantity</td><td><input type="number" name="quantity" width="100%" placeholder="quantity"/></td>
                    <td>MRP</td><td><input type="text" name="mrp" width="100%" placeholder="MRP"/></td>
                </tr>
                <tr>
                    <td>Discount</td><td><input type="text" name="discount" width="100%" placeholder="Discount"/></td>
                    <td>Entry Date</td><td><input type="date" name="edate" width="100%" /></td>
                    <td colspan="2">
                        <input type="submit" class="w3-button w3-green" value="Add New" name="salesentry"/>
                        <input type="submit" formaction="" class="w3-button w3-blue" value="Update" name="update" />
                        <input type="submit" formaction="" class="w3-button w3-red" value="Remove" name="remove" />
                    </td>
                </tr>
            </table>
        </form>
         <table width="100%">
            <tr>
                <td class="w3-large w3-red">Product input in Sales Entry (SERVER)</td>
                <td class="w3-large w3-deep-purple">Product input in website (CLIENT)</td>
            </tr>
            <tr>
                <td valign="top">
             <table width="100%">
            <tr class="w3-green">
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>MRP</th>
                <th>Discount</th>
                <th>Date Of Entry</th>
                <th>Site Entry</th>
            </tr>
            <?php
            
            foreach($salesProduct as $saleList)
            {
                $pcode = $saleList['product_code']; 
                $status =$saleList['status'];
               
                ?>
                    <tr style="font-size: 12px;">
                    <td><?php echo $pcode; ?></td>
                    <td><?php echo selectProductName($pcode);?></td>
                    <td><?php echo $saleList['quantity'];?></td>
                    <td><?php echo $saleList['mrp'];?></td>
                    <td><?php echo $saleList['discount'];?></td>
                    <td><?php echo $saleList['edate'];?></td>
                    <?php
                    if($status == "no")
                    {
                    ?>
                    <td><a href="clientSideSalesAppoval.php?pcode=<?php echo $pcode;?>">(&#x2716;)</a></td>
                    </tr>
                    <?php
                    }
                    else
                    {
                        ?>
                    <td>(&#10004;)</td>
                    </tr>
                    <?php
                    }
            }
                    
            ?>
        </table>
                </td>
                <td valign="top">
                <table width="100%">
            <tr class="w3-green">
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>MRP</th>
                <th>Discount</th>
                <th>Date Of Entry</th>
                <th>Site Entry</th>
            </tr>
           
            <?php
           
            foreach($salesProduct as $saleList1)
            {
                $pcode = $saleList1['product_code']; 
                $status =$saleList1['status'];
               ?>
                <tr style="font-size: 12px;">
                    <td><?php echo $pcode; ?></td>
                    <td><?php echo selectProductName($pcode);?></td>
                    <td><?php echo $saleList1['quantity'];?></td>
                    <td><?php echo $saleList1['mrp'];?></td>
                    <td><?php echo $saleList1['discount'];?></td>
                    <td><?php echo $saleList1['edate'];?></td>
                    <?php
                    if($status == "no")
                    {
                    ?>
                    <td  >(&#x2716;)</td>
                    </tr>
                    <?php
                    }
                    else
                    {
                        ?>
                    <td >(&#10004;)</td>
                    </tr>
                    <?php
                    }
            }
                    
            ?>
    </body>
</html>


