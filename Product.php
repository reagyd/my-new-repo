<?php
#!/usr/bin/php

/**
 * 
 * @Reagan Diaz
 * Basic class to manage inventory, this is a work in progress and is a first draft.
 *
 * Two classes, one for managing products, and a second that extends the product class(this will be used to count the number of product types we have).
 *
 * @since 0.0.1
 *
 * @link URL
 * @global type $varname Description.
 * @global type $varname Description.
 *
 * @param type $price is the individual item  price.
 * @param type $quantity is the number of items for this product type (This should be required, but I will fix this later).
 * @return type Description.
 * 
 * @see Function set_id is a private method and will be instanciated automatically, this should be in a constructor(a random number is generated for the product ID but there is a better way to do it because product ID's should be cronological and unique).
 * @see Function set_price self exlpainatory, and should be required as well(constructor)
 * @see Function set_quantity self exlpaisnatory, This should start out as zero and should have a function to add items, see buy_product
 * @see Function show_quantity get the number of items for this product
 * @see Function buy_product you can buy a product and remove it from the inventory
 * 
 * There is a second class that extens Product
 * @class Product_type extends Product
 * @param static $count keep track of the number of objects of this class
 * 
 *@function __construct initiaates the counter
 * 
 */



//====================================

class Product
{
    private $price;
    private $quantity;
    private $ID;
 
    private function set_id()
    {
        $this->ID = mt_rand(1 , 100);
    }
 
    public function set_price($price)
    {
 
        $this->price = $price;    
    }
 
    public function set_quantity($quantity)
    {
        $this->quantity = $quantity;
    }
 
    public function show_quantity()
    {
        return $this->quantity;
    }
 
    public function buy_product($number)
    {
        $this->quantity = $this->quantity - $number;
    }
 
 
 
}

//====================================
//inventory class for keeping track of all products
//====================================


class Product_type extends Product
{
    public static $count=0;    
 
    public function __construct()
    {
        //$this->type= $type;
        //$this->year= $year;
        Product_type::$count++;  //static method to count the number of product types objects
        return true;
    }
}
