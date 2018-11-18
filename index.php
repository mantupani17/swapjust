<?php 
@ob_start();
session_start();
$life = 21600;
session_set_cookie_params($life);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Home page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
        <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
        <link rel="shortcut icon" href="logo/logo.jpg" />
        <link rel="stylesheet" href="w3css/w3css.css" />
        <link rel="stylesheet" href="SwapJustCss/homePage.css"/>
        <link rel="stylesheet" href="bootstrap-3.3.7\dist\css\bootstrap.min.css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <link rel="stylesheet" href="icons/font-awesome-4.7.0/css/font-awesome.min.css" />
        <link href="jquery.bxslider.css"/>
        <link rel="stylesheet" href="o/docs/assets/css/docs.theme.min.css">
        <link rel="stylesheet" href="o/docs/assets/owlcarousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="o/docs/assets/owlcarousel/assets/owl.theme.default.min.css">
        <script src="o/docs/assets/vendors/jquery.min.js"></script>
        <script src="o/docs/assets/owlcarousel/owl.carousel.js"></script>
        <script type="text/javascript" src="bootstrap-3.3.7\dist\js\bootstrap.min.js" ></script>
        <script type="text/javascript" lang="javascript"></script>
<script lang="javascript">
     $(function(){
              $("#getOtp").click(showOtp); 
           });
           function showOtp()
           {
               var param = {mbno:$("#mno").val()};
               $.ajax({
                  url:"JSP/getOtp.jsp",
                  data:param,
                  success:showOtpdata,
                  catch:false
               });
           }
           function showOtpdata(data)
           {
               document.getElementById("otpdata").value = data;
           }
</script>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" style="background-color:#F7F7F7;">
    <?php
 include "sjfunctions/product.php";
 $sales_data = athorisedSales();
 $disc_offer = discountAuthOfferData();
 $types = selectProductByTypes();
 $combos = selectTwoComboOffer();
 $buyones = selectBuyOneOffer();
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
<div class="container-fluid" style=" background-image:url(banners/fb.jpg); background-repeat:no-repeat; background-size:100% 100%; color:#fff;height:150px; margin-top:1px;">
</div>

