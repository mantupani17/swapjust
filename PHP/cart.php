<?php
@ob_start();
session_start();
$life = 21600;
session_set_cookie_params($life);
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
        <title>My Cart</title>
        <script type="text/javascript" src="../jquery-3.1.1.min.js"></script>
        <link rel="shortcut icon" href="../logo/logo.jpg" />
<link rel="stylesheet" href="../w3css/w3css.css" />
<link rel="stylesheet" href="../bootstrap-3.3.7/dist/css/bootstrap.min.css" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="../icons/font-awesome-4.7.0/css/font-awesome.min.css" />
<!--<link href="../jquery.bxslider.css"/>-->
 <link rel="stylesheet" href="../o/docs/assets/css/docs.theme.min.css">
   <link rel="stylesheet" href="../o/docs/assets/owlcarousel/assets/owl.carousel.min.css">
 <link rel="stylesheet" href="../o/docs/assets/owlcarousel/assets/owl.theme.default.min.css">
  <script src="../o/docs/assets/vendors/jquery.min.js"></script>
 <script src="../o/docs/assets/owlcarousel/owl.carousel.js"></script>
<script type="text/javascript" src="../bxslider/jquery.boxslider.js"></script>
<script type="text/javascript" src="../bootstrap-3.3.7/dist/js/bootstrap.min.js" >
</script>
<link href="header.css" type="text/css" rel="stylesheet"/>
    </head>
    <body  data-spy="scroll" data-target=".navbar" data-offset="50">
          <?php
        if(!$_SESSION['username'])
        {
        $cname = "";
        }
        else
        {
     $cname = $_SESSION['username'];
     $userid = $_SESSION['userid'];
        }
        ?>
       <nav class="navbar navbar-inverse vs w3-top " data-spy="affix" >
            <ul class="w3-navbar w3-deep-orange w3-border" style="height: 55px;">
                <li><a href="../index.php"  class="w3-hover-deep-orange"><img src="../logo/logo10-12.png" width="80px;" height="35px" /></a></li>
                <li style="width:40%; margin-top:.5%;margin-left: 3%;">   <input type="text" class="w3-input w3-orange w3-padding-6 w3-hide-small" placeholder="Search.."  style="width:100%;"></li>
                <li style="margin-top:.5%;"><button class="w3-btn w3-black w3-padding-6 w3-hover-orange w3-hide-small" style="color:#fff; height:37px;">Search</button></li>
                <li style="margin-top:-0.3%;"><a href="cart.php"  style="position:relative; z-index:3;" class="w3-text-white w3-hover-deep-orange w3-hide-small">Basket<img src="../trolly/bs.png" class="" width="50px"/><span class="w3-badge w3-small w3-orange" style="z-index:2; position:absolute; margin-left:-18%; margin-top:.2%;"><?php echo count($_SESSION['cart_item']);?></span></a></li>
                <li id="mr" style="margin-top:.3%;">
      <div class="w3-container">
                        <div class="w3-dropdown-hover w3-deep-orange">
                            <div class="w3-deep-orange" style="margin-top:3px;"><i class="material-icons" style="font-size: 40px;">account_circle</i></div>
                            <div class="w3-dropdown-content w3-bar-block w3-border w3-black" style="margin-top:-1px;">
                            <?php
                if($cname)
                {
                ?>
                
                <a href="../PHP/user_profile.php?cid=<?php echo $userid; ?>" class="w3-bar-item w3-button w3-hover-deep-orange" style="color:white"><div style="margin-left: -10px;margin-top: -5px;"><img src="../icons/user.png" width="30px" height="20px" />&nbsp;<?php echo $cname;?></div></a>
                <a href="../PHP/cust_order.php?cid=<?php echo $userid; ?>" class="w3-bar-item w3-button w3-hover-deep-orange" style="color:white"><div style="margin-left: -10px;margin-top: -5px;"><img src="../icons/order1.png" width="30px" height="20px" />&nbsp;My Order</div></a>
                 <a href="../PHP/track_Product.php" class="w3-bar-item w3-button w3-hover-deep-orange" style="color:white"><div style="margin-left: -10px;margin-top: -5px;"><img src="../icons/track1.png" width="30px" height="20px" />&nbsp;Track Order</div></a>
                <a href="../PHP/destuser_cardentials.php" class="w3-bar-item w3-button w3-hover-deep-orange" style="color:white"><div style="margin-left: -10px;margin-top: -5px;"><img src="../icons/logout1.png" width="30px" height="20px" />&nbsp;Logout</div> </a>
                <?php
                }
                else
                {
                    ?>
                <a href="#" onClick="document.getElementById('log').style.display='block'" class="w3-bar-item w3-button w3-hover-deep-orange" style="color:white"><div style="margin-left: -10px;margin-top: -5px;"><img src="../icons/login.png" width="30px" height="20px" />&nbsp;signin</div> </a>    
                <a href="../PHP/client_register.php" class="w3-bar-item w3-button w3-hover-deep-orange" style="color:white" ><div style="margin-left: -10px;margin-top: -5px;"><img src="../icons/reg.png" width="30px" height="20px"/>&nbsp;signup</div></a>
                    <?php
                }
                ?>
                            </div>
                        </div>
                    </div>
                </li>
                <!--login or sinup form-->
                <div id="log" class="w3-modal" >
                <div class="w3-modal-content w3-card-8 w3-animate-top" style="max-width:550px">
                <span onclick="document.getElementById('log').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
                <form class="w3-container" action="">
                <div class="w3-section">
                <label style="color:#000;"><b>Phone Number</b></label>
                <input class="w3-input  w3-margin-bottom" type="text" placeholder="Enter Phone Number" pattern="[0-9]{10}" style="color:#666666;" name="usrname" required>
		<button onclick="" class="w3-deep-orange w3-border-0  w3-padding w3-margin-bottom">Get O T P</button><br />
                <label style="color:#000;"><b>Verify OT P</b></label>
                <input class="w3-input" type="text" placeholder="Enter O T P" name="psw" style="color:#666666;" pattern="[0-9]{5}" required>
                <input class="w3-check" type="checkbox" checked="checked" ><label style="color:#000000"> Agreed Terms & Condition</label>
                </div>
                </form>
               <form class="w3-container" action="../PHP/sjuserfin.php" method="POST">
                <input type="text" class="w3-input" name="uid" placeholder="Enter Phone Number or email" style="color:#000;" required /><br>
                <input type="password" name="pass" class="w3-input w3-margin-bottom" placeholder="Enter Password" style="color:#000;" required />
                <button class="w3-btn-block w3-deep-orange w3-section w3-padding" type="submit">Login</button>
                </form>
                <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                <button onclick="document.getElementById('log').style.display='none'" type="button" class="w3-btn w3-red">Cancel</button>
                <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#" style="color:#000000;">password</a></span>
                </div>
                </div>
                </div>
                <li id="mr" style="margin-top:-.1%;"><a href="#" class="w3-hide-small w3-hover-deep-orange"><div class="material-icons w3-hide-small" style="font-size:24px;color:#ffffff; margin-top:4%;">call</div><span style="font-size:1.5em; color:#fff;">+91 9861766666</span></a></li>
            </ul>
        </nav>
        <div class="container-fluid">
        <div  style=" background-color:" class="col-sm-10">
           
        <table class="w3-table w3-card-4 w3-centered " style="width: 99.5%; margin-top: 8%; margin-left: 0%;">
            <thead class="w3-deep-orange w3-text-white" >
                <td style="color: #fff;" >&nbsp;</td>
                <td style="color: #fff;" >Items</td>
                <td style="color: #fff;">code</td>
                <td style="color: #fff;">Quantity</td>
                <td style="color: #fff;">MRP</td>
                <td style="color: #fff;">Discounted Total</td>
                <td style="color: #fff;">&nbsp;</td>
        </thead>
        <?php	
        if(!$_SESSION['cart_item'])
        {
            ?>
        <tr class="text-justify"><td colspan="6">Cart is Empty</td></tr>
            <?php
        }else{
             foreach($_SESSION['cart_item'] as $item){
                 $pcode =  $item["code"]; 
             ?>
                <tr class="text-justify">
                <td><img style="width: 80px;height: 80px;" src="../Gallery/<?php echo $item['image'] ?>" width="80px" height="100px" /></td>
                <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><b><?php echo $item["name"]; ?></b></font></td>
                <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $pcode; ?></font></td>
                <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $item["quantity"]; ?></font></td>
                <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $item["mrp"]; ?></font></td>
                <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">&#x20a8;<?php echo $item["price"]; ?></font></td>
                <td><a href="./cartController.php?action=remove&code=<?php echo $pcode; ?>" class="button w3-deep-orange w3-hover-green w3-tiny h1" style="text-decoration: none;">Remove Item</a></td>
               </tr>
				<?php
                            $item_total += ($item["price"]*$item["quantity"]);
		}
        }
                ?>
        </table>
            <div style="background-color: green; color: black; width: 99.5%; margin-left: 0%" class="w3-card-4 w3-panel w3-xlarge w3-deep-orange w3-right-align"><a  style="float:left;margin-top: 0.1%" class="w3-deep-orange" href="check_out.php">Proceed to CheckOut</a>Total(&#x20a8;): <?php echo $item_total; ?></div>    
       
        </div>
            <div class="col-sm-2" >
                <div style="margin-top: 12%">
                    <img src="../items/s.jpg" style="width: 100%"/>
                </div>
                
                <div style="margin-top: 12%">
                                <img src="../items/s.jpg" style="width: 100%;"/>
                </div>

       </div>
        </div>
        <script type="text/javascript">
            var sb=0;
            var prc=parseInt(document.getElementById("pr").innerHTML);
             var disc=parseInt(document.getElementById("dis").innerHTML);
              var qun=parseInt(document.getElementById("qt").innerHTML);
              function subDtl()
              {
              var dsrt=(((prc*qun)*10)/100);
              var sb=prc-dsrt;
              document.getElementById("subd").innerHTML= sb;
              }
        </script>
    </body>
</html>

