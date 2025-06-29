<?php

namespace Src\Station01;

class Practice
{
    public function main(): void
    {
        $student = new Student('男', '1年生');
        $student->echoGrade();
        $student->echoFamily();
    }
}

class Human
{
    protected $family = 'ヒト科';
    public $gender;


    public function __construct($gender)
    {
        $this->gender = $gender;
    }

    public function echoGender()
    {
        echo $this->gender . PHP_EOL;
    }
}

class Student extends Human
{
    public $grade;

    public function __construct($gender, $grade)
    {
        parent::__construct($gender);
        $this->grade = $grade;
    }

    public function echoGrade()
    {
        echo $this->grade . PHP_EOL;
    }

    public function echoFamily()
    {
        echo $this->family;
    }
}

(new Practice())->main();