<nav class="navbar navbar-inverse vs " data-spy="affix" data-offset-top="147">
  <ul class="w3-navbar w3-deep-orange w3-border" style="height: 55px;">

  <li>
  <a href="#"  class="w3-hover-deep-orange">
	<img src="logo/logo10-12.png" width="80px;" height="35px" />
  </a>
  </li>
   <li class="w3-dropdown-click" style="margin-top:.5%" >
			<li style="width:40%; margin-top:.5%;margin-left: 3%;">  
			<input type="text" class="w3-input w3-orange w3-padding-6 w3-hide-small"
			placeholder="Search.."  style="width:100%;">
			</li>
			<li style="margin-top:.5%;"><button class="w3-btn w3-black w3-padding-6 w3-hover-orange w3-hide-small" 
			style="color:#fff; height:37px;">Search</button>
			</li>
			<li style="margin-top:-0.3%;">
			<a href="./PHP/cart.php"  style="position:relative; z-index:3;" 
			class="w3-text-white w3-hover-deep-orange w3-hide-small">Basket
			<img src="trolly/bs.png" class="" width="50px"/>
			<span class="w3-badge w3-small w3-orange" style="z-index:2;
			position:absolute; margin-left:-18%; margin-top:.2%;"><?php echo count($_SESSION['cart_item']);?>
			</span></a>
			</li>
			<li id="mr" style="margin-top:.3%;">
             <!--<a class="w3-hide-small w3-hover-deep-orange" style="cursor:pointer;">
                <!-- <i class="material-icons w3-padding-6 w3-hide-small" style="color:#000; font-size:15px;"  onclick="document.getElementById('log').style.display='block'" ><img src="icons/log.png" width="20px" weight="20px" />null</i></a>-->
                <div class="w3-container">
				<div class="w3-dropdown-hover w3-deep-orange">
					<div class="w3-deep-orange" style="margin-top:3px;">
					<i class="material-icons" style="font-size: 40px;">account_circle</i>
					</div>
					<div class="w3-dropdown-content w3-bar-block w3-border w3-black" style="margin-top:-1px;">
               
                <?php
                if($cname)
                {
                ?>
                
                <a href="./PHP/user_profile.php?cid=<?php echo $userid; ?>" class="w3-bar-item w3-button w3-hover-deep-orange" style="color:white"><div style="margin-left: -10px;margin-top: -5px;"><img src="icons/user.png" width="30px" height="20px" />&nbsp;<?php echo $cname;?></div></a>
                <a href="./PHP/cust_order.php?cid=<?php echo $userid; ?>" class="w3-bar-item w3-button w3-hover-deep-orange" style="color:white"><div style="margin-left: -10px;margin-top: -5px;"><img src="icons/order1.png" width="30px" height="20px" />&nbsp;My Order</div></a>
                 <a href="./PHP/track_Product.php" class="w3-bar-item w3-button w3-hover-deep-orange" style="color:white"><div style="margin-left: -10px;margin-top: -5px;"><img src="icons/track1.png" width="30px" height="20px" />&nbsp;Track Order</div></a>
                <a href="./PHP/destuser_cardentials.php" class="w3-bar-item w3-button w3-hover-deep-orange" style="color:white"><div style="margin-left: -10px;margin-top: -5px;"><img src="icons/logout1.png" width="30px" height="20px" />&nbsp;Logout</div> </a>
                <?php
                }
                else
                {
                    ?>
                <a href="#" onClick="document.getElementById('log').style.display='block'" 
				class="w3-bar-item w3-button w3-hover-deep-orange" style="color:white">
				<div style="margin-left: -10px;margin-top: -5px;">
				<img src="icons/login.png" width="30px" height="20px" />&nbsp;signin</div> 
				</a>    
                <a href="PHP/client_register.php" class="w3-bar-item w3-button w3-hover-deep-orange" style="color:white" ><div style="margin-left: -10px;margin-top: -5px;"><img src="icons/reg.png" width="30px" height="20px"/>&nbsp;signup</div></a>
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
	        <span onClick="document.getElementById('log').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
	 <form class="w3-container" action="" method="POST">
        <div class="w3-section">
          <label style="color:#000;"><b>Phone Number</b></label>
          <input class="w3-input  w3-margin-bottom" type="text" placeholder="Enter Phone Number" pattern="[0-9]{10}" style="color:#666666;" name="usrname" id="mno" required />
          <button onclick="" class="w3-deep-orange w3-border-0  w3-padding w3-margin-bottom" id="getOtp" onclick="showOtp();">Get O T P</button><br />
          <label style="color:#000;"><b>Verify OT P</b></label>
          <input class="w3-input" type="text" placeholder="Enter O T P" name="psw" style="color:#666666;" pattern="[0-9]{5}" id="otpdata" required>
          <input class="w3-check" type="checkbox" checked="checked" ><label style="color:#000000"> Agreed Terms & Condition</label>
        </div>
      </form>
                <form class="w3-container" action="PHP/sjuserfin.php" method="POST">
	  <input type="text" class="w3-input" placeholder="Enter Phone Number or email" style="color:#000;" name="uid" required /><br>
	  <input type="password" class="w3-input w3-margin-bottom" placeholder="Enter Password" style="color:#000;" name="pass" required />
          <input class="w3-btn-block w3-deep-orange w3-section w3-padding" type="submit" name="login" value="login" />
</form>
	   <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onClick="document.getElementById('log').style.display='none'" type="button" class="w3-btn w3-red">Cancel</button>
        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#" style="color:#000000;">password</a></span>
      </div>

    </div>
  </div><!---->
        <li>
    
  </li>
	
	   <li id="mr" style="margin-top:-.1%;"><a href="#" class="w3-hide-small w3-hover-deep-orange"><div class="material-icons w3-hide-small" style="font-size:24px;color:#ffffff; margin-top:4%;">call</div><span style="font-size:1.5em; color:#fff;">+91 9861766666</span></a></li>
	   </li>
</ul>
<div id="demo" class="w3-hide w3-hide-large w3-hide-medium">
  <ul class="w3-navbar w3-left-align w3-large w3-black">
    <li><a href="#items">Link 1</a></li>
    <li><a href="#lang">Link 2</a></li>
    <li><a href="#bas">Link 3</a></li>
    <li><a href="#">Link 1</a></li>
    <li><a href="#">Link 2</a></li>
    <li><a href="#">Link 3</a></li>
  </ul>
</div>
</nav> 
    <div>
<!-- Wrapper for slides -->
<div style="position: relative;margin-top:2%;">
    <div>
            <div class="" style="max-height:230px; height:0px; margin-left:15%; width:80%; position: static; margin-top: 0">
                <a href="#"><img class="mySlides" src="banners/FLOWER - Copy.jpg" style="width:100%;"></a>
                <a href="#"> <img class="mySlides" src="banners/hygo2.jpg" style="width:100%"></a>
                <a href="#"><img class="mySlides" src="banners/HTGO3.jpg" style="width:100%"></a>
            </div>
   </div>


<!--<div class="w3-sidenav w3-white" style="width:5%; height:24%; margin-left: -1.08%;">
  <a class="w3-padding-12 w3-blue w3-hover-white w3-hover-text-blue" href="#"><i class="fa fa-facebook" style="font-size:22px"></i></a>
  <a class="w3-padding-12 w3-green w3-hover-white w3-hover-text-green" href="#"><i class="fa fa-whatsapp" style="font-size:22px"></i></a>
  <a class="w3-padding-12 w3-blue w3-hover-white w3-hover-text-blue" href="#"><i class="fa fa-twitter" style="font-size:22px"></i></a>
</div>-->

<!--side navi-->
<div class="col-md-3" style="width:13%; float:left;margin-top: -2%; text-decoration:none;" >
    <ul class="nav nav-pills nav-stacked" style="margin-top: 20%;">
        <li><a href="PHP/filter-product-category.php"><img src="items/sp.jpg" width="100%" class="w3-round-xlarge" style="cursor:pointer;box-shadow:2px 1px 4px 0px #ff6600;" /></a></li>
        <li><a href="#"><img src="items/vg.png" class="w3-round-xlarge" width="100%" style="cursor:pointer; box-shadow:2px 1px 4px 0px #ff6600;" /></a></li>
        <li><a href="#"><img src="items/fl.jpg" class="w3-round-xlarge" width="100%" style="cursor:pointer;box-shadow:2px 1px 4px 0px #ff6600;"/></a></li>
        <li><a href="#"><img src="items/gr.jpg" class="w3-round-xlarge" width="100%" style="cursor:pointer;box-shadow:2px 1px 4px 0px #ff6600;" /></a></li>
  </ul>
</div>
  
</div>
<!--ITEM BOX-->

<div  style="width:100%; height:0%; margin-top: 27%; margin-left: 4%;  "><img src="banners/dm2.jpg"></div>
<section id="demos" style="background-color:red;width: 100%; " >
      <div class="row" style=" margin-left:4%; float:left;">
          <div class="large-12 columns" >
                <div class="owl-carousel owl-theme" >
        <?php
        foreach($disc_offer as $df3)
        {
                        $pcode = $df3['product_code'];
			$mrp = "";
			$discount = $df3['discount'];
			$mrp = getProductPrice($pcode);
			$img = selectsingleImage($pcode);
			
           ?>
<div class=""  style="width:100%;" >
    <div class="w3-border-0" style="margin-left: 0%; width:100%;">
      <div class="w3-third w3-margin-bottom w3-hover-shadow w3-border-0" style=" margin-left:0%; width:100%;">
          <a href="./PHP/offrIndividualPage.php?pid=<?php echo $pcode; ?>&action=disOff" style="text-decoration: none;">
              <div class="w3-card-4">
                  <img src="Gallery/<?php echo $img ;?>" alt="Jane" style="width:200px;height: 150px;"  />
            <div class="w3-container">
                    <div>
			<span class="w3-text-deep-orange" style="font-size: 10px;"><?php echo selectProductName($pcode);?></span><br/>
                         <i class="fa fa-heart" style="color:#FF0000"></i>
                         <i class="fa fa-heart" style="color:#FF0000"></i>
                         <i class="fa fa-heart" style="color:#FF0000;"></i>
                         <i class="fa fa-heart" style="color:#FF0000"></i>
                         <i class="fa fa-heart"></i>
                         <span class="w3-opacity w3-small"><span  style="text-decoration:line-through;color:black;">MRP <?php echo $mrp; ?>/-<br/>Discount <?php echo $discount;?>%</span><br/>
		     <p style="font-size: 12px;" class="w3-text-deep-orange">Price: <?php echo $mrp-($mrp *($discount/100)); ?>/-</p>
                     <input type="hidden" name="pid" value="<?php echo $pcode; ?>"  />
                     </div>
                     
                     <!--<input type="submit" class="viewmore"  name="individual" value="View"/>-->
            </div>
              </a>
        </div>
      </div>            
  </div>
</div>
           <?php
           }
        ?>
        </div>
                  <script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: true,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 3
                  },
                  1000: {
                    items: 6
                  }
                }
              })
            })
          </script>
        </div>
      </div>
                <div id="itembox" class="w3-modal" >
    <div class="w3-modal-content w3-card-24 w3-animate-zoom" style="max-width:1024px">
	        <span onClick="document.getElementById('itembox').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
	 <form class="w3-container" action="">
             <div style="height: 70%; width: 40%; background-color: red;"><img src="items/Katrinaa.jpg">
             </div>
      </form>
                <div>
	  <form class="w3-container" action=""  style="float:right; width: 55%; margin-top: -30%">
	  <input type="text" class="w3-input" placeholder="Enter Phone Number or email" style="color:#000;" required /><br>
	  <input type="password" class="w3-input w3-margin-bottom" placeholder="Enter Password" style="color:#000;" required />
	       <button class="w3-btn-block w3-deep-orange w3-section w3-padding" type="submit">Login</button>
	  </form>
	   <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onClick="document.getElementById('itembox').style.display='none'" type="button" class="w3-btn w3-red">Cancel</button>
        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#" style="color:#000000;">password</a></span>
      </div>

    </div>
  </div>
                </div>
        <!---->
