<?php

class Employee{
    private $basic_sal = 5000;

    public function get_basic_sal()
    {
        return 'Basic salary Rs.' .$this->basic_sal .'<br>';
    }

}

class FullTimeEmployee extends Employee{

}

$emp_1 = new FullTimeEmployee;
$emp_1 ->basic_sal = 10000;

echo $emp_1->basic_sal;


?>