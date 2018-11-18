<?php 
@ob_start();
//include '../sjfunctions/product.php';
include '../swapjustconfig/Swapjust_Connection.php';
$sjf = new Swapjust_Connection(); 
$products = $sjf->getAll("select * from hsy_product");
$cnames1 = $sjf->getAll("SELECT * FROM `hsy_detail` where `type_data` like 'Product name'");
$colors = $sjf->getAll("SELECT * FROM `hsy_detail` where `type_data` like 'Color'");
$cflavs = $sjf->getAll("SELECT * FROM `hsy_detail` where `type_data` like 'Flavor'");
$cfor = $sjf->getAll("SELECT * FROM `hsy_detail` where `type_data` like 'Product For'");
$ccat = $sjf->getAll("SELECT * FROM `hsy_detail` where `type_data` like 'Product Category'");
$ctype = $sjf->getAll("SELECT * FROM `hsy_detail` where `type_data` like 'Product Type'");
$wern = $sjf->getAll("SELECT * FROM `hsy_detail` where `type_data` like 'Where Need'");
$cnames = $sjf->getAll("SELECT * FROM `hsy_detail` where `type_data` like 'Company Name'");
//$sql = "SELECT * FROM `hsy_detail` WHERE `type_data` LIKE \'Company name\' LIMIT 0, 30 ";
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>Product Entry</title>
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
    </head>
    <body>
        <div class="w3-bar w3-black">
            <div class="w3-bar-item w3-allerta w3-xlarge">Product Entry Page</div>
        </div>
        <br/>
        <div class="w3-large w3-black" style="margin-left: 0">Product Entry</div>
        <form action="admin_entry_data.php" method="post" >
        <table style="width: auto;">
           <tr>
                        <td>Product Code:<b style="color:red;">*</b></td>
                        <td><input type="text" name="pcode" id="pcode"/></td>
                        <td>Product Name:<b style="color:red;">*</b></td>
                        <td>
                            
                            <select name="pname" class="w3-select w3-border-red">
                                <option>&nbsp;</option>
                                <?php
                                foreach($cnames1 as $cn1)
                                {
                                ?>
                                <option value="<?php echo $cn1['type_value'];?>"><?php echo $cn1['type_value'];?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </td>
                        <td>Batch Code:<b style="color:red;">*</b></td>
                        <td><input type="text" name="bcode" /></td>
                    </tr>
                    <tr>
                        <td>Product for:<b style="color:red;">*</b></td>
                        <td>
                            <select name="pfor" class="w3-select w3-border-red">
                                <option>&nbsp;</option>
                               <?php
                               foreach($cfor as $pfor)
                               {
                               ?>
                                <option value="<?php echo $pfor['type_value'];?>"><?php echo $pfor['type_value'];?></option>
                                <?php
                               }
                                ?>
                            </select>
                        </td>
                        <td>Category:<b style="color:red;">*</b></td>
                        <td>
                            <select name="cate" class="w3-select w3-border-red">
                                <option>&nbsp;</option>
                                <?php
                                foreach($ccat as $cate)
                                {
                                ?>
                                <option value="<?php echo $cate['type_value'];?>"><?php echo $cate['type_value'];?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </td>
                        <td>Specification:<b style="color:red;">*</b></td>
                        <td>
                            <select name="specify" class="w3-select w3-border-red">
                                <option value="no-msg">No-msg</option>
                                <option value="msg">msg</option>
                             </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Manufacturer:<b style="color:red;">*</b></td>
                        <td>
                            <select name="mcompany" class="w3-select w3-border-red">
                                <option>&nbsp;</option>
                                <?php
                                foreach($cnames as $cname)
                                {
                                ?>
                                <option value="<?php echo $cname['type_value'];?>"><?php echo $cname['type_value'];?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </td>
                        <td>Origin country:<b style="color:red;">*</b></td>
                        <td><input type="text" name="country" /></td>
                        <td>Type Of Product:<b style="color:red;">*</b></td>
                        <td>
                            <select name="type_of_product" class="w3-select w3-border-red">
                                <option>&nbsp;</option>
                               <?php
                               foreach($ctype as $pt)
                               {
                               ?>
                                <option value="<?php echo $pt['type_value'];?>"><?php echo $pt['type_value'];?></option>
                                <?php
                               }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>MRP:<b style="color:red;">*</b></td>
                        <td><input type="text" name="mrp" /></td>
                        <td>Quantity:<b style="color:red;">*</b></td>
                        <td><input type="text" name="quantity" /></td>
                        <td>Discount:<b style="color:red;">*</b></td>
                        <td><input type="text" name="discount" /></td>
                    </tr>
                     <tr>
                        <td>Weight:<b style="color:red;">*</b></td>
                        <td><input type="text" name="weight" /></td>
                        <td>Size:<b style="color:red;">*</b></td>
                        <td><input type="text" name="size" /></td>
                        <td>Color:<b style="color:red;">*</b></td>
                        <td>
                            <select name="color" class="w3-select w3-border-red" >
                                <option>&nbsp;</option>
                                <?php
                                foreach($colors as $colr)
                                {
                                ?>
                                <option value="<?php echo $colr['type_value']?>"><?php echo $colr['type_value']?></option>
                                <?php
                                }
                                ?>
                               
                            </select>
                        </td>
                     </tr>
                     <tr>
                        <td>Flavor:<b style="color:red;">*</b></td>
                        <td> 
                            <select name="flavor" class="w3-select w3-border-red">
                                <option>&nbsp;</option>
                                <?php
                                foreach($cflavs as $cflav)
                                {
                                ?>
                                <option value="<?php echo $cflav['type_value'];?>"><?php echo $cflav['type_value'];?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </td>
                        <td>Volume:<b style="color:red;">*</b></td>
                        <td><input type="text" name="volume" /></td>
                        <td>Type of grocery:<b style="color:red;">*</b></td>
                        <td>
                            <select name="vnv" class="w3-select w3-border-red">
                                <option value="veg">veg</option>
                                <option value="nveg">non-veg</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Ingredients Used:<b style="color:red;">*</b></td>
                        <td><textarea name="ingredients" placeholder="ingredients used"></textarea></td>
                        <td>Description:<b style="color:red;">*</b></td>
                        <td><textarea name="abtprd" placeholder="About the product"></textarea></td>
                        <td>Quality:<b style="color:red;">*</b></td>
                        <td><input type="text" name="quality" /></td>
                    </tr>
                    <tr>
                        <td>Reliabilty:<b style="color:red;">*</b></td>
                        <td><input type="text" name="reli" /></td>
                        <td>Date:<b style="color:red;">*</b></td>
                        <td><input type="date" name="dt" /></td>
                        <td>Expire Date:<b style="color:red;">*</b></td>
                        <td><input type="date" name="exd" /></td>
                    </tr>
                     <tr>
                        <td>Manufacture date:<b style="color:red;">*</b></td>
                        <td><input type="date" name="mfdt" /></td>
                        <td>Shop name:<b style="color:red;">*</b></td>
                                <td><select name="sn" class="w3-select w3-border-red">
                                        <option>&nbsp;</option>
                                        <option>Mantu store</option>
                            </select></td>
                        <td>Choose Category:<b style="color:red;">*</b></td>
                                <td><select name="wn" class="w3-select w3-border-red">
                                        <option>&nbsp;</option>
                                       <?php
                                       foreach($wern as $wn)
                                       {
                                       ?>
                                        <option value="<?php echo $wn['type_value'];?>"><?php echo $wn['type_value'];?></option>
                                        <?php
                                       }
                                        ?>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Return Type:<b style="color:red;">*</b></td>
                        <td>
                            <select name="rt" class="w3-select w3-border-red">
                                <option >Yes</option>
                                <option>No</option>
                            </select>
                        </td>
                        <td colspan="4" align="center">
                            <input type="submit" name="Product" value="product" class="w3-button w3-red w3-hover-green"/>
                            <a href="add_types.html" class="w3-button w3-blue w3-hover-red">Add category</a>
                        </td>
                    </tr>
                </table>
        </table>
        </form>
        <div class="w3-black w3-large" style="margin-left: 0">Enterd Product</div>
        <br/>
       
        <table class="w3-table"  >
            <thead>
            <tr class="w3-green">
                <td>product name</td>
                <td>Quantity</td>
                <td>Manufacture company</td>
                <td>MRP</td>
                <td>Discount</td>
                <td>Weight</td>
                <td>Flavor</td>
                <td>Update</td>
        </tr>
            </thead>
       <tbody  style="overflow-y:auto; overflow-x: hidden; height: 200px; float: right; width: 100%; position:absolute ; display: block;">
        <?php
        foreach ($products as $product)
            {
            ?>
            
            <tr>
                <td style="width:21%;"><?php echo $product['product_name']; ?></td>
                <td style="width: 10%;"><?php echo $product['quantity']; ?></td>
                <td style="width: 27%;"><?php echo $product['mfd_company']; ?></td>
                <td style="width: 8%;"><?php echo $product['mrp']; ?></td>
                <td style="width: 12%;"><?php echo $product['discount']; ?></td>
                <td style="width: 10%;"><?php echo $product['weight']; ?></td>
                <td style="width: 10%;"><?php echo $product['flavor']; ?></td>
                <td style="width: 10%;"><input type="submit" class="w3-blue w3-small w3-button" value="Update"/></td>
        </tr>
        
           
        <?php
            }
            ?>
            </tbody> 
        </table>
         
    </body>
</html>
