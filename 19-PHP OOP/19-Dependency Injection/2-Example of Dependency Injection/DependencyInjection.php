<?php

//No Depedency on Course to change anytime now.
class Course{
    public $cid;
    function __construct($cid)
    {
        $this->cid = $cid;
    }
}

class Lesson extends Course{
    public $lid;
    function __construct($lid, Course $course)
    {
        $this->lid = $lid;
        $this->cid = $course->cid;
    }
}

//When new quiz is introduced.
class Quiz extends Lesson {

    public $qid;
    function __construct($qid, Lesson $lesson, Course $course)
    {
        $this->qid = $qid;
        $this->lid = $lesson-lid;
        $this->cid = $course->cid;
    }

}

$course = new Course(1);
$lesson = new Course(100);

//Dependency Injection
$quiz = new Quiz(1, $lesson, $course);

echo "Course ID: " . $quiz->cid . PHP_EOL;
echo "Lesson ID: " . $quiz->lid . PHP_EOL;
echo "Quiz ID: " . $quiz->qid . PHP_EOL;
