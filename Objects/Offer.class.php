<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Offer
 *
 * @author Handshakeyou
 */
class Offer {
    private $product1;
    private $product2;
    private $product3;
    private $product4;
    private $product5;
    private $product6; 
    private $product7;
    private $product8;
    private $product9;
    private $product10;
    private $product11;
    private $product12;
    private $product13;
    private $product14;
    private $combo_id;
    private $status;
    private $edate;
    private $combo_return_option;
    private $hour;
    private $quantity;
    private $price;
    private $combo_name;
    function __construct($product1, $product2, $product3, $product4, $product5, $product6, $product7, $product8, $product9, $product10, $product11, $product12, $product13, $product14, $combo_id, $status, $edate, $combo_return_option, $hour, $quantity, $price, $combo_name) {
        $this->product1 = $product1;
        $this->product2 = $product2;
        $this->product3 = $product3;
        $this->product4 = $product4;
        $this->product5 = $product5;
        $this->product6 = $product6;
        $this->product7 = $product7;
        $this->product8 = $product8;
        $this->product9 = $product9;
        $this->product10 = $product10;
        $this->product11 = $product11;
        $this->product12 = $product12;
        $this->product13 = $product13;
        $this->product14 = $product14;
        $this->combo_id = $combo_id;
        $this->status = $status;
        $this->edate = $edate;
        $this->combo_return_option = $combo_return_option;
        $this->hour = $hour;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->combo_name = $combo_name;
    }
    function getProduct1() {
        return $this->product1;
    }

    function getProduct2() {
        return $this->product2;
    }

    function getProduct3() {
        return $this->product3;
    }

    function getProduct4() {
        return $this->product4;
    }

    function getProduct5() {
        return $this->product5;
    }

    function getProduct6() {
        return $this->product6;
    }

    function getProduct7() {
        return $this->product7;
    }

    function getProduct8() {
        return $this->product8;
    }

    function getProduct9() {
        return $this->product9;
    }

    function getProduct10() {
        return $this->product10;
    }

    function getProduct11() {
        return $this->product11;
    }

    function getProduct12() {
        return $this->product12;
    }

    function getProduct13() {
        return $this->product13;
    }

    function getProduct14() {
        return $this->product14;
    }

    function getCombo_id() {
        return $this->combo_id;
    }

    function getStatus() {
        return $this->status;
    }

    function getEdate() {
        return $this->edate;
    }

    function getCombo_return_option() {
        return $this->combo_return_option;
    }

    function getHour() {
        return $this->hour;
    }

    function getQuantity() {
        return $this->quantity;
    }

    function getPrice() {
        return $this->price;
    }

    function getCombo_name() {
        return $this->combo_name;
    }



}
