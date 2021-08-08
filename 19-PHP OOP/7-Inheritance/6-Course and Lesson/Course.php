<?php


class Course
{
    protected $id;
    protected $courseName;

    function __construct($id, $courseName)
    {
        $this->id = $id;
        $this->courseName = $courseName;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCourseName()
    {
        return $this->courseName;
    }

    /**
     * @param mixed $courseName
     */
    public function setCourseName($courseName): void
    {
        $this->courseName = $courseName;
    }

    function printCourseDetails(){
        echo "Course: $this->courseName" . PHP_EOL;
    }
}