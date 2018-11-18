<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product
 *
 * @author Handshakeyou
 */
class Product {
    //put your code here
    private $ref_id;
    private $product_code;
    private $batch_no;
    private $product_name;
    private $quantity;
    private $product_for;
    private $category;
    private $specification;
    private $manufacturer;
    private $country;
    private $type_of_product;
    private $veg_or_nonveg;
    private $mrp;
    private $discount;
    private $description;
    private $weight;
    private $size;
    private $color;
    private $ingredient_used;
    private $volume;
    private $flavor;
    private $quality;
    private $reliability;
    private $date_of_entry;
    private $exp_date;
    private $mfd_date;
    //private $res;
    //private $hour;
    //private $product_code2;
    //private $off_code;
    //private $offer_name;
    private $shop_name;
    private $return_type;
    private $why_need;
    
    function __construct($product_code, $batch_no, $product_name, $quantity, $product_for, $category, $specification, $manufacturer, $country, $type_of_product, $veg_or_nonveg, $mrp, $discount, $description, $weight, $size, $color, $ingredient_used, $volume, $flavor, $quality, $reliability, $date_of_entry, $exp_date, $mfd_date, $shop_name, $return_type, $why_need) {
        $this->product_code = $product_code;
        $this->batch_no = $batch_no;
        $this->product_name = $product_name;
        $this->quantity = $quantity;
        $this->product_for = $product_for;
        $this->category = $category;
        $this->specification = $specification;
        $this->manufacturer = $manufacturer;
        $this->country = $country;
        $this->type_of_product = $type_of_product;
        $this->veg_or_nonveg = $veg_or_nonveg;
        $this->mrp = $mrp;
        $this->discount = $discount;
        $this->description = $description;
        $this->weight = $weight;
        $this->size = $size;
        $this->color = $color;
        $this->ingredient_used = $ingredient_used;
        $this->volume = $volume;
        $this->flavor = $flavor;
        $this->quality = $quality;
        $this->reliability = $reliability;
        $this->date_of_entry = $date_of_entry;
        $this->exp_date = $exp_date;
        $this->mfd_date = $mfd_date;
        $this->shop_name = $shop_name;
        $this->return_type = $return_type;
        $this->why_need = $why_need;
    }
   
    function getProduct_code() {
        return $this->product_code;
    }

    function getBatch_no() {
        return $this->batch_no;
    }

    function getProduct_name() {
        return $this->product_name;
    }

    function getQuantity() {
        return $this->quantity;
    }

    function getProduct_for() {
        return $this->product_for;
    }

    function getCategory() {
        return $this->category;
    }

    function getSpecification() {
        return $this->specification;
    }

    function getManufacturer() {
        return $this->manufacturer;
    }

    function getCountry() {
        return $this->country;
    }

    function getType_of_product() {
        return $this->type_of_product;
    }

    function getVeg_or_nonveg() {
        return $this->veg_or_nonveg;
    }

    function getMrp() {
        return $this->mrp;
    }

    function getDiscount() {
        return $this->discount;
    }

    function getDescription() {
        return $this->description;
    }

    function getWeight() {
        return $this->weight;
    }

    function getSize() {
        return $this->size;
    }

    function getColor() {
        return $this->color;
    }

    function getIngredient_used() {
        return $this->ingredient_used;
    }

    function getVolume() {
        return $this->volume;
    }

    function getFlavor() {
        return $this->flavor;
    }

    function getQuality() {
        return $this->quality;
    }

    function getReliability() {
        return $this->reliability;
    }

    function getDate_of_entry() {
        return $this->date_of_entry;
    }

    function getExp_date() {
        return $this->exp_date;
    }

    function getMfd_date() {
        return $this->mfd_date;
    }

    function getShop_name() {
        return $this->shop_name;
    }

    function getReturn_type() {
        return $this->return_type;
    }

    function getWhy_need() {
        return $this->why_need;
    }


    
}
