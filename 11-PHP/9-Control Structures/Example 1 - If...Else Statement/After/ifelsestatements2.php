<?php

    /*
     * 1) Syntax of if and else condition
     * 2) Check if the inputs given by user is correct.
     * 3) if condition statement without braces.
     * 4) Check if Student is passed or failed.
     *
     */

     //Sample 1
    //1) Syntax of if and else condition
    //Please follow the coding style.

    $some_boolean_condition = FALSE;
    if ( $some_boolean_condition ) {
        echo 'This is a If Block' . PHP_EOL;
        echo 'This is a True Condition' . PHP_EOL;
    } else {
        echo 'This is a Else Block' . PHP_EOL;
        echo 'This is a False Condition' . PHP_EOL;
    }

    //Guess the output
    $one_more_boolean_condition = FALSE;
    if ( $some_boolean_condition && $one_more_boolean_condition) {
        echo 'This is a If Block' . PHP_EOL;
        echo 'This is a True Condition' . PHP_EOL;
    } else {
        echo 'This is a Else Block' . PHP_EOL;
        echo 'This is a False Condition' . PHP_EOL;
    }

?>

<!-- //php and html are mixed together with ifelse -->
<!doctype html>
<html>
<head>
    <title>
        if else Statements
    </title>
</head>
<body>

<?php if ($some_boolean_condition || true) { ?>

    <h1>This is a True Condition Block.</h1>

<?php } else { ?>

    <h1>This is a False Condition Block</h1>

<?php } ?>

</body>
</html>

<?php

    //Sample 2:
    // 2) Check if the inputs given by user is correct.
    $input1 = "Some Text from User"; //Comment this later and check
    //Show how to use the if condition to check different variations of checking nulls

    $input2 = 34;

    //Condition 1
    if( !is_null($input1)  ) {
        echo '$input1 is not empty';
    } else {
        echo '$input1 is empty value';
    }

    //Condition 2
    if( isset($input1) &&  !is_null($input1)  ) {
        echo '$input1 is not empty';
    } else {
        echo '$input1 is empty value';
    }

    //Condition 3
    if($input1 != ""  ) {
        echo '$input1 is not empty';
    } else {
        echo '$input1 is empty value';
    }

    //Best Way to check if field is empty
    if( !empty($input1) ) {
        echo '$input1 is not empty';
    } else {
        echo '$input1 is empty value';
    }

    if( $input2 >= 34 ){
        echo 'input2 is greater than 34';
    } else {
        echo 'input2 is less than 34';
    }

?>
