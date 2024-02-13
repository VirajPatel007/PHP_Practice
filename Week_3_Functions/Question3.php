<?php
declare(strict_types=1);
$int_array = [1, 2, 4, 6, 16, 32, 64, 128, 256];

function get_tax_amount(int|float $price) : float {
    return 0.1495 * $price;
}

/*
 * Question 3 - Math functions
 *
 * a) Use the max() and min() functions to obtain the maximum and minimum values contained in the pre-defined
 *      int array variable $int_array and use the debug() function to display both results.
 *
 * b) I have created the small function named "get_tax_amount" to calculate the sales tax amount for a given subtotal
 *      price. Use my "get_tax_amount" function and the the round() function to obtain the tax amount rounded to two
 *      decimals for the following subtotal values: 19.99 and 192.50 . Display the results by using the debug() function.
 *
 * c) Use the rand() funtion three times function to generate integers between 0 and 100 and use the debug() function to
 *      display each result.
 *
 * d) Use the random_int() function three times function to generate integers between 0 and 100 and use the debug()
 *      function to display each result.
 */

// a)
echo PHP_EOL;
var_dump(max($int_array));
var_dump(min($int_array));

// b)
echo PHP_EOL;
var_dump(round(get_tax_amount(19.99),2));
var_dump(round(get_tax_amount(192.50), 2));

// c)
echo PHP_EOL;
// The rand() function generates a random integer.
var_dump(rand(0, 100));
var_dump(rand(0, 100));
var_dump(rand(0, 100));

// d)
echo PHP_EOL;
// random_int — Get a cryptographically secure, uniformly selected integer.
try {
    var_dump(random_int(0, 100));
    var_dump(random_int(0, 100));
    var_dump(random_int(0, 100));
} catch (Exception $exception) {
    echo $exception->getMessage();
}