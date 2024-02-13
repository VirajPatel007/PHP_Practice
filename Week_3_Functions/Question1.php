<?php
declare(strict_types=1);
class AParent {
    public function __construct() {}
}

class AChild extends AParent {
    public function __construct() {
        parent::__construct();
    }
}

/*
 * Question 1 - Variable handling functions
 *
 * a) declare and initialize a new variable named and containing the values as following:
 *      "set_variable" containing any non-zero integer of your choice
 *
 * b) declare and initialize 6 new variables named and containing the values as following:
 *      "null_variable" containing null
 *      "int_variable" containing any non-zero integer of your choice
 *      "string_variable" containing a non-empty string of your choice
 *      "boolean_variable" containing FALSE
 *      "array_variable" containing an EMPTY array
 *      "object_variable" containing a new instance of the TestObject class (that class exists from the debug functions file)
 *
 * c) use the isset() function to test if the "set_variable" variable declared in a) is set or not. Use the debug()
 *      function to display the result.
 *
 * d) use the unset() function to unset the "set_variable" variable declared in a) and do a second test like in c) to
 *      re-check and diplay whether the variable is now set.
 *
 * e) for every variable declared and initialized in b), test whether the variable is empty by using the
 *      empty() function. Use the debug() function to display the result. Make sure you understand why some variables
 *      are considered empty and others arent; review the theory if necessary.
 *
 * f) Use var_dump() to dump to the output the information about the "object_variable" variable.
 *
 * g) Use var_export() to RETURN information about the "object_variable" variable and echo to display it to the output.
 *
 * h) for every variable declared and initialized in b), use the gettype() function to obtain the type string of the
 *      variable. Use the debug() function to display the result.
 *
 * i) Re-define the "set_variable" variable defined in a) and unset in b), this time with a non-zero floating point
 *      number. Then, use the settype() function to change the variable's type to a string, and use the debug()
 *      function to display the variable.
 *
 * j) Two classes are pre-defined in this file: AParent and AChild that inherits from AParent. Define a new variable
 *      named "a_child" and assign a new instance of the AChild class to it ( $a_child = new AChild(); ). Use the
 *      is_a() function to check if the "a_child" variable's value is considered a AParent (use AParent::class to
 *      get the AParent class name). Use the debug() function to display the result.
 */

//require_once "../Week_2_PHP_Types/Question2.php";
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

// a)
$set_variable = 55;

// b)
$null_variable = null;
$int_variable = 25;
$string_variable = "Viraj";
$boolean_variable = false;
$array_variable = array();
$object_variable = new TestObject();

// c)
var_dump(isset($set_variable));
echo PHP_EOL;
// d)
unset($set_variable);
var_dump(isset($set_variable));
var_dump(isset($null_variable));
echo PHP_EOL;

// e)
var_dump(empty($null_variable));
var_dump(empty($int_variable));
var_dump(empty($string_variable));
var_dump(empty($boolean_variable));
var_dump(empty($array_variable));
var_dump(empty($object_variable));
echo PHP_EOL;

// f)
var_dump($object_variable);

echo PHP_EOL;
// g)
// The var_export() function outputs or returns structured information about a variable.
$x = var_export($object_variable, true);
//var_dump($x);

// h)
echo PHP_EOL.PHP_EOL;
var_dump(gettype($null_variable));
var_dump(gettype($int_variable));
var_dump(gettype($string_variable));
var_dump(gettype($boolean_variable));
var_dump(gettype($array_variable));
var_dump(gettype($object_variable));

// i)
echo PHP_EOL;
$set_variable = 13.845368;
var_dump($set_variable);
settype($set_variable, "string");
var_dump($set_variable);

// j)
echo PHP_EOL;
$a_child = new AChild();
var_dump(is_a($a_child, AParent::class));