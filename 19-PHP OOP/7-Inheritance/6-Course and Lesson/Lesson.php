<?php

require_once "Course.php";

class Lesson extends Course
{

    protected $lid;
    protected $lessonName;

    function __construct($lid, $lessonName, Course $course)
    {
        $this->lid = $lid;
        $this->lessonName = $lessonName;

        $this->id = $course->getId();
        $this->courseName = $course->getCourseName();

    }

    function printLessonDetails(){
        echo "Lesson: $this->lessonName" . PHP_EOL;
    }
}