</section>
            <!--timer image-->
            <?php
               $comboid1 = $combos[0]['combo_id'];
               $comboid2 = $combos[1]['combo_id'];
               $img1 = selectsingleImage($comboid1);
               $img2 = selectsingleImage($comboid2);
               $buyid1 = $buyones[0]['offer_code'];
               $buyid2 = $buyones[1]['offer_code'];
               $buyimg1 = selectsingleImage($buyid1);
               $buyimg2 = selectsingleImage($buyid2);
               ?>
        <div class="container-fluid w3-row">
        <div class=" w3-container w3-quarter " style=" cursor: pointer;">
            <a href="./PHP/offrIndividualPage.php?pid=<?php echo $comboid1;?>&action=comboOff" > 
                <img class="w3-padding w3-hover-sepia" src="Gallery/<?php echo $img1;?>" width="100%" style="max-height: 350px;" />
            </a>
    </div>
            <div class="w3-quarter w3-container " style=" cursor: pointer;">
                <a href="./PHP/offrIndividualPage.php?pid=<?php echo $comboid2;?>&action=comboOff" > 
                <img class="w3-padding w3-opacity w3-hover-opacity-off" src="Gallery/<?php echo $img2;?>" width="100%" style="max-height: 350px;" />
                </a>
            </div>
