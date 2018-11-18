<?php
include '../sjfunctions/product.php';
$salesproduct = athorisedSales();
$allbuyone = allbuyOneGetOne();
$allautho  = buyOneGetOneAuth();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Offer Entry</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="../jquery-3.1.1.min.js"></script>
        <link rel="shortcut icon" href="../logo/logo.jpg" />
        <link rel="stylesheet" href="../w3css/w3css.css" />
        <link rel="stylesheet" href="../bootstrap-3.3.7/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../icons/font-awesome-4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="../w3css/w3css.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script type="text/javascript" src="../bootstrap-3.3.7/dist/js/bootstrap.min.js" ></script>
        <script src="../js/comB.js"></script>
        <style rel="stylesheet" type="text/css">
             table{
                 border-spacing: 10px;
                
             }   
             td{
                 padding: 5px;
             }
         </style>
         <body>
            <div class="w3-bar w3-black">
            <div class="w3-bar-item w3-allerta w3-xlarge">Offer(Buy one Get One)</div>
        </div>
             <form action="admin_buy_one.php" method="post">
            <table  align="center" style="margin-top: 3%;" border="0px">
            <tr>
                <td colspan="6" style="text-align: center;">
                    Select Offer Code:<select name="ocode">
                        <option>BOF1</option>
                        <option>BOF2</option>
                        <option>BOF3</option>
                        <option>BOF4</option>
                        <option>BOF5</option>
                        <option>BOF6</option>
                        <option>BOF7</option>
                        <option>BOF8</option>
                        <option>BOF9</option>
                        <option>BOF10</option>
                        <option>BOF11</option>
                        <option>BOF12</option>
                        <option>BOF13</option>
                        <option>BOF14</option>
                        <option>BOF15</option>
                    </select>
                    offer name:<input type="text" name="offer_name" />
                </td>
            </tr>
            <tr>
                <td>Select Product one</td>
                <td>
                    <select id="ids" onchange="getOnData();">
                       <option>
                            &nbsp;
                        </option>
         <?php               foreach($salesproduct as $listsales  )
         {
             $pcode = $listsales['product_code'];
         ?>
         
                        <option value="<?php echo $pcode; ?>" > <?php echo selectProductName($pcode);?></option>
         
         <?php
         }
           ?>        </select>
                </td>
                <td><input type="text" name="prod_code" id="prod_code" placeholder="product Code" /></td>
                <td>Select Offer Product code</td>
                <td>
                   <select id="ids1" onchange="getOnData1();">
                       <option>
                            &nbsp;
                        </option>
         <?php               foreach($salesproduct as $listsales  )
         {
             $pcode = $listsales['product_code'];
         ?>
         
                        <option value="<?php echo $pcode; ?>" > <?php echo selectProductName($pcode);?></option>
         
         <?php
         }
           ?>     </select>
                </td>
                <td><input type="text" name="prod_code1" id="prod_code1" placeholder="Offer product code" /></td>
            </tr>
            <tr style="text-align: right;">
                <td>Price</td>
                <td><input type="text" name="price"/></td>
                <td>Quantity</td>
                <td><input type="number" name="quantity"/></td>
                <td>Hour</td>
                <td><input type="text" name="hour"/></td>
            </tr>
            <tr align="center">
                <td colspan="6" ><input type="submit" class="w3-button w3-green" value="Add" name="add"/></td>
            </tr>
        </table>
    
        <table width="100%">
            <tr>
            <thead>
            <th class="w3-purple" style="text-align: center;" colspan="2">ALL BUY ONE GET ONE OFFER DATA</th>
            </thead> 
            <tr>
                <td valign="top">
                    <table width="100%">
                            <tr>
                                <th class="w3-red" colspan="7" >
                                    BUY-ONE GET-ONE OFFER IN SERVER
                                </th>
                            </tr>
                            <tr style="font-size: 12px;" class="w3-purple">
                                <th>OFFER CODE</th>
                                <th>PRODUCT NAME</th>
                                <th>OFFER PRODUCT</th>
                                <th>QUANTITY</th>
                                <th>PRICE</th>
                                <th>STATUS(&#10004;)/(&#x2716;)</th>
                            </tr>
                            <?php
                                foreach($allbuyone as $prods)
                                {
                                    $pid = $prods['first_product_code'];
                                    $pid1 = $prods['second_product_code'];
                                    $status = $prods['status'];
                                    $offcode = $prods['offer_code'];
                                  ?>
                                  <tr><td><?php echo $offcode; ?></td>
                                  <td><?php echo selectProductName($pid);?></td>
                                  <td><?php echo selectProductName($pid1);?></td>
                                  <td><?php echo $prods['quantity'];?></td>
                                  <td><?php echo $prods['price'];?></td>
                                  
                                  <?php
                                      if($status=='no')
                                      {
                                          ?>
                                  <td><a href="update_buy_one_status.php?offcode=<?php echo $offcode ;?>">&#x2716;</a></td></tr>
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
                    <table width="100%">
                            <tr>
                                <th class="w3-green" colspan="7" >
                                    BUY-ONE GET-ONE OFFER IN CLIENT
                                </th>
                            </tr>
                            <tr style="font-size: 12px;" class="w3-purple">
                                <th>OFFER CODE</th>
                                <th>PRODUCT NAME</th>
                                <th>OFFER PRODUCT</th>
                                <th>QUANTITY</th>
                                <th>PRICE</th>
                                <th>STATUS(&#10004;)/(&#x2716;)</th>
                            </tr>
                            <?php
                                foreach($allautho as $autholist)
                                {
                                    $apid = $autholist['first_product_code'];
                                    $apid1 = $autholist['second_product_code'];
                                    $status = $autholist['status'];
                                  ?>
                                  <tr><td><?php echo $autholist['offer_code'];?></td>
                                  <td><?php echo selectProductName($apid);?></td>
                                  <td><?php echo selectProductName($apid1);?></td>
                                  <td><?php echo $autholist['quantity'];?></td>
                                  <td><?php echo $autholist['price'];?></td>
                                   <td>&#10004;</td></tr>
                                  <?php
                                } 
                            ?>
                    </table>
                </td>
            </tr>
            </tr>
        </table>
                    </form>
        <br/>
    </body>
</html>