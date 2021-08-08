<?php


    /* Sample 1 */
    //Guess the output
    global $name;

    $name = "Srini!";

    function print_name() {
        //Scope of this variable is limited to this function.
        //This variable dies after the function is finished.
        //$name in this function is called as Local Variable.
        $name = "PHP!";
    }

    print_name();
    echo $name;


    /* Sample 2 */
    //Guess the output
    //message variable scope is outside of any functions
    global $message;
    $message = "Welcome to PHP!";
    function print_message() {
        //Variable not defined error.
        echo $message;
    }
    print_message();

    echo "<br>";

    /* Sample 3 */
    //Guess the output
    //message variable scope is outside of any functions
    global $message;
    $message = "This is a Global Variable";
    function print_message_global() {
        //Define Variable as global
        global $message;
        echo $message;
    }
    print_message_global();
