<?php
@ob_start();
session_start();
$life = 21600;
session_set_cookie_params($life);
?>


        <?php
        include '../sjfunctions/product.php';
        $id = $_POST['uid'];
        $password = $_POST['pass'];
        $uname = userLogin($id, md5($password));
        $_SESSION['username'] = $uname['cust_name'];
        $_SESSION['userid'] = $uname['cust_mob_no'];
        if(!$uname)
        {
                        ?>
			<script language="javascript" type="text/javascript">
			window.location.href='../index.php?success';
			</script>
			<?php
        }
        else
        {
                    ?>
			<script language="javascript" type="text/javascript">
			window.location.href='../index.php?success';
			</script>
			<?php
    //require_once '/xampp/htdocs/swapjust/index.php';
        }
     ?>
       