<?php
    class Employee{
        public static $employee_count = 0;

        public static function add_employee(){
            self::$employee_count++;
        }
    }


    class PartTimeEmployee extends Employee{

    }

    Employee::$employee_count = 11;

    echo 'Number of employees' . Employee::$employee_count; 
    echo '<br>';

    Employee::add_employee();

    echo 'Number of employees' .Employee::$employee_count;
    echo '<br>';

    echo 'Part time employee' .PartTimeEmployee::$employee_count;

    PartTimeEmployee::$employee_count = 15;
    
    echo '<br>';
    echo 'Part time employee' .PartTimeEmployee::$employee_count;
    echo '<br>';
    echo 'Number of employees' .Employee::$employee_count;
?>