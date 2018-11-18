<?php 
include '../sjfunctions/product.php';
$salesproduct = athorisedSales();
$discountOff = selectAllOffers();
$authdisc = discountAuthOfferData();
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
        <link rel="stylesheet" href="../bootstrap-3.3.7/dist/css/bootstrap.min.css" />
        <title>Discount Offer Page</title>
        <script src="../js/comB.js"></script>
    </head>
    <body>
        <div class="w3-bar w3-black">
            <div class="w3-bar-item w3-allerta w3-xlarge">Product Entry Page</div>
        </div><br/>
        <div class="w3-large w3-black" style="margin-left: 0">Offer Entry</div>
        <form action="admin_discount_offer.php" method="post">
            <table border="0px" align="center">
                <tr>
                    <td>Select Product Code</td>
                   <td>
                    <select id="ids" onchange="getOnData();">
                       <option>
                            &nbsp;
                        </option>
                         <?php              
                         foreach($salesproduct as $listsales  )
                        {
                          $pcode = $listsales['product_code'];
                        ?>
         
                        <option value="<?php echo $pcode; ?>" > <?php echo selectProductName($pcode);?></option>
         
                        <?php
                        }
                    ?>        
                   </select>
                </td>
                    <td><input type="text" name="prod_code" id="prod_code" placeholder="product Code" /></td>
                </tr>
                <tr>
                    <td>Quantity</td>
                    <td colspan="2"><input type="number" name="quantity" id="quantity" placeholder="quantity"/></td>
                </tr>
                <tr>
                    <td>Discount</td>
                    <td colspan="2"><input type="text" name="discount" id="discount" placeholder="Discount price"/></td>
                </tr>
                <tr>
                    <td>Time to Access </td>
                    <td colspan="2"><input type="text" name="hour" id="hour" placeholder="Hour" /></td>
                </tr>
                 <!--<tr>
                    <td>Date</td>
                   <td colspan="2"><input type="date" class="w3-orange" name="edate"  /></td>
                </tr>-->
                    <td colspan="3" align="center"><input type="submit" class="w3-button w3-hover-red w3-green" name="offer" value="Set Offer" /></td>
                </tr>
            </table>
        </form>
        <table width="100%">
            <tr><th colspan="2" class="w3-orange w3-text-white" >All Data</th></tr>
            <tr>
                <td valign="top">
                    <table border="0px" width="100%">
                        <tr><th colspan="6" class="w3-purple">Sales Data</th></tr>
                        <tr class="w3-yellow">
                            <th>Code</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Discount</th>
                            <th>Status(&#10004;)/(&#x2716;)</th>
                        </tr>
                       <?php
                        foreach($discountOff as $offerList)
                        {
                            $pid = $offerList['product_code']; 
                            $res = $offerList['status'];
                            ?>
                            <tr style="font-size: 12px;">
                                <td><?php echo $pid;?></td>
                                <td><?php echo selectProductName($pid);?></td>
                                <td><?php echo getProductPrice($pid);?></td>
                                <td><?php echo $offerList['quantity'];?></td>
                                <td><?php echo $offerList['discount'];?></td>
                                <?php
                                if($res=='no')
                                {
                                    ?>
                                    <td><a href="update_discount_status.php?pid=<?php echo $pid;?>">&#x2716;</a></td></tr>
                                    <?php
                                }
                                else
                                {
                                    ?>
                            <td>&#10004;</td></tr>
                                    <?php
                                }
                        }
                        ?>
                    </table>
                </td>
                <td valign="top">
                    <table border="0px" width="100%">
                        <tr><th colspan="8" class="w3-purple" >Offer Data</th></tr>
                        <tr class="w3-green">
                            <th>Code</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>MRP</th>
                            <th>D Offer</th>
                            <th>Hour</th>
                            <th>Date</th>
                            <th>status(&#10004;)/(&#x2716;)</th>
                        </tr>
                        <?php
                        
                        foreach($authdisc as $appofferList)
                        {
                            $pid1 = $appofferList['product_code']; 
                            $res1 = $appofferList['status'];
                            ?>
                            <tr style="font-size: 12px;">
                                <td><?php echo $pid1;?></td>
                                <td><?php echo selectProductName($pid1);?></td>
                                <td><?php echo $appofferList['quantity'];?></td>
                                <td><?php echo getProductPrice($pid1);?></td>
                                <td><?php echo $appofferList['discount'];?></td>
                                <td><?php echo $appofferList['hour'];?></td>
                                <td><?php echo $appofferList['edate']; ?></td>
                                <td>&#10004;</td>
                               <?php
                        }
                        ?>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>

