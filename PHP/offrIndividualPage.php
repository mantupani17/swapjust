<?php
@ob_start();
session_start();
$life = 21600;
session_set_cookie_params($life);
include '../sjfunctions/product.php';
$types = selectProductByTypes(); 
$pid = $_GET['pid'];
$choose = $_GET['action'];
$pname = '';
$mrp = 0;
$discount = 0;
$image = '';
if($choose == 'comboOff')
{
   $combo_det = selectCombo($pid);
   $pname = $combo_det['combo_name'];
   $image = selectsingleImage($pid);
   $mrp = $combo_det['mrp'];
}
if($choose == 'disOff')
{
   $disc_det = selectDiscountOffers($pid); 
   $pname = selectProductName($pid);
   $image = selectsingleImage($pid);
   $mrp = getProductPrice($pid);
   $discount = $disc_det['discount'];
}
if($choose == 'buyOff')
{
    $buy_det = selectbuOneGetOne($pid);
    $pname = $buy_det['offer_name'];
    $image = selectsingleImage($pid);
    $mrp = $buy_det['price'];
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title><?php echo $pname; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="../jquery-3.1.1.min.js"></script>
        <link rel="shortcut icon" href="../logo/logo.jpg" />
        <link rel="stylesheet" href="../w3css/w3css.css" />
        <link rel="stylesheet" href="../bootstrap-3.3.7\dist\css\bootstrap.min.css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <link rel="stylesheet" href="../icons/font-awesome-4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="../o/docs/assets/css/docs.theme.min.css">
        <link rel="stylesheet" href="../o/docs/assets/owlcarousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="../o/docs/assets/owlcarousel/assets/owl.theme.default.min.css">
        <script src="../o/docs/assets/vendors/jquery.min.js"></script>
        <script src="../o/docs/assets/owlcarousel/owl.carousel.js"></script>
        <script type="text/javascript" src="../bxslider/jquery.bxslider.js"></script>
        <script type="text/javascript" src="../bootstrap-3.3.7\dist\js\bootstrap.min.js" ></script>
        <link href="header.css" type="text/css" rel="stylesheet"/>
        <script type="text/javascript" lang="javascript">
                $(function ()
                {
                    $("#checkpin").click(showpin);
                });
                function showpin()
                {
                    var param ={pincode:$("#areacode").val()};
                    $.ajax({
                        url:"./check_area_pin.php",
                        data:param,
                        success :showData,
                        catch:false
                    });
                }
                function showData(text)
                {
                    document.getElementById("viewAvail").innerHTML=text;
                }
          
        </script>
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">
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
                <li style="margin-top:-0.3%;"><a href="./PHP/cart.php"  style="position:relative; z-index:3;" class="w3-text-white w3-hover-deep-orange w3-hide-small">Basket<img src="../trolly/bs.png" class="" width="50px"/><span class="w3-badge w3-small w3-orange" style="z-index:2; position:absolute; margin-left:-18%; margin-top:.2%;"><?php echo count($_SESSION['cart_item']);?></span></a></li>
                <li id="mr" style="margin-top:.3%;">
                <!--<a class="w3-hide-small w3-hover-deep-orange" style="cursor:pointer;">
                <!-- <i class="material-icons w3-padding-6 w3-hide-small" style="color:#000; font-size:15px;"  onclick="document.getElementById('log').style.display='block'" ><img src="icons/log.png" width="20px" weight="20px" /><%=session.getAttribute("cname")%></i></a>-->
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
            <form action="CartController.php?action=add&pcode=<?php echo $pid; ?>" method="POST" name="modelDetail1">
            <!--product-->
            <div class="w3-row" >
            <div class="w3-container w3-half" style="margin-top:4%">
            <!--product-->
            <table height="" width="100%" border="0" style="margin-top:0%;margin-left: 1%; border: none;">
                       <tr>
         
                           <td>  <img id="mni" src="../Gallery/<?php echo $image;?>" style="width:100%; height: 500px;" class="bigimg">
                               <input type="hidden" name="image" value="<?php echo $image;?>">
                           </td>
        </tr>
        <tr>
                    <td>
                        <table width="100%" border="0px" style="border:none">
                            <tr>
                                <td> <button type="submit" class="w3-btn w3-deep-orange w3-border w3-border-red" style="width: 100%;">Add To Cart</button></td>
                                <td> <button type="submit" formaction="check_out.php" class="w3-btn w3-deep-orange w3-border w3-border-red" style="width: 100%;" value="buynow" name="action">Buy Now</button></td>
                            </tr>
                        </table>     
                    </td>
        </tr>
            </table>
            </div>
        <script typetype="text/javascript">
            function imgChng(event)
            {
                event = event || window.event;
                var targElm = event.target || event.srcElement;
                if(targElm.tagName == "IMG")
                {
                    document.getElementById("mni").src = targElm.getAttribute("src");
                }
            }
        </script>
    <!--right side product summery-->
    <div class="w3-container w3-half" style="margin-top: 2%;">
        <input type="hidden" value="<?php echo $pid; ?>" name="pcode" />
        <p style="font-size: 20px;margin-top: 50px;"><input type="hidden" value="<?php echo $pname;?>" name="pname" /><?php echo $pname;?></p>
        <div><p style="margin-top: -1%;">Ratting <i class="fa fa-heart" style="color:#FF0000"></i> <i class="fa fa-heart" style="color:#FF0000"></i> <i class="fa fa-heart" style="color:#FF0000"></i> <i class="fa fa-heart" style="color:#FF0000"></i> <i class="fa fa-heart"></i></p></div>
        <div>
            <p class="w3-text-gray"  style="margin-top: -1%;text-decoration: line-through;">
            <input type="hidden" value="<?php echo $mrp; ?>" name="price" />Mrp :<?php echo $mrp; ?> /-</p>
            <input type="hidden" value="<?php echo $mrp-($mrp*($discount/100));?>" name="mrp" />
            <p class="w3-xlarge w3-text-blue" style="margin-top: -1.3%; "  id="rate">Price :  <span><?php echo $mrp-($mrp*($discount/100));?>/-</span> <span class="w3-medium w3-text-red"> 
            Discount:<input type="hidden" value="<?php echo $discount; ?>" name="discount" /> <?php echo $discount; ?>%</span>
            </p>
        </div>
        <div class="w3-panel w3-card-16 w3-purple w3-padding-16 w3-text-white" style="">Offer : Buy product more the worth 1500 rupees and get extra 5% off. </div>
            <table border="0" style="margin-top: 7.5%;border: none;">
                <tr>
                    <td>Delivery :</td>
                    <td align="right"><input type="text" class="w3-input" style="width: 140px;" id="areacode" placeholder="enter your pin code" /></td>
                    <td align="left"><button class="w3-btn w3-deep-orange" style=" height:36px;" id="checkpin" type="button" >check</button></td>
                </tr>
                <tr>
                    <td colspan="3"><label id="viewAvail">Check Availability </label></td>
                </tr>
            </table>
            <table border="0" style="border:none; margin-top:0;">
            <tr>
                <td>Quantity :</td>
                 <td><a class="w3-btn-floating w3-deep-orange" id="" onclick="decNum()" style="text-decoration:none;"> - </a></td>
                 <td><input type="text" name="quantity" style="border: none; font-size:25px;width:40px;opacity:0.5;" id="valu" value="1"/></td>
                 <td><a class="w3-btn-floating w3-deep-orange" onclick="incNum()" style="text-decoration:none;"> + </a></td>
                 <td><label style="border:none; font-size: 14px;">Rs.<span id="amnt"><?php echo $mrp-($mrp*($discount/100));?></span>/-</label></td>
                 <td>
                     <input type="hidden" id="quan" name="quan" value="<?php echo $discount; ?>"/>
                    
                     <!--<input type="hidden" name="cust_id" value="<%=cid %>"/>-->
                 </td>
            </tr>
            <tr>
                <td colspan="4"><label style="border:none; color:#999999;">Generally delivered with in 24 hours. </label></td></tr>
        </table>
        <script type="text/javascript">
            var amt=0;
            var s = 1;
            var rt= parseInt(document.getElementById("amnt").innerHTML);
            var quan= parseInt(document.getElementById("quan").value);
            function incNum()
            {
                if (s < 2) 
                {
                s++;
                var amt=s*rt;
                } 
                else if (s == 2) 
                {
                    s = 2;
                    var amt=s*rt;
                }
                document.getElementById("valu").value = s;
                document.getElementById("amnt").innerHTML = amt;
            }

            function decNum() 
            {
                if (s > 1) 
                {
                    --s;
                    var amt=s*rt;
                } 
                else if (s = 1) 
                {
                    s = 1;
                    var amt=s*rt;
                }
                document.getElementById("valu").value = s;
                document.getElementById("amnt").innerHTML = amt;
            }
        </script>
        <div><p>Hsy Guarantee </p> <p style="margin-top: -1%;font-size: 12px;">100% payment return in 7 day's if item is damaged, faulty and different from description <a href="#">show more</a></p></div>
        </div>
        </div>
        </form>
        
            <div class="w3-deep-orange">
            <span style="margin-left: 1%;">Payment Methods</span>
            <ol class="breadcrumbs" style="background-color: transparent; border:none;">
                <li><a><img style="width:40px;" src="../footerimg/visa.png"/></a></li>
                <li><a><img style="width:40px;" src="../footerimg/ms.png"/></a></li>
                <li><a><img style="width:40px;" src="../footerimg/msc.png"/></a></li>
                <li><a><img style="width:40px;" src="../footerimg/rp.png"/></a></li>
                <li><a><img style="width:40px;" src="../footerimg/nb.png"/></a></li>
                <li><a><img style="width:40px;" src="../footerimg/cod.png"/></a></li>
                <li><a><img style="width:40px;" src="../footerimg/sj.png"/></a></li>
                
            </ol>
                <span style="margin-left: 1%;">Products</span>
            <ol class="breadcrumbs" style="background-color: transparent; border:none;">
              <?php
        foreach($types as $df10)
        {
            ?>
            <li><a href="" style="color: white;"><?php echo $df10['product_name'];?></a></li>
            <?php
        } 
           ?>
                
            </ol>
            <span style="margin-left: 1%;">&#169 Reserved 2017 - 2022 (Swapjust.com)</span>
            <table class=" w3-centered"  style="border:none; width:70%; background-color: transparent;">
                <tr>
                    <td width="50%">
                        <div class="w3-large" style="color: white;">
                            Mail us<hr style="margin-top: -.1%;">
                        </div>
                            <span style="color:white;">At: Jaganatha Bihar</span>
                            <div style="color:white;">
                                Sri Ram Nagar
                            </div>
                            <div style="color:white;">
                                Pin code: 760001
                            </div>
                            
                            
                        
                    </td>
                    <td>
                            <div class="w3-large" style="color: white;">
                            Registered office<hr style="margin-top: -.1%;">
                            </div>
                            <span style="color:white;">At: Jaganatha Bihar</span>
                            <div style="color:white;">
                             Sri Ram Nagar
                            </div>
                            <div style="color:white;">
                            Pin code: 760001
                            </div>
                    </td>
                </tr>
            </table>
            <div class="w3-center w3-xlarge" style="background-color: transparent;">About Us<hr style="margin-top: -.1%;"></div>
            <div>
                
            </div>
            </div>
        </div>
            
    </body>
</html>

