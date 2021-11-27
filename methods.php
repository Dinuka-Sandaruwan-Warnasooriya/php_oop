<?php 

class Employee{
    function Greet(){

        return 'Welcome';
        
    }


    function Basic_Salary(){
        return '12500';
    }

}

$employee_1 = new Employee;

echo $employee_1 ->greet();

$class_methods =  get_class_methods('Employee');

echo '<pre>';
print_r($class_methods);
echo '</pre>';



?>