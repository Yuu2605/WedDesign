<?php
class Employee
{
    public $id;
    public $name;
    public $workingHoursPerDay = 8;
    public $hourlyRate = 15;
    public $totalLeaveTaken;
    public $workingDays;


    public function getworkingHoursPerday()
    {
        return $this->workingHoursPerDay;
    }
    public function set_hourlyRate($hourlyRate)
    {
        $this->hourlyRate = $hourlyRate;
    }
    public function get_hourlyRate()
    {
        return $this->hourlyRate;
    }
    public function set_totalLeaveTaken($totalLeaveTaken)
    {
        $this->totalLeaveTaken = $totalLeaveTaken;
    }
    public function get_totalLeaveTaken()
    {
        return $this->totalLeaveTaken;
    }
    public function set_workingDays($workingDays)
    {
        $this->workingDays = $workingDays;
    }
    public function get_workingDays()
    {
        return $this->workingDays;
    }
    public function set_workingDays($workingDays){
        
    }
    public function getSalaryAmount($totalDays) {
        return $this-> totalDays;
    }
}

$salary = new Employee;


echo $salary->getworkingHoursPerday();