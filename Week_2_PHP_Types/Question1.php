<?php
declare(strict_types=1);

echo "__DIR__ = ". __DIR__ . PHP_EOL;
echo "DIRECTORY_SEPARATOR = " . DIRECTORY_SEPARATOR . PHP_EOL;
echo "__FILE__ = ". __FILE__ . PHP_EOL;

echo "Current Path: " . getcwd() . PHP_EOL;

/*
 * Question 1:
 * a) Declare a variable named "integer_variable" and initialize it with an integer of value 5
 * b) Declare a variable named "string_variable" and initialize it with an string of value "Oh my, a string!"
 * c) Declare a variable named "boolean_variable" and initialize it with the boolean TRUE
 * d) Declare a constant named "MY_CONSTANT" using the const syntax and initialize it with an integer of value 1
 * e) Declare a constant named "MY_OTHER_CONSTANT" using the define() syntax and initialize it with the variable
 *      'boolean_variable' as its value.
 */

//a)
$integer_variable = 5;
//b)
$string_variable = "Oh my, a string!";
//c)
$boolean_variable = true;
//d)
const MY_CONSTANT = 1;
//e)
define("MY_OTHER_CONSTANT", $boolean_variable);

var_dump($integer_variable);
var_dump($string_variable);
var_dump($boolean_variable);
var_dump(MY_CONSTANT);
var_dump(MY_OTHER_CONSTANT);
