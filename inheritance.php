<?php
 class Product{

    var $product_name;
    var $cost_price;
    var $sales_price;

    function calculate_sale_price(){
        $this->sales_price = round($this->cost_price = 1.2,2);
    }

}

class Computer extends Product{

    var $processor;
    var $harddisk;
     
}   

class Garment extends Product{

    var $cloth_size;
    var $cloth_name;

}


$my_product = new Garment;

$my_array = get_object_vars($my_product);



echo '<pre>';
print_r($my_product);
echo '</pre>';

?>