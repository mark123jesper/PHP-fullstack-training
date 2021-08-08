<?php

abstract class Company {
    protected $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    abstract function setExpert($subject);
}

class Employee extends Company{
    protected $subject;

    function setExpert($subject)
    {
        $this->subject = $subject;
    }
}