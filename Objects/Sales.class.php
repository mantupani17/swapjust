<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Sales
 *
 * @author Handshakeyou
 */
class Sales {
    //put your code here
    private $product_code;
    private $discount;
    private $date_of_entry;
    private $quantity;
    private $res;
    private $mrp;
    function __construct($product_code, $discount, $date_of_entry, $quantity, $res, $mrp) {
        $this->product_code = $product_code;
        $this->discount = $discount;
        $this->date_of_entry = $date_of_entry;
        $this->quantity = $quantity;
        $this->res = $res;
        $this->mrp = $mrp;
    }
    function getProduct_code() {
        return $this->product_code;
    }

    function getDiscount() {
        return $this->discount;
    }

    function getDate_of_entry() {
        return $this->date_of_entry;
    }

    function getQuantity() {
        return $this->quantity;
    }

    function getRes() {
        return $this->res;
    }

    function getMrp() {
        return $this->mrp;
    }



}
