<?php
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
 <?php
    @ob_start();
        include '../sjfunctions/product.php';
        $pid = $_GET['pid'];
        $res = selectSingleSales($pid);
        $pname = selectProductName($pid);
        $prodet = selectParticularProduct($pid);
        $types = selectProductByTypes(); 
        $pnames = selectProductNames($pname);
        $images = selectHsyImages($pid);
        $mrp = 0;
        $discount = 0 ;
        $quantity = 0;
        // = mysql_fetch_assoc($indpro);
        if($res)
        {
            $mrp = $res['mrp'];
            $discount = $res['discount'];
            $quantity = $res['quantity'];
            //echo $mrp;
        }
        //$image [] = '';
  ?>
<html>
    <head>
        <title><?php echo $pname;?></title>
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
        <script type="text/javascript" src="../bootstrap-3.3.7/dist/js/bootstrap.min.js" ></script>
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
                <li style="margin-top:.2%;"><a href="#bas"  style="position:relative; z-index:3;" class="w3-text-white w3-hover-deep-orange w3-hide-small">bascket<img src="../trolly/bs.png" class="" width="35px"/><span class="w3-badge w3-small w3-orange" style="z-index:2; position:absolute; margin-left:-18%; margin-top:.2%;"><?php echo count($_SESSION['cart_item']);?></span></a></li>
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
            <div class="w3-container w3-half" style="margin-top:3%">
            <!--product-->
            <table height="" width="100%" border="0" style="margin-top:0%;margin-left: 1%; border: none;">
                       <tr>
            <td width="20%"  onclick="imgChng(event)" >
                <img id="i1" width="100px" src="../Gallery/<?php echo $images[0]; ?>" style="cursor: pointer; " class="imgprd">
                <input type="hidden" value="<?php echo $images[0]; ?>" name="image" />
            </td>
            <td rowspan="4">  <img id="mni" src="../Gallery/<?php echo $images[0]; ?>" style="width:100%; height: 500px;" class="bigimg"></td>
        </tr>
        <tr>
            <td onclick="imgChng(event)">
                <img id="i1" width="100px" src="../Gallery/<?php echo $images[1]; ?>"  style="cursor: pointer;" class="imgprd">  
            </td>
        </tr>
          <tr>
            <td onclick="imgChng(event)">
                  <img id="i1" width="100px" src="../Gallery/<?php echo $images[2]; ?>"  style="cursor: pointer;" class="imgprd">
            </td>
        </tr>
          <tr>
            <td onclick="imgChng(event)">
                  <img id="i1" width="100px" src="../Gallery/<?php echo $images[3]; ?>"  style="cursor: pointer;" class="imgprd">
            </td>
        </tr>
                    <td colspan="2">
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
    <div class="w3-container w3-half" style="margin-top: 4%;">
        <input type="hidden" value="<?php echo $pid;?>" name="pcode" />
        <p style="font-size: 20px;"><input type="hidden" value="<?php echo $pname; ?>" name="pname" /><?php echo $pname; ?></p>
        <div><p style="margin-top: -1%;">Ratting <i class="fa fa-heart" style="color:#FF0000"></i> <i class="fa fa-heart" style="color:#FF0000"></i> <i class="fa fa-heart" style="color:#FF0000"></i> <i class="fa fa-heart" style="color:#FF0000"></i> <i class="fa fa-heart"></i></p></div>
        <div>
            <p class="w3-text-gray"  style="margin-top: -1%;text-decoration: line-through;">
            <input type="hidden" value="<?php echo $mrp;?>" name="price" />Mrp :<?php echo $mrp;?> /-</p>
            <p class="w3-xlarge w3-text-blue" style="margin-top: -1.3%; "  id="rate">
                <input type="hidden" name="mrp" value="<?php echo $mrp-($mrp*($discount/100));?>" />Price :  <span><?php echo $mrp-($mrp*($discount/100));?>/-</span> <span class="w3-medium w3-text-red"> 
            Discount:<input type="hidden" value="<?php echo $discount; ?>" name="discount" /> <?php echo $discount;?>%</span>
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
                     <input type="hidden" id="quan" name="quan" value="<?php echo $discount;?>"/>
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
        <div>
        <ul class="nav nav-tabs" style="width: 78.5%">
            <li class="active"><a data-toggle="tab" href="#sup" style="color:#666666">Supplementary</a></li>
            <li><a data-toggle="tab" href="#veg" style="color:#666666">Vegetables</a></li>
            <li><a data-toggle="tab" href="#gro" style="color:#666666">Grocery</a></li>
            <li><a data-toggle="tab" href="#flw" style="color:#666666">Flowers</a></li>
        </ul>
        <div class="tab-content" style="width: 80%;">
        <div id="sup" class="tab-pane fade in active">
        <table border="0" style="border: none;">
            <tr>
            <?php
            foreach($pnames as $pn)
            {
                $pid = $pn['product_code'];
                
            ?>
           
                <td width="222px">
                    <div class="w3-border-0"><a href="../PHP/individualProduct.php?pid=<?php echo $pid; ?>" style="text-decoration:none;">
                    <div class="w3-third w3-margin-bottom w3-hover-shadow w3-border-0" style=" margin-left:3%; width:100%;">
                    <div class="w3-card-4">
                        <img src="../Gallery/<?php echo selectsingleImage($pid); ?>" alt="Jane" style="width:100%">
                    <div class="w3-container">
                    <span class="w3-text-deep-orange"><?php echo $pn['product_name']; ?></span><br/>
                    <span style="color:red; font-size:10px;">Brand <?php echo $pn['mfd_company']; ?></span>
                    <p>
                        <i class="fa fa-heart" style="color:#FF0000"></i>
                        <i class="fa fa-heart" style="color:#FF0000"></i>
                        <i class="fa fa-heart" style="color:#FF0000"></i>
                        <i class="fa fa-heart" style="color:#FF0000"></i>
                        <i class="fa fa-heart"></i>
                    </p>
                   <span class="w3-opacity w3-small">
                        <span  style="text-decoration:line-through;">MRP <?php echo $pn['mrp']; ?>/-</span>&nbsp; &nbsp;<br/>Discount <?php echo $pn['discount']; ?>%<br/>
                    <span style="font-size: 12px;">Price: <?php echo $pn['mrp']-($pn['mrp']*($pn['discount']/100));?>/-</span>
                    </span>
                    </div>
                    </div>
                    </div>
                    </a>
                    </div>
                </td>
            
                <?php
                }
                ?>
            </tr>
        </table>
        </div>
        <div id="veg" class="tab-pane fade">
            <table border="0" style="border: none;">
                <tr>
                    <td>
                        <div class="w3-border-0"><a href="http://www.handshakeyou.com" style="text-decoration:none;">
                        <div class="w3-third w3-margin-bottom w3-hover-shadow w3-border-0" style=" margin-left:3%; width:100%;">
                        <div class="w3-card-4">
                        <img src="../items/deepika.jpg" alt="Jane" style="width:100%">
                        <div class="w3-container">
                        <h3 class="w3-text-deep-orange">Katrina</h3>
                        <p><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart"></i></p>
                        <p class="w3-opacity w3-small"><span  style="text-decoration:line-through;">MRP 2000/-</span>&nbsp; &nbsp;Discount 50%</p>
                        <p>Price: 4000/-</p>
                        </div>
                        </div>
                        </div>
                        </a>
                        </div>
                    </td>
                    <td>
                        <div class="w3-border-0"><a href="http://www.handshakeyou.com" style="text-decoration:none;">
                        <div class="w3-third w3-margin-bottom w3-hover-shadow w3-border-0" style=" margin-left:3%; width:100%;">
                        <div class="w3-card-4">
                        <img src="../items/deepika.jpg" alt="Jane" style="width:100%">
                        <div class="w3-container">
                        <h3 class="w3-text-deep-orange">Katrina</h3>
                        <p><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart"></i></p>
                        <p class="w3-opacity w3-small"><span  style="text-decoration:line-through;">MRP 2000/-</span>&nbsp; &nbsp;Discount 50%</p>
                        <p>Price: 4000/-</p>
                        </div>
                        </div>
                        </div>
                        </a>
                        </div>
                    </td>
                    <td>
                        <div class="w3-border-0"><a href="http://www.handshakeyou.com" style="text-decoration:none;">
                        <div class="w3-third w3-margin-bottom w3-hover-shadow w3-border-0" style=" margin-left:3%; width:100%;">
                        <div class="w3-card-4">
                        <img src="../items/deepika.jpg" alt="Jane" style="width:100%">
                        <div class="w3-container">
                        <h3 class="w3-text-deep-orange">Katrina</h3>
                        <p><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart"></i></p>
                        <p class="w3-opacity w3-small"><span  style="text-decoration:line-through;">MRP 2000/-</span>&nbsp; &nbsp;Discount 50%</p>
                        <p>Price: 4000/-</p>
                        </div>
                        </div>
                        </div>
                        </a>
                        </div>
                    </td>
                    <td>
                        <div class="w3-border-0"><a href="http://www.handshakeyou.com" style="text-decoration:none;">
                        <div class="w3-third w3-margin-bottom w3-hover-shadow w3-border-0" style=" margin-left:3%; width:100%;">
                        <div class="w3-card-4">
                        <img src="../items/deepika.jpg" alt="Jane" style="width:100%">
                        <div class="w3-container">
                        <h3 class="w3-text-deep-orange">Katrina</h3>
                        <p><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart"></i></p>
                        <p class="w3-opacity w3-small"><span  style="text-decoration:line-through;">MRP 2000/-</span>&nbsp; &nbsp;Discount 50%</p>
                        <p>Price: 4000/-</p>
                        </div>
                        </div>
                        </div>
                        </a>
                        </div>
                    </td>
                    <td>
                        <div class="w3-border-0"><a href="http://www.handshakeyou.com" style="text-decoration:none;">
                        <div class="w3-third w3-margin-bottom w3-hover-shadow w3-border-0" style=" margin-left:3%; width:100%;">
                        <div class="w3-card-4">
                        <img src="../items/deepika.jpg" alt="Jane" style="width:100%">
                        <div class="w3-container">
                        <h3 class="w3-text-deep-orange">Katrina</h3>
                        <p><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart"></i></p>
                        <p class="w3-opacity w3-small"><span  style="text-decoration:line-through;">MRP 2000/-</span>&nbsp; &nbsp;Discount 50%</p>
                        <p>Price: 3000/-</p>
                        </div>
                        </div>
                        </div>
                        </a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div id="gro" class="tab-pane fade">
            <table border="0" style="border: none;">
                <tr>
                    <td>
                        <div class="w3-border-0"><a href="http://www.handshakeyou.com" style="text-decoration:none;">
                        <div class="w3-third w3-margin-bottom w3-hover-shadow w3-border-0" style=" margin-left:3%; width:100%;">
                        <div class="w3-card-4">
                        <img src="../items/deepika.jpg" alt="Jane" style="width:100%">
                        <div class="w3-container">
                        <h3 class="w3-text-deep-orange">Katrina</h3>
                        <p><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart"></i></p>
                        <p class="w3-opacity w3-small"><span  style="text-decoration:line-through;">MRP 2000/-</span>&nbsp; &nbsp;Discount 50%</p>
                        <p>Price: 4000/-</p>
                        </div>
                        </div>
                        </div>
                        </a>
                        </div>
                    </td>
                    <td>
                        <div class="w3-border-0"><a href="http://www.handshakeyou.com" style="text-decoration:none;">
                        <div class="w3-third w3-margin-bottom w3-hover-shadow w3-border-0" style=" margin-left:3%; width:100%;">
                        <div class="w3-card-4">
                        <img src="../items/deepika.jpg" alt="Jane" style="width:100%">
                        <div class="w3-container">
                        <h3 class="w3-text-deep-orange">Katrina</h3>
                        <p><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart"></i></p>
                        <p class="w3-opacity w3-small"><span  style="text-decoration:line-through;">MRP 2000/-</span>&nbsp; &nbsp;Discount 50%</p>
                        <p>Price: 4000/-</p>
                        </div>
                        </div>
                        </div>
                        </a>
                        </div>
                    </td>
                    <td>
                        <div class="w3-border-0"><a href="http://www.handshakeyou.com" style="text-decoration:none;">
                        <div class="w3-third w3-margin-bottom w3-hover-shadow w3-border-0" style=" margin-left:3%; width:100%;">
                        <div class="w3-card-4">
                        <img src="../items/deepika.jpg" alt="Jane" style="width:100%">
                        <div class="w3-container">
                        <h3 class="w3-text-deep-orange">Katrina</h3>
                        <p><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart"></i></p>
                        <p class="w3-opacity w3-small"><span  style="text-decoration:line-through;">MRP 2000/-</span>&nbsp; &nbsp;Discount 50%</p>
                        <p>Price: 4000/-</p>
                        </div>
                        </div>
                        </div>
                        </a>
                        </div>
                    </td>
                    <td>
                        <div class="w3-border-0"><a href="http://www.handshakeyou.com" style="text-decoration:none;">
                        <div class="w3-third w3-margin-bottom w3-hover-shadow w3-border-0" style=" margin-left:3%; width:100%;">
                        <div class="w3-card-4">
                        <img src="../items/deepika.jpg" alt="Jane" style="width:100%">
                        <div class="w3-container">
                        <h3 class="w3-text-deep-orange">Katrina</h3>
                        <p><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart"></i></p>
                        <p class="w3-opacity w3-small"><span  style="text-decoration:line-through;">MRP 2000/-</span>&nbsp; &nbsp;Discount 50%</p>
                        <p>Price: 4000/-</p>
                        </div>
                        </div>
                        </div>
                        </a>
                        </div>
                    </td>
                    <td>
                        <div class="w3-border-0"><a href="http://www.handshakeyou.com" style="text-decoration:none;">
                        <div class="w3-third w3-margin-bottom w3-hover-shadow w3-border-0" style=" margin-left:3%; width:100%;">
                        <div class="w3-card-4">
                        <img src="../items/deepika.jpg" alt="Jane" style="width:100%">
                        <div class="w3-container">
                        <h3 class="w3-text-deep-orange">Katrina</h3>
                        <p><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart"></i></p>
                        <p class="w3-opacity w3-small"><span  style="text-decoration:line-through;">MRP 2000/-</span>&nbsp; &nbsp;Discount 50%</p>
                        <p>Price: 2000/-</p>
                        </div>
                        </div>
                        </div>
                        </a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div id="flw" class="tab-pane fade">
            <table border="0" style="border: none;">
                <tr>
                    <td>
                        <div class="w3-border-0"><a href="http://www.handshakeyou.com" style="text-decoration:none;">
                        <div class="w3-third w3-margin-bottom w3-hover-shadow w3-border-0" style=" margin-left:3%; width:100%;">
                        <div class="w3-card-4">
                        <img src="../items/deepika.jpg" alt="Jane" style="width:100%">
                        <div class="w3-container">
                        <h3 class="w3-text-deep-orange">Katrina</h3>
                        <p><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart"></i></p>
                        <p class="w3-opacity w3-small"><span  style="text-decoration:line-through;">MRP 2000/-</span>&nbsp; &nbsp;Discount 50%</p>
                        <p>Price: 4000/-</p>
                        </div>
                        </div>
                        </div>
                        </a>
                        </div>
                    </td>
                    <td>
                        <div class="w3-border-0"><a href="http://www.handshakeyou.com" style="text-decoration:none;">
                        <div class="w3-third w3-margin-bottom w3-hover-shadow w3-border-0" style=" margin-left:3%; width:100%;">
                        <div class="w3-card-4">
                        <img src="../items/deepika.jpg" alt="Jane" style="width:100%">
                        <div class="w3-container">
                        <h3 class="w3-text-deep-orange">Katrina</h3>
                        <p><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart"></i></p>
                        <p class="w3-opacity w3-small"><span  style="text-decoration:line-through;">MRP 2000/-</span>&nbsp; &nbsp;Discount 50%</p>
                        <p>Price: 4000/-</p>
                        </div>
                        </div>
                        </div>
                        </a>
                        </div>
                    </td>
                    <td>
                        <div class="w3-border-0"><a href="http://www.handshakeyou.com" style="text-decoration:none;">
                        <div class="w3-third w3-margin-bottom w3-hover-shadow w3-border-0" style=" margin-left:3%; width:100%;">
                        <div class="w3-card-4">
                        <img src="../items/deepika.jpg" alt="Jane" style="width:100%">
                        <div class="w3-container">
                        <h3 class="w3-text-deep-orange">Katrina</h3>
                        <p><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart"></i></p>
                        <p class="w3-opacity w3-small"><span  style="text-decoration:line-through;">MRP 2000/-</span>&nbsp; &nbsp;Discount 50%</p>
                        <p>Price: 4000/-</p>
                        </div>
                        </div>
                        </div>
                        </a>
                        </div>
                    </td>
                    <td>
                        <div class="w3-border-0"><a href="http://www.handshakeyou.com" style="text-decoration:none;">
                        <div class="w3-third w3-margin-bottom w3-hover-shadow w3-border-0" style=" margin-left:3%; width:100%;">
                        <div class="w3-card-4">
                        <img src="../items/deepika.jpg" alt="Jane" style="width:100%">
                        <div class="w3-container">
                        <h3 class="w3-text-deep-orange">Katrina</h3>
                        <p><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart"></i></p>
                        <p class="w3-opacity w3-small"><span  style="text-decoration:line-through;">MRP 2000/-</span>&nbsp; &nbsp;Discount 50%</p>
                        <p>Price: 4000/-</p>
                        </div>
                        </div>
                        </div>
                        </a>
                        </div>
                    </td>
                    <td>
                        <div class="w3-border-0"><a href="http://www.handshakeyou.com" style="text-decoration:none;">
                        <div class="w3-third w3-margin-bottom w3-hover-shadow w3-border-0" style=" margin-left:3%; width:100%;">
                        <div class="w3-card-4">
                        <img src="../items/deepika.jpg" alt="Jane" style="width:100%">
                        <div class="w3-container">
                        <h3 class="w3-text-deep-orange">Katrina</h3>
                        <p><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart" style="color:#FF0000"></i><i class="fa fa-heart"></i></p>
                        <p class="w3-opacity w3-small"><span  style="text-decoration:line-through;">MRP 2000/-</span>&nbsp; &nbsp;Discount 50%</p>
                        <p>Price: 1000/-</p>
                        </div>
                        </div>
                        </div>
                        </a>
                        </div>
                        </td>
                </tr>
            </table>
            </div>
            </div>
            </div>
        <div style=""> 
            <table border="0" style="border: none; background-color: #fff;" width="80%" >
                <tr>
                    <td valign="top">
                        <label style="color:#999999; text-align: right;  font-size: 17px;">Features</label>
                    </td>
                    <td>
                        <ul style="color:#999999; margin-top: 10%;font-size: 14px;">
                            <li>flavor: <span><?php echo $prodet['flavor'];?></span></li>
                            <li>food type: <span><?php echo $prodet['type_of_product'];?></span></li>
                            <li>suitable for: <span><?php echo $prodet['product_for'];?></span></li>
                        </ul>
                    </td>
                    <td valign="top">
                        <label style="color:#999999; text-align: right;  font-size: 17px;">Services</label>
                    </td>
                    <td>
                        <ul style="color:#999999; margin-top: 10%;font-size: 14px;">
                            <li>Cash On Delivery</li>
                            <li><?php echo $prodet['return_type'];?> Return Applicable</li>
                            <li>HSY Money Accepted</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        <label style="color:#999999; text-align: right;  font-size: 17px;">General</label>
                    </td>
                    <td>
                        <ul style="color:#999999; margin-top: 10%;font-size: 14px;">
                            <li>Brand: <span><?php echo $prodet['mfd_company'];?> </span></li>
                            <li>Model Number: <span><?php echo $prodet['batch_no'];?></span></li>
                            <li>Suitable for: <span><?php echo $prodet['product_for'];?></span></li>
                            <li>Quantity: <span><?php echo $prodet['size'];?></span></li>
                        </ul>
                    </td>
                    <td valign="top">
                        <label style="color:#999999; text-align: right;  font-size: 17px;">Specification </label>
                    </td>
                    <td>
                        <ul style="color:#999999; margin-top: 10%;font-size: 14px;">
                            <li>Manufactures: <span><?php echo $prodet['mfd_company'].",".$prodet['country'];?></span></li>
                            <li>Pack of: <span>1</span></li>
                            <li>Sales package of: <span>2</span></li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>
                            <!--f-->
        <br/>
        <div>
        <table style="width: 100%; height: 150px; border:none;">
            <tr>
                <td class="w3-xxlarge w3-allerta w3-centered" style="background-color: #e8efe8;">Help</td>
                <td class="w3-xxlarge w3-allerta w3-centered" style="background-color: #e8efe8;">Track Order</td>
                <td class="w3-xxlarge w3-allerta w3-centered" style="background-color: #e8efe8;">Sell On ShopJust</td>
                <td class="w3-xxlarge w3-allerta w3-centered" style="background-color: #e8efe8;">Privacy</td>
            </tr>
        </table>
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

