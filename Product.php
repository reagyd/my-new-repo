<?php

/**
 * 
 * @Reagan Diaz
 * Basic class to manage inventory, this is a work in progress and is a first draft.
 *
 * Two classes, one for managing products, and a sedond that extends to product class(this will be used to count the number of product types we have).
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
 * * @see Function set_id is a private method and will be instanciated automatically, this should be in a constructor(a random number is generated for the product ID but there is a better way to do it because product ID's should be cronological and unique).
 * * @see Function set_price self exlpainatory, and should be required as well(constructor)
 *  * * @see Function set_quantity self exlpainatory, This should start out as zero and should have a function to add items, see buy_product
 *  @see Function show_quantity get the number of items for this product
 *  @see Function buy_product you can buy a product and remove it from the inventory
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

// your code goes here
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
        Product_type::$count++;  //static method to coucnt the number of roduct types
        return true;
    }
}
//====================================

//====================================
//create a new product of apple and set the price and the quantity
// I should find a better word instead of Inventory(will be confusing), maybe product_type?
$apples = new Product_type;

$apples->set_price(10);

$apples->set_quantity(100);



//how many apples do we have? What hapens when I buy apples
echo "The number of apples are ". $apples->show_quantity() ."\n";
$apples->buy_product(5);
echo "I bought 5 apples \n";
echo "The number of apples are ". $apples->show_quantity() ."\n";

//test the number of product types
echo "The number of product types in the inventory list is " . Product_type::$count. "\n";

$car = new Product_type;

echo "The product type of car has been added \n";

echo "The updated number of product types in the inventory list are " . Product_type::$count;
