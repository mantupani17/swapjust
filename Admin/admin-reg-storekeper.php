<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include '../sjfunctions/product.php';
    $sname= $_POST['nam'];
    $pincode= $_POST['pin'];
    $street= $_POST['strt'];
    $city= $_POST['cit'];
    $district= $_POST['dist'];
    $state= $_POST['st'];
    $country= $_POST['count'];
    $mobile= $_POST['mob'];
    $email= $_POST['mail'];
    $password= $_POST['pass'];
    $edate = date('Y-m-d H:i:s');
    $altno =$_POST['altmb'];
    $shop_name = $_POST['sp_name'];
    if(isset($_POST['save']))
    {
        $sql = "INSERT INTO hsy_shopkeeper (shop_name,own_name,street,area_code,city,district,state,country,mob_no,alt_no,email_id,edate,password)VALUES('".$shop_name."','".$sname."','".$street."','".$pincode."','".$city."','".$district."','".$state."','".$country."','".$mobile."','".$altno."','".$email."','".$edate."','".$password."')";
        addNewProduct($sql);
        ?>
                        <script language="javascript" type="text/javascript">
			window.location.href='new_shop_keeper.php?success';
			</script>
	<?php
    }
?>
