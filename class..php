<?php 

class Employee 
{
 
}

$class= get_declared_classes();
    
echo '<pre>';
print_r($class);
echo '</pre>';

$class_name = 'Employee';

if(class_exists($class_name))
{
    echo 'class' . $class_name . 'is availabale';
}else{
    echo 'class' . $class_name . 'is note available';
}


?>