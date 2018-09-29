<?php
include 'Product.php';
//====================================

//====================================
//create a new product of apple and set the price and the quantity
// I should find a better word instead of Inventory(will be confusing), maybe product_type?
$apples = new Product_type;

$apples->set_price(10);

$apples->set_quantity(100);



//how many apples do we have? What hapens when I buy apples
echo "The number of apples are ". $apples->show_quantity() ."\n";
$apples->buy_product(5); //buy 5 apples and remove them from the inventory
echo "I bought 5 apples \n";
echo "The number of apples are ". $apples->show_quantity() ."\n";

//test the number of product types
echo "The number of product types in the inventory list is " . Product_type::$count. "\n";

$car = new Product_type;  //another product type is added to test the ptuduct type counter 

echo "The product type of car has been added \n";

echo "The updated number of product types in the inventory list are " . Product_type::$count;
