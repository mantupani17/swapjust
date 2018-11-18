<?php
include '../swapjustconfig/Swapjust_Connection.php';
$sjfun = new Swapjust_Connection();
$hsy_prod = $sjfun->getAll("select * from hsy_product");
$dis_offer = $sjfun->getAll("select * from hsy_offer");
$combo_offer = $sjfun->getAll("select * from hsy_combo");
$buy_one_offer = $sjfun->getAll("select * from hsy_buy_one");
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<select id="vc" onchange="getOnData();">
    <optgroup label="Products">
    <option>&nbsp;</option>
    <?php
    foreach($hsy_prod as $prod)
        {
    ?>
    <option value="<?php echo $prod['product_code']; ?>"><?php echo $prod['product_name'];?></option>
    <?php
    }
    ?>
    </optgroup>
    <optgroup label="Discount Offer">
        <option>&nbsp;</option>
        <?php
        foreach($dis_offer as $dofprod)
        {
            $pcode = $dofprod['product_code'];
            $pname = $sjfun->getOne("select product_name from hsy_product where product_code like '".$pcode."'");
        ?>
        <option value="<?php echo $dofprod['product_code']; ?>"><?php echo $pname['product_name'];?></option>
        <?php
        }
        ?>
    </optgroup>
    <optgroup label="Combo Offer">
        <option>&nbsp;</option>
        <?php
        foreach($combo_offer as $combo)
        {
        ?>
        <option value="<?php echo $combo['combo_id'];?>"><?php echo $combo['combo_name'];?></option>
        <?php
        }
        ?>
    </optgroup>
    <optgroup label="Buy One Get One">
        <option>&nbsp;</option>
        <?php
        foreach($buy_one_offer as $bogo)
        {
        ?>
        <option value="<?php echo $bogo['offer_code'];?>"><?php echo $bogo['offer_name'];?></option>
        <?php
        }
        ?>
    </optgroup>
</select>
