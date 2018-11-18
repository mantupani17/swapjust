<?php
if(isset($_POST['product']))
{
    include '../swapjustconfig/Swapjust_Connection.php';
    $sjc = new Swapjust_connection();
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
    //echo $shop_name;
    //echo 'mantu';
    $sql = "insert into hsy_product(product_code,product_name,batch_no,quantity,product_for,category,specification,mfd_company,country,type_of_product,veg_or_nonveg,mrp,discount,description,ingredient_used,weight,size,color,flavor,volume,quality,reliability,doe,exd,mfd,shop_name,need,return_type) VALUES ('".$product_code."','".$product_name."','".$batch_no."','".$quantity."','".$product_for."','".$category."','".$specification."','".$manufacturer."','".$country."','".$type_of_product."','".$veg_or_nveg."',".$mrp.",".$discount.",'".$description."','".$ingredients."','".$weight."','".$size."','".$color."','".$flavor."','".$quality."','".$reliability."','".$date_of_entry."','".$exp_date."','".$mfd_date."','".$shop_name."','".$why_need."','".$return_type."')";
    $sjc->execute($sql);
  }
?>
