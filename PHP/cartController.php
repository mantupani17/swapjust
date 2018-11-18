<?php
@ob_start();
session_start();
$life = 21600;
session_set_cookie_params($life);
$pcode = $_POST['pcode'];
$pname = $_POST['pname'];
$quantity = $_POST["quantity"];
$price = $_POST['mrp'];
$image = $_POST['image'];
$mrp = $_POST['price'];
$dis = $_POST['discount'];
//$counter = 0;
if(!empty($_GET["action"])) {
    global $counter;
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
                    //$productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($pcode=>array('name'=>$pname, 'code'=>$_POST['pcode'], 'quantity'=>$quantity,'discount'=>$dis,'price'=>$price ,'mrp'=>$mrp, 'image'=>$image));
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($_POST['pcode'],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($_POST['pcode'] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
                                        
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
                                     
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
                                
			}
			
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
                    $code = $_GET['code'];
                        foreach($_SESSION["cart_item"] as $k => $v) {
                            
					if($code == $k)
                                        {
						unset($_SESSION["cart_item"][$k]);
                                         }
					if(empty($_SESSION["cart_item"]))
                                        {
						unset($_SESSION["cart_item"]);
                                        }
                         }
                 }
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
                 break;	
}
                        ?>
			<script language="javascript" type="text/javascript">
			window.location.href='../index.php?success';
			</script>
			<?php                     
}
?>