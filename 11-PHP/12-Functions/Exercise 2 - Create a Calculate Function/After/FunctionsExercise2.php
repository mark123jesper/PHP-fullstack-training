<?php

    declare(strict_types=1);
    function calculator(int $a, int $b, String $operation = "all"){

        $operation = strtolower($operation);
        switch ($operation){
            case "add":
                $result = $a + $b;
                echo "Add: $result" . PHP_EOL;
                break;
            case "subtract":
                $result = $a - $b;
                echo "Subtract: $result" . PHP_EOL;
                break;
            case "multiply":
                $result = $a * $b;
                echo "Multiple: $result" . PHP_EOL;
                break;
            case "divide":
                $result = $a / $b;
                echo "Divide: $result" . PHP_EOL;
                break;
            default:
                $result1 = $a + $b;
                echo "Add: $result1" . PHP_EOL;
                $result2 = $a - $b;
                echo "Subtract: $result2" . PHP_EOL;
                $result3 = $a * $b;
                echo "Multiple: $result3" . PHP_EOL;
                $result4 = $a / $b;
                echo "Divide: $result4" . PHP_EOL;
        }
    }

    calculator(1,2);
    calculator(1,2, "add");
    calculator(1,2, "subtract");
    calculator(1,2, "multiply");
    calculator(1,2, "divide");