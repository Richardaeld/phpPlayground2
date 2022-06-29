<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>

    <?php
    // api call for varaible
    $api_dice = 'https://dnd-rolling-chart-api.herokuapp.com/api/button/main/viewAll/children/3';
    $json_api_dice = file_get_contents($api_dice);
    $dice_data = json_decode($json_api_dice);
    $var = $dice_data;

    // $var = "something";
    // Outputs one or more strings
    echo "I am an echo", "\r\n", "with an additonal string";
    echo "<br>";
    echo "<br>";

    // addition
    echo "Im adding 7 to 7 -- ", 7+7;
    echo "<br>";
    echo "<br>";

    // Outputs a string
    print "I am a string";
    print "<br>";
    print "<br>";

    // Outputs human readable information about a variable
    print_r("Whole Object:");
    print_r("<br>");
    print_r($var);
    print_r("<br>");
    print_r("<br>");
    print_r("Inside first object:");
    print_r("<br>");
    print_r($var->button);
    print_r("<br>");
    print_r("<br>");
    print_r("Inside first object and objects array at 0:");
    print_r("<br>");
    print_r($var -> button[0]);
    print_r("<br>");
    print_r("<br>");
    print_r("Inside first object and objects array at 0 within name:");
    print_r("<br>");
    print_r($var -> button[0] -> name);
    print_r("<br>");
    print_r("<br>");


    // if else
    // switch -- similar to if else but is more suited for larger blocks to run after condition is met
    // while
    // do-while -- will always run once even if condition is false
    // for -- ($i = 0; $i < 10; $i++){}
    // foreach -- ($array as $value){echo $value;} -- ($array as $key => $value){ echo $key . ": " . $value;}
    // syntax ->

    // imports
    // include
    // include_once
    // require
    // require_once

    // user defined function
    // function calcAdd ($num1 + $num2) {
    //     $value = $num1 + $num2
    //     return $value
    // }

    // Forms
    // Get -- will display in address bar
    // Post -- will NOT display  in address bar

    ?>
</p>

</body>
</html>

