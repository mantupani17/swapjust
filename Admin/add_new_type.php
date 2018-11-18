<?php
include '../swapjustconfig/Swapjust_Connection.php';
$sjf = new Swapjust_Connection();
if(isset($_POST['addnew']))
{
    $teped = $_POST['type_data'];
    $tename = $_POST['type_value'];
    $sql = "insert into hsy_detail(type_data,type_value) VALUES('$teped','$tename')";
    $sjf->execute($sql);
    ?>
               <script language="javascript" type="text/javascript">
			window.location.href='new_product_entry.php?success';
		</script>
	<?php
}
?>