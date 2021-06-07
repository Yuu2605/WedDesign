<?php
require('Person.php');

class Student extends Person
{
    public $grade;
    function __construct($name, $age, $grade)
    {
        parent::__construct($name,$age);
        $this->grade = $grade;
    }
}