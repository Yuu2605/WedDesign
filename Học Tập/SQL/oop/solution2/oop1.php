<?php
class Employee
{
    var $id ;
    var $name;
    var $workingHoursPerDay;
    var $hourlyRate;
    var $totalLeaveTaken;
    var $workingDays;
    var $info;

    function setinf($id, $name, $workingHoursPerDay, $hourlyRate, $totalLeaveTaken, $workingDays)
    {
        $this->id = $id;
        $this->name = $name;
        $this->workingHoursPerDay = $workingHoursPerDay;
        $this->hourlyRate = $hourlyRate;
        $this->totalLeaveTaken = $totalLeaveTaken;
        $this->workingDays = $workingDays;
        $this->getSalaryAmount = ($this->workingDays-$this->totalLeaveTaken)*$this->workingHoursPerDay*$this->hourlyRate;;
        $this->processInfomation();
    }
    function processInfomation()
    {
        return $this->info = $this->name .' has worked for '. $this->workingDays .' days and taken '. $this->totalLeaveTaken .' leaves,'. $this->name .' salary is '.$this->getSalaryAmount;

    }

    function getInfo() {
        return $this->info;
    }
}

$Employee = new Employee();

$Employee->setinf("join","17slime",8,15,2,25);
echo $Employee->getInfo();