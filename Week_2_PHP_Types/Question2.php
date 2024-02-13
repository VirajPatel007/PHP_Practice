<?php
declare(strict_types=1);
//var_dump($_SERVER);

class TestObject {
    public readonly int $anInt;
    public readonly float $aFloat;
    public readonly string $aString;
    public readonly array $aNumericArray;
    public readonly array $anAssociativeArray;
    
    public function __construct() {
        $this->anInt = 5;
        $this->aFloat = 2.0594578;
        $this->aString = "I'm a string!";
        $this->aNumericArray = [0 => 1, 1 => "stringy", 2 => ["a", "b", "c"]];
        $this->anAssociativeArray = [
            "firstEntry" => 1, "secondEntry" => "stringy", "thirdEntry" => ["a", "b", "c"]];
    }
}

$var_5 = 10;
$obj1 = new TestObject();
$obj2 = new TestObject();
$var_8 = 0;
$var_10 = 0;

/*
 * Question 2: Operations
 * a) Add the integers 5 and 10, and assign the result to a variable named "var_1".
 * b) Multiply by 2 the value of the variable "var_1" created in a) and assign the result to a variable named "var_2".
 * c) Calculate the remainder of the division (modulo) of the variable "var_2" created in b) by 7 and assign
 *      the result to a variable named "var_3".
 * d) Concatenate the strings "That's " and "no moon!" and assign the result to a variable named "var_4".
 * e) Add 5 to the variable $var_5 (exists already). Use a compound operator.
 * f) Check if the variable "var_5" used in e) is less or equal than the variable "var_1" defined in a) and assign the
 *      result of the comparison to a variable named "var_6". Use a comparison expression, NOT an if-block.
 * g) Check if the variables $obj1 and $obj2 are IDENTICAL and store the result in a variable named "var_7".
 * h) Check if the pre-increment of the variable $var_8 (exists already) is EQUAL to itself and assign the result to
 *      a variable named "var_9". The check, pre-increment and assignment operations must be done in a single line.
 * i) Check if the post-increment of the variable $var_10 (exists already) is EQUAL to itself and assign the result to
 *      a variable named "var_11". The check, pre-increment and assignment operations must be done in a single line.
 * j) Use the instanceof operator to check if the variable $obj1 (exists already) is of type "TestObject" and assign
 *      the result to a variable named "var_12".
 */

$var_1 = 5 + 10; var_dump($var_1);
$var_2 = 2 * $var_1; var_dump($var_2);
$var_3 = $var_2 % 7; var_dump($var_3);
$var_4 = "That's " . "no moon!"; var_dump($var_4);
$var_5 += 5; var_dump($var_5);
$var_6 = ($var_5 <= $var_1); var_dump($var_6);
// Here objects are distinct instances with separate memory locations. Hence, when compare them using ===, the result is false.
$var_7 = ($obj1 === $obj2); var_dump($var_7);
$var_9 = (++$var_8 === $var_8); var_dump($var_9);
$var_11 = ($var_10++ === $var_10); var_dump($var_11);
$var_12 = ($obj1 instanceof TestObject); var_dump($var_12);