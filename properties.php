<?php
    class Employee{
        var $emp_id;
        var $first_name;
        var $last_name;
        var $is_active = false;
    }

    $employee_1 = new Employee;
    $employee_2 = new Employee;


    $employee_1 ->emp_id =100;
    $employee_1 ->first_name = 'Dinuka';
    $employee_1 ->last_name = 'Sandaruwan';

    $employee_2 ->emp_id = 200;
    $employee_2 ->first_name = 'Imasha';
    $employee_2 ->last_name = 'Rasanjalee';

    echo 'Details of Employee 1: <br>';
    echo 'Employee ID: ' .$employee_1->emp_id;
    echo '<br>';
    echo 'Full Name :' . $employee_1->first_name . '  ' . $employee_1->last_name;
    echo '<br><br>';

    $class_vars = get_class_vars('Employee');

    echo '<pre>';
    print_r($class_vars);
    echo '<pre>';


    $object_vars = get_object_vars($employee_1);

    echo '<pre>';
    print_r($object_vars);
    echo '<pre>';



?>