<div class=" w3-quarter w3-container" style=" cursor: pointer;">
    <a href="./PHP/offrIndividualPage.php?pid=<?php echo $buyid1;?>&action=buyOff" > 
    <img  class="w3-padding w3-opacity w3-hover-opacity-off" src="Gallery/<?php echo $buyimg1;?>" width="100%" style="max-height: 350px;"/>
    </a>
</div>
            <div class=" w3-container w3-quarter " style=" cursor: pointer;">
                <a href="./PHP/offrIndividualPage.php?pid=<?php echo $buyid2;?>&action=buyOff" > 
                <img class="w3-padding w3-hover-sepia" src="Gallery/<?php echo $buyimg2;?>" width="100%" style="max-height: 350px;" />
                </a>
    </div>
        </div>
        <!--end-->
<div  style="width:100%; height:0%; margin-top: 3%; margin-left: 4%;"><img src="banners/ls1.jpg"></div> 
<div>
<section id="demos" style="background-color:red;width: 100%; " >
      <div class="row" style=" margin-left:4%; float:left;">
          <div class="large-12 columns" >
                <div class="owl-carousel owl-theme" >
        <?php
        foreach($sales_data as $df)
        {
            $pid = $df['product_code'];
			$pname = "";
			$mrp = $df['mrp'];
			$discount = $df['discount'];
			$selectProd = selectProductName($pid);
			$img = selectsingleImage($pid);
            
           ?>
<div class=""  style="width:100%;" >
    <div class="w3-border-0" style="margin-left: 0%; width:100%;">
      <div class="w3-third w3-margin-bottom w3-hover-shadow w3-border-0" style=" margin-left:0%; width:100%;">
          <a href="PHP/individualProduct.php?pid=<?php echo $pid; ?>" style="text-decoration: none;">
              <div class="w3-card-4">
                  <img src="Gallery/<?php echo $img ;?>" alt="Jane" style="width:200px;height: 150px;"  />
            <div class="w3-container">
                    <div>
                        <span class="w3-text-deep-white" style="font-size: 10px;"><?php echo selectProductName($pid);?></span><br/>
                         <i class="fa fa-heart" style="color:#FF0000"></i>
                         <i class="fa fa-heart" style="color:#FF0000"></i>
                         <i class="fa fa-heart" style="color:#FF0000;"></i>
                         <i class="fa fa-heart" style="color:#FF0000"></i>
                         <i class="fa fa-heart"></i>
                         <span class="w3-opacity w3-small">
                             <span  style="text-decoration:line-through;color:black;">MRP <?php echo $mrp;?>/-<br/>Discount <?php echo $discount;?>%</span><br/>
                                <p style="font-size: 12px;" class="w3-text-deep-white">Price: <?php echo $mrp-($mrp*($discount/100));?>/-</p>.
                         </span>
                     <input type="hidden" name="pid" value="<?php echo $pid;?>"  />
                     </div>
                     
                     <!--<input type="submit" class="viewmore"  name="individual" value="View"/>-->
            </div>
              </a>
        </div>
      </div>            
  </div>
</div>
           <?php
           }
        ?>
        </div>
                  <script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: true,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 3
                  },
                  1000: {
                    items: 6
                  }
                }
              })
            })
          </script>
        </div>
      </div>
