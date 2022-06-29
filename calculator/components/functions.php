<?php
    function myCalculator($num1, $num2, $operation) {

        switch ($operation) {
            case "add":
                $sum = $num1 + $num2;
                break;
            case "sub":
                $sum = $num1 - $num2;
                break;
            default:
                $sum = "There was an error!";
                break;
        }
        return $sum;
    }

    $num01 = $_GET["num01"];
    $num02 = $_GET["num02"];
    $operation = $_GET["operation"];

    echo "Value: " . myCalculator($num01, $num02, $operation);
?>