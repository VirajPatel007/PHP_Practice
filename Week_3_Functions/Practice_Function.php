<?php
declare(strict_types=1);

//$USER_INPUT = "' OR 1 = 1;-- ";
//echo "SELECT * FROM CUSTOMERS WHERE CUSTOMER_ID = '$USER_INPUT'";


echo PHP_EOL. "Practice Function".PHP_EOL;
print ("Hello World \n");

// Variadic Function: A variadic function accepts a variable number of parameters.
function example(int ... $a) : void {
    foreach ($a as $element) {
        $x = print "$element ";
    }
}

example(1, 2, 3, 4, 5);

// PHP supports the concept of variable functions. This means that if a variable name has parentheses appended to it, PHP will look for a function with the same name as whatever the variable evaluates to, and will attempt to execute it.
// In PHP, a variable function, also known as an anonymous function or closure, is a function without a specific name that can be assigned to a variable.
/* An anonymous function in PHP is a function without a specific name that can be defined inline using the function keyword. It allows for dynamic creation of functions within code, typically used for one-time or small-scale tasks where defining a named function would be unnecessary or cumbersome. Anonymous functions can be assigned to variables, passed as arguments to other functions, or returned as values from other functions, providing flexibility and enabling advanced programming techniques such as closures and callbacks.
*/
$func = function (int $a, int $b) {
    $a++;
    return $a + $b;
};

//In PHP, anonymous functions, also known as closures, are represented as objects of the built-in Closure class. When we use gettype() on a variable containing an anonymous function, it returns 'object' because closures are objects in PHP.
/* In PHP, anonymous functions, also known as closures, are instances of the Closure class. When we define an anonymous function and assign it to a variable, we're essentially creating an object of the Closure class. Therefore, when we check the type of a variable holding an anonymous function using gettype(), it returns 'object' to signify that the variable contains a reference to an instance of the Closure class, representing the anonymous function. This demonstrates that closures in PHP are treated as objects, allowing for dynamic creation and manipulation of functions within code.
*/
/* In PHP, anonymous functions, also known as closures, are instances of the Closure class. This means that when we create an anonymous function and assign it to a variable, you're essentially creating an object of the Closure class.
When we use gettype() to determine the type of a variable containing an anonymous function, it returns 'object' because closures are objects in PHP. This reflects the fact that the variable is holding a reference to an instance of the Closure class, which represents the anonymous function.*/
echo PHP_EOL. 'type of $func variable = ' . gettype($func) . PHP_EOL;
echo 'class of $func = ' . get_class($func) . PHP_EOL;

$result = $func(0, 2);
echo $result . PHP_EOL;

/*In PHP, callable is a type declaration that indicates a variable can hold a reference to a function or a method. It allows for dynamic invocation of functions or methods stored in variables, facilitating behaviors like passing functions as arguments to other functions, storing them in arrays or objects, or returning them from functions. This type flexibility enables advanced programming techniques such as callbacks, closures, and higher-order functions, enhancing the versatility and expressiveness of PHP code.

In PHP, callable is a type declaration that indicates a variable can hold a reference to a function or a method. It's used to specify that a parameter, variable, or return value is expected to be a function or a method that can be called. This includes regular functions, anonymous functions, closures, and methods of objects. The callable type ensures type safety and allows for dynamic invocation of functions, providing flexibility in function handling and callback mechanisms within PHP code.*/

// Function return a function.
/*The returnFunction returns an anonymous function using the callable return type declaration. This means the function returnFunction returns something that can be called as if it were a function. The anonymous function returned by returnFunction is capable of accepting an integer parameter and performing a computation involving the parameter $a, which is captured from the parent scope using the use keyword. By specifying callable as the return type, the function ensures that the returned value is callable, allowing it to be invoked like a regular function.

The return type of callable is used in this PHP function because it indicates that the function returnFunction returns another function, specifically an anonymous function. This anonymous function is generated within returnFunction and is returned to the caller. By specifying callable as the return type, it ensures that the returned value can be invoked as a function. This allows for dynamic creation and usage of functions within the program, enhancing flexibility and enabling advanced programming techniques such as closures and callbacks.
*/
// The callable keyword is used to force a function argument to be a reference to a function.
function returnFunction(int $num) : callable {
    
    // In PHP, the use keyword is used within anonymous functions, closures, or anonymous classes to import variables from the parent scope into the local scope of the function or class. This allows the enclosed function or class to access variables from its surrounding environment, even after the parent scope has exited. The use keyword is particularly useful for passing variables into callback functions or defining behavior dependent on external state without explicitly passing parameters.

    
    
    $a = $num;
    
    /*  use (&$a) within the anonymous function captures the variable $a by reference from the parent scope. This means that changes made to $a inside the anonymous function will affect the original variable $a defined in the returnFunction scope. By using &$a, any modifications to $a inside the anonymous function will directly alter the value of $a in the parent scope, ensuring that both instances of $a reference the same memory location. This is particularly useful for scenarios where you need to modify variables from the parent scope within an anonymous function and have those modifications persist after the function exits.
    
    use (&$a) within the anonymous function captures the variable $a by reference from the parent scope. This means any changes made to $a inside the anonymous function will directly affect the variable in the parent scope. By using &$a, the anonymous function has access to the actual variable $a rather than a copy, allowing it to modify the variable's value persistently across different function calls and maintain its state between invocations. This construct is particularly useful for scenarios where you need to share and modify the same variable across different contexts without creating separate copies.*/
    return function (int $b) use (&$a) {
        $a = $a + $b;
        echo PHP_EOL. '$a = $a + $b';
        echo PHP_EOL. "a = $a" . PHP_EOL;
        return $a;
    };
    
    /*$functionToReturn = function (int $b) use ($a) {
        $result = $a + $b;
        echo $result;
        return $result;
    };
    
    return $functionToReturn
    */
}

$returnFunc = returnFunction(5);
echo '$returnFunc(10)';
var_dump($returnFunc(10));

echo '$returnFunc(1)';
var_dump($returnFunc(1));


// Arrow function
// In PHP, an arrow function, introduced in PHP 7.4, provides a concise syntax for defining anonymous functions using the fn keyword followed by a list of parameters and an arrow (=>) pointing to the function body. Arrow functions automatically inherit the scope of the parent code and do not need an explicit use statement for accessing variables from the parent scope, making them ideal for short, one-line functions. They offer a more streamlined syntax compared to traditional anonymous functions, enhancing readability and maintainability of code, especially in functional programming paradigms and callback situations.
$arrow = fn($a) => (fn($b) => $a + $b);

$innerFunction = $arrow(5);

// Calling innerFunction.
$r = $innerFunction(10);
echo $r . PHP_EOL;

//$r = (($arrow(5))(10));
//echo $r;