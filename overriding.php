<?php

class Product{
    var $product_name;
    var $cost_price;
    var $sales_price;
    var $category = 'genaral';

    function display(){
        echo '<b>Product Info<b></br>';
        echo 'Name of Product:<b>' .$this->product_name .'</b></br>';
        echo 'Sales Price:<b>' .$this->sales_price .'</b></br>';
        echo 'category'. $this->category .'/br></br>';
    }

}

class Computer extends Product{
    var $processor;
    var $hard_disk;
    var $ram;
    var $category = 'computer';

    function display(){
        echo '<b>Product Info<b></br>';
        echo 'Name of Product:<b>' .$this->product_name .'</b></br>';
        echo 'Sales Price:<b>' .$this->sales_price .'</b></br>';
        echo 'Processor:<b>'.$this->processor.'</b></br>';
        echo 'Hard Disk:<b>'.$this->hard_disk.'</b></br>';
        echo 'Ram:<b>'.$this->ram.'</b></br>';
        echo 'category'.$this->category .'/br></br>';

    }

}


 $genaral_product = new Product();
 
 $genaral_product->product_name = 'Table Fan';
 $genaral_product->cost_price = '5000';
 $genaral_product->sales_price = '8000';

 $genaral_product->display();

 $computer = new Computer();

 $computer->product_name = 'Macbook Air 2020';
 $computer->cost_price = 200000;
 $computer->sales_price = 15000;
 $computer->processor = 'Intel Core i3';
 $computer->ram = '256';
 $computer->hard_disk = '30Gb';

 $computer->display();

?>