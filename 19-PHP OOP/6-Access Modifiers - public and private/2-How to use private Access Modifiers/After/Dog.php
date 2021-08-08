<?php


class Dog
{
    private $color;
    private $breed;

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getBreed()
    {
        return $this->breed;
    }

    /**
     * @param mixed $breed
     */
    public function setBreed($breed): void
    {
        $this->breed = $breed;
    }


    //Change it to private to check the errors
    function dogBark(){
        echo "Woof! Woof!" . PHP_EOL;
    }

    function dogSleep(){
        echo "ZZZZzzzzzz...." . PHP_EOL;
    }
}
$dog1 = new Dog();

//Access the Properties Directly
$dog1->setColor("Black" );
$dog1->setBreed( "German Shepard" );

//Call Methods
$dog1->dogBark();
$dog1->dogSleep();

