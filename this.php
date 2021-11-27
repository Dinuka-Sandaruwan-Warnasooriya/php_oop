<?php 

class Employee{

     var $first_name;
     var $last_name;
     
     function full_name(){

         return $this-> first_name . ' ' . $this->last_name;
     }
}

$employee = new Employee;

$employee->first_name = 'Dinuka';
$employee->last_name = 'Sandaruwan';


echo $employee->full_name();




?>