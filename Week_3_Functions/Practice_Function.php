<?php
declare(strict_types=1);

//$USER_INPUT = "' OR 1 = 1;-- ";
//echo "SELECT * FROM CUSTOMERS WHERE CUSTOMER_ID = '$USER_INPUT'";


echo PHP_EOL. "Practice Function".PHP_EOL;
print ("Hello World \n");
function example(int ... $a) : void {
    foreach ($a as $element) {
        $x = print "$element ";
    }
}

example(1, 2, 3, 4, 5);

$func = function (int $a, int $b) {
    $a++;
    return $a + $b;
};

echo PHP_EOL. gettype($func) . PHP_EOL;

$result = $func(0, 2);
echo $result . PHP_EOL;

// Function return a function.
$arrow = fn($a) => (fn($b) => $a + $b);

$innerFunction = $arrow(5);

// Calling innerFunction.
$r = $innerFunction(10);
echo $r . PHP_EOL;

//$r = (($arrow(5))(10));
//echo $r;