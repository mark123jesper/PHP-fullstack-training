<?php


class Teacher extends University
{
    public $teacherName;
    public $teacherAge;
    public $subject;

    function __construct($teacherName, $teacherAge, $subject, University $university)
    {
        //Update the Teacher Details
        $this->teacherName = $teacherName;
        $this->teacherAge = $teacherAge;
        $this->subject = $subject;

        //Update the University Details for this Teacher
        $this->universityName = $university->universityName;
        $this->universityAddress = $university->universityAddress;
        $this->licenseNo = $university->licenseNo;
    }

    function printTeacherDetails(){
        echo "Teacher Name: $this->teacherName" . PHP_EOL;
        echo "Teacher Age: $this->teacherAge" . PHP_EOL;
        echo "Subject: $this->subject" . PHP_EOL;
    }
}