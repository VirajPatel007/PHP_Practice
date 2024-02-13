<?php
declare(strict_types=1);
//var_dump($_SERVER);
var_dump(__FILE__);
var_dump(__DIR__);

$given_array = [3, 56, "hello", "potato"];
$given_value = -4;
$if_result = null;

/*
 * Question 3: control statements
 * a) Create an empty array variable named "my_array". Then, create a foreach loop that iterates over the elements
 *      of the array $given_array (exists already). Inside the loop, add the element to "my_array" by using
 *      the array access operator without a specified key.
 * b) Create an if... elseif... else... statement that checks whether the value of the variable $given_value
 *      (exists already) is less than, equal or greater than zero. In each case, assign the result to the variable
 *      $if_result (exists already).
 */

//a)
$my_array = [];

foreach ($given_array as $element){
    // $my_array[]: This syntax appends a new element to the end of the $my_array. It's a shorthand for adding an element without specifying the index explicitly.
    // $my_array[] is an array push operation that appends a new element to the end of the array.
    $my_array[] = $element;
}

var_dump($my_array);

//b)
if ($given_value > 0) {
    $if_result = 1;
}
else if ($given_value == 0) {
    $if_result = 0;
}
else {
    $if_result = -1;
}

var_dump($if_result);