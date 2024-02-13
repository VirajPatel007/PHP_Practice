<?php
declare(strict_types=1);

$int_array = [ 0 => 2, 1 => 1, 2 => 256, 3 => 64, 4 => 32, 5 => 16, 6 => 8, 7 => 128, 8 => 4];

$an_address = [
    "number" => "2405",
    "street" => "rue de la Patate",
    "city" => "Montreal",
    "state" => "Quebec",
    "country" => "Canada",
    "postalCode" => "H0H 0H0"
];
$csv_string = "potato;tomato;onion;leek;cucumber";

$usort_array = [
    "echo",
    "bravo",
    "alpha",
    "charlie",
    "delta"
];

/*
 * Question 4 - Array functions
 *
 * a) Create a conditional if-block that uses the is_array() function to test if the pre-defined variable $an_address
 *      is indeed an array.
 *
 * b) Inside the if-block created in a), use the count() function to obtain the size of the array contained in the
 *      $an_address variable. Use the debug() function to display the resulting value.
 *
 * c) Also inside the if-block created in a), create a nested if conditional. Use array_key_exists() in the condition
 *      of this nested if-block to check if the $an_address array has a key named "state", and use debug() to display
 *      the value of that array entry (only if it exists, so inside the nested if-block).
 *
 * d) Back inside the first-level if-block (not the nested one), use implode() to create a string built with the values
 *      of the $an_address array using a single space (" ") as the separator. use the debug() function to display the
 *      resulting string.
 *
 * e) The pre-defined variable $csv_string contains a list of semicolon-separated values. Use explode() to separate
 *      those values into an array and debug() to display the resulting array.
 *
 * f) The $int_array contains non-ordered integers. Use each of the following function and the debug() one to sequentially
 *      sort in various ways and display the array. Note the effect on the keys.
 *          asort()
 *          arsort()
 *          ksort()
 *          krsort()
 *          sort()
 *          rsort()
 *
 * g) BONUS (tougher) question: Use the usort() function to order the pre-defined $usort_array string array by the
 *      lexicographical order of its string values. To do this, you must define a callback function that usort() can
 *      use for the sorting. See the PHP manual page about the usort function for details. Use debug() to output the
 *      sorted array.
 */

// a)
echo PHP_EOL;
if (is_array($an_address)){
    // b)
    var_dump(count($an_address));
    
    // c)
    if (array_key_exists("state", $an_address)) {
        var_dump($an_address["state"]);
    }
    
    // d)
    /*The implode() function returns a string from the elements of an array.
    Syntax: implode(separator,array)
    Parameter Values
    Parameter	    Description
    separator	    Optional. Specifies what to put between the array elements.Default is "" (an empty string).
    array	        Required. The array to join to a string.
    */
    var_dump(implode(" ", $an_address));
}

// e)
echo PHP_EOL;
/* The explode() function breaks a string into an array.
Note: The "separator" parameter cannot be an empty string.

Syntax: explode(separator,string,limit)
Parameter Values:
Parameter	    Description
separator	    Required. Specifies where to break the string.
string	        Required. The string to split.
limit	        Optional. Specifies the number of array elements to return.
                Possible values:
                Greater than 0 - Returns an array with a maximum of limit element(s).
                Less than 0 - Returns an array except for the last -limit elements().
                0 - Returns an array with one element.
*/
var_dump(explode(";", $csv_string));

// f)
echo "asort(): ".PHP_EOL;
/*
The asort() function is an inbuilt function in PHP which is used to sort  an array according to values in ascending order. It sorts in a way that relation between indices and values is maintained.

The asort() function sorts an associative array in ascending order, according to the value and maintain index association with that value.

asort — Sort an array in ascending order according to the value, and maintain index association with that value.
Sorts array in place in ascending order, such that its keys maintain their correlation with the values they are associated with.
This is used mainly when sorting associative arrays where the actual element order is significant.

*/
asort($int_array);
var_dump($int_array);

echo PHP_EOL. "arsort()";
/*
The arsort() in PHP is used to sort an array according to values in descending order. It sorts in a way that relation between indices and values is maintained.

The arsort() function sorts an associative array in descending order, according to the value and maintain index association with that value.

arsort — Sort an array in descending order and maintain index association with that value.
Sorts array in place in descending order, such that its keys maintain their correlation with the values they are associated with that value.
This is used mainly when sorting associative arrays where the actual element order is significant.
*/

arsort($int_array);
var_dump($int_array);

echo PHP_EOL. "ksort()";
/*
The ksort() function is an inbuilt function in PHP which is used to sort an array in ascending order according to its key values. It sorts in a way that the relationship between the indices and values is maintained.

The ksort() function sorts an associative array in ascending order, according to the key.

ksort — Sort an array by key in ascending order.
Sorts array in place by keys in ascending order.
*/
ksort($int_array);
var_dump($int_array);

echo PHP_EOL. "krsort()";
/*
The krsort() function is an inbuilt function in PHP which is used to sort an array by key in reverse order according to its index values. It sorts in a way that relation between indices and values is maintained.

The krsort() function sorts an associative array in descending order, according to the key.

krsort — Sort an array by key in descending order.
Sorts array in place by keys in descending order.
*/
krsort($int_array);
var_dump($int_array);

echo PHP_EOL. "sort()";
/*
The sort() function sorts an indexed array in ascending order.

The sort() function is an inbuilt function in PHP and is used to sort an array in ascending order i.e, smaller to greater. It sorts the actual array and hence changes are reflected in the original array itself.

sort — Sort an array in ascending order.
Sorts array in place by values in ascending order.
*/
sort($int_array);
var_dump($int_array);

echo PHP_EOL. "rsort()";
/*
The rsort() function sorts an indexed array in descending order.

The rsort() is an inbuilt function in PHP and is used to sort the array in descending order i.e, greatest to smallest. It sorts the actual array and hence changes are reflected in the array itself.

rsort — Sort an array in descending order.
Sorts array in place by values in descending order.
*/
rsort($int_array);
var_dump($int_array);

// g)
$callback = function (mixed $element1, mixed $element2) : int {
    if (!is_string($element1) || !is_string($element2)) {
        throw new Exception("Array element is not a string.");
    }
    
    // For ascending order.
    return $element1 <=> $element2;
    
    // For descending order.
    // return $element2 <=> $element1;
};

echo PHP_EOL. "usort()";
/*
The usort() function sorts an array by values using a user-defined comparison function.

PHP comes with a number of built-in functions that are used to sort arrays in an easier way. Here, we are going to discuss a new function usort(). The usort() function in PHP sorts a given array by using a user-defined comparison function. This function is useful in case if we want to sort the array in a new manner. This function assigns new integral keys starting from zero to the elements present in the array and the old keys are lost.

usort — Sort an array by values using a user-defined comparison function.
Sorts array in place by values using a user-supplied comparison function to determine the order.
*/

usort($usort_array, $callback);
var_dump($usort_array);