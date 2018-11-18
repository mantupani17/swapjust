<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once '../Objects/Product.class.php';
//include_once '../sjfunctions/product.php';
include '../swapjustconfig/Swapjust_Connection.php';
        $product_code=$_POST['pcode'];
        $product_name=$_POST['pname'];
        $batch_code=$_POST['bcode'];
        $product_for=$_POST['pfor'];
        $category=$_POST['cate'];
        $specification=$_POST['specify'];
        $manufacturer=$_POST['mcompany'];
        $country=$_POST['country'];
        $type_of_product=$_POST['type_of_product'];
        $mrp=$_POST['mrp'];
        $quantity=$_POST['quantity'];
        $discount=$_POST['discount'];
        $weight=$_POST['weight'];
        $size=$_POST['size'];
        $color=$_POST['color'];
        $flavor=$_POST['flavor'];
        $volume=$_POST['volume'];
        $veg_or_nveg=$_POST['vnv'];
        $ingredients=$_POST['ingredients'];
        $description=$_POST['abtprd'];
        $quality=$_POST['quality'];
        $reliability=$_POST['reli'];
        $date_of_entry=date('Y-m-d H:i:s');
        $exp_date=$_POST['exd'];
        $mfd_date=$_POST['mfdt'];
        $shop_name = $_POST['sn'];
        $return_type = $_POST['rt'];
        $why_need = $_POST['wn'];
        $p = new Product($product_code,$batch_code, $product_name,$quantity, $product_for,$category, $specification,$manufacturer, $country,$type_of_product, $veg_or_nveg,$mrp, $discount, $description,$weight, $size, $color,  $ingredients, $volume, $flavor, $quality, $reliability, $date_of_entry,$exp_date, $mfd_date, $shop_name, $return_type, $why_need); 
        $sql = "insert into hsy_product(product_code,product_name,batch_no,quantity,"
                ."product_for,category,specification,mfd_company,country,type_of_product,"
                ."veg_or_nonveg,mrp,discount,description,ingredient_used,weight,size,color,"
                ."flavor,volume,quality,reliability,doe,exd,mfd,shop_name,need,return_type) "
                ."values('".$p->getProduct_code()."','".$p->getProduct_name()."',"
                . "'".$p->getBatch_no()."',".$p->getQuantity().",'".$p->getProduct_for()."',"
                . "'".$p->getCategory()."','".$p->getSpecification()."','".$p->getManufacturer()."',"
                . "'".$p->getCountry()."','".$p->getType_of_product()."','".$p->getVeg_or_nonveg()."',"
                . "".$p->getMrp().",".$p->getDiscount().",'".$p->getDescription()."',"
                . "'".$p->getIngredient_used()."','".$p->getWeight()."','".$p->getSize()."',"
                . "'".$p->getColor()."','".$p->getFlavor()."','".$p->getVolume()."',"
                . "'".$p->getQuality()."','".$p->getReliability()."','".$p->getDate_of_entry()."',"
                . "'".$p->getExp_date()."','".$p->getMfd_date()."','".$p->getShop_name()."','".$p->getWhy_need()."','".$p->getReturn_type()."')";
        //addNewProduct($sql);
        $sjc = new Swapjust_Connection();
        $sjc->execute($sql);
        ?>
			<script language="javascript" type="text/javascript">
			window.location.href='./AdminDashBoard.php?success';
			</script>
			<?php
?>
