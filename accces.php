<?php 

class Employee{
    public $short_name = "Dinuka";
    protected $employee_no = 123;
    private $salary = 25000;


    public function employee_info(){
        echo 'Employee Informations <br>';
        echo 'Short Name: ' .$this->short_name . '<br>';
        echo 'Employee: ' .$this->employee_no .'<br>';
        echo 'Salary:' .$this->salary . '<br>';
    }
    
}

class FullTimeEmployee extends Employee{
    public function call_employee_info(){
        $this->employee_info();
        
    }
}




// $emp = new Employee;

$emp = new FullTimeEmployee;


$emp ->employee_info();








?>