</section>
</div>
    <br/>

        <div>
        <table style="width: 100%; height: 150px; border:none;">
            <tr>
                <td class="w3-xxlarge w3-allerta w3-centered" style="background-color: #e8efe8;">Help</td>
                <td class="w3-xxlarge w3-allerta w3-centered" style="background-color: #e8efe8;">Track Order</td>
                <td class="w3-xxlarge w3-allerta w3-centered" style="background-color: #e8efe8;">Sell On SwapJust</td>
                <td class="w3-xxlarge w3-allerta w3-centered" style="background-color: #e8efe8;">Privacy</td>
            </tr>
        </table>
            <div class="w3-deep-orange">
            <span style="margin-left: 1%;">Payment Methods</span>
            <ol class="breadcrumbs" style="background-color: transparent; border:none;">
                <li><a><img style="width:40px;" src="footerimg/visa.png"/></a></li>
                <li><a><img style="width:40px;" src="footerimg/ms.png"/></a></li>
                <li><a><img style="width:40px;" src="footerimg/msc.png"/></a></li>
                <li><a><img style="width:40px;" src="footerimg/rp.png"/></a></li>
                <li><a><img style="width:40px;" src="footerimg/nb.png"/></a></li>
                <li><a><img style="width:40px;" src="footerimg/cod.png"/></a></li>
                <li><a><img style="width:40px;" src="footerimg/sj.png"/></a></li>
                
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
<script>
function myFunction() {
    var x = document.getElementById("demo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
<!--banner slide-->
<script>
var myIndex = 0;
carousel();
function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</body>
        
</html>
<?php
           
            ob_end_flush();
?>
