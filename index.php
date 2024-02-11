<?php

/*1. Variables*/
//1.1 Variable Declaration

//echo "Hello World!";   // Hello World!

$num = 10;
$result = $num + 10;    // 20

/* variable redefinition*/

$num = $num + 20;
//echo $result;
//echo $num;              // 30   


/* 1.2 Data Types */
//1.2.1 String

$name = 'John';
$my_name_is = "My name is $name";
//echo $my_name_is;       // My name is John

// string concatenation
$first_name = "John";
$last_name = "Doe";
$full_name = $first_name . " " . $last_name;
echo $full_name;        // John Doe
echo "$first_name $last_name";  // John Doe

//1.2.2 Integer is a non-decimal number between -2,147,483,648 and 2,147,483,647.

$x = 5985;

//1.2.3 Float (floating point number) is a number with a decimal point or a number in exponential form.

$y = 10.365;

//1.2.4 Boolean represents two possible states: TRUE or FALSE.

$sky_is_blue = true;

//1.2.5 Array is a special variable, which can hold more than one value at a time. Array stores multiple values in one single variable

$cars = array("Volvo", "BMW", "Toyota");

//1.2.6 Object is a data type which stores data and information on how to process that data.
