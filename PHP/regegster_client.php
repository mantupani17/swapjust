<?php
session_start();
$life = 21600;
session_set_cookie_params($life);
include '../sjfunctions/product.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    $name= $_POST['nam'];
    $pincode= $_POST['pin'];
    $street= $_POST['strt'];
    $landmark= $_POST['loc'];
    $city= $_POST['cit'];
    $district= $_POST['dist'];
    $state= $_POST['st'];
    $country= $_POST['count'];
    $mobile= $_POST['mob'];
    $email= $_POST['mail'];
    $password= md5($_POST['pass']);
    $gender = $_POST['gen'];
    $edate = date('Y-m-d H:m:i');
    $hno = $_POST['hno'];
    $altno = $_POST['altmb'];
    if(isset($_POST['regc']))
    {
        $sql = "INSERT INTO hsy_customer(cust_name,cust_mob_no,alt_no,street,district,state,area_code,house_no,country,city,land_mark,mail_id,gender,doe,password) "
                . "VALUES('".$name."','".$mobile."','".$altno."','".$street."','".$district."','".$state."','".$pincode."','".$hno."','".$country."','".$city."','".$landmark."','".$email."','".$gender."','".$edate."','".$password."')";
        addNewProduct($sql);
        $cust = userLogin($mobile, $password);
        $_SESSION['username'] = $cust['cust_name'];
        $_SESSION['userid'] = $cust['cust_mob_no'];
                        ?>
			<script language="javascript" type="text/javascript">
			window.location.href='../index.php?success';
			</script>
			<?php
    }
?>
