<?php

/* 

................ SWITCH STATEMENTS ......................

*/

// $paymentStatuses = [1, 3, 0];
// foreach($paymentStatuses as $paymentStatus) {
//     switch($paymentStatus) {
//         case 1:
//             echo "paid";
//             break 2;

//         case 2:
//         case 3:
//             echo "payment declined";
//             break;

//         case 0:
//             echo "pending payment";
//             break;
//         default:
//             echo "Unknown payment status";
//     }
// }


/* 

................. MATCH EXPRESSIONS ...................

*/

// $paymentStatuses = [1, 3, 0];
// $paymentStatus = 1;

// $paymentStatusDisplay = match($paymentStatus) {
//     1 => 'Paid',
//     2, 3 => 'Payment',
//     0 => 'Pending Payment',
//     default => 'Unknown Payment Status'
// };

// echo $paymentStatusDisplay;


/* 

................. RETURN STATEMENTS ...................

*/

// In function it controls the execution of program and give arguments.
// function sum(int $a, int $b) {
//     return $a + $b;
// }

// $z = sum(5, 10);
// echo $z;

// return;
// echo "Hello Return";           // On global scope it'll not printing after return;

/* 

................. Strict Types...................

*/

// declare(strict_types = 1);
// function sum(int $a, int $b) {
//     return $a + $b;
// }

// $z = sum(3, 10);
// // $z = sum("3", 10); // gives error

// echo $z;


/* 

................. INCLUDES FILES ...................

*/

// include 'File.php';
// require 'File.php';
// require_once 'File.php';

// echo "Hello World";

// ob_start();
// $nav = include './partials/nav.php';
// $nav = ob_get_clean();
// var_dump($nav);


/* 

................. Functions ...................

*/

// function foo() {
//     echo "Foo";
//     function bar() {
//         echo "bar";
//     }
// }

// foo();
// bar();

// TYPE HINT:

// declare(strict_types = 1);
// function hello():int {
//     return '1';
// }

// echo var_dump(hello());

// declare(strict_types = 1);
// function hello(): int|float {
//     return 1;
// }

// echo var_dump(hello());
// declare(strict_types = 1);

// function foo(int|float &$x, int|float $y): int|float{
//  if ($x % 2 == 0) {
//     $x /= 2;
//  }
//  echo $x, $y;
//  return $x * $y;
// }

// $a = 6;
// $b = 7;

// echo var_dump(foo($a, $b));


// VARIADIC FUNCTIONS:
// declare(strict_types = 1);
// function foo (int | float ...$numbers) {
//     return array_sum($numbers);
// }

// echo foo(10, 20, 30, '40');


// NAMED ARGUMENTS:

// function sum ($x, $y) {

//     echo $x . "<br />";
//     echo $y . "<br />";
//     return $x + $y;
// }

// $x = 4;
// $y = 5;
// echo sum (y: $y, x: $x);  // Now, order is no matter.


/* 

................. Variables Scope ...................

*/

// $x = 5;

// function hello() {
//     // global $x;
//     $GLOBAL["x"] = 10;
//     $x = 20;
//     echo $x;
// }

// hello();
// echo $x;



/* 

................. Static Variable ...................

*/

// function disp() {
//     static $x = 5;
//     $x++;

//     return $x;
// }

// echo disp();
// echo disp();
// echo disp();



// Ananomous and Callback Functions:
// $array = [1,2, 3, 4, 5];
// $x = function($element) {
//     return $element * 2;
// };
// $array2 = array_map($x, $array);

// print_r($array2);

/* 

................. WORKING WITH ARRAYS ...................

*/

// ARRAY_CHUNK:
// $array = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
// print_r(array_chunk($array, 2, true));

// ARRAY COMBINE:
// $a = array('green', 'red', 'yellow');
// $a = array('green', 'red', 'yellow', 'pink');  // If size is not match give error.
// $b = array('avocado', 'apple', 'banana');

// print_r(array_combine($a, $b));

// FILTER:
// $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// array_filter($array, fn($item, $key) => $item % 2 === 0,  ARRAY_FILTER_USE_BOTH);
// $array = array_values($array);

// print_r($array);

// ARRAY_KEYS:
// $array = ['a '=> 12, 'b' => 45, 'c' => 8, 'd' => 10];
// $keys = array_keys($array, 12);
// print_r($keys);


// ARRAY MAP:
// $array1 = ['a '=> 12, 'b' => 45, 'c' => 8, 'd' => 10];
// $array2 = ['a '=> 10, 'b' => 45, 'c' => 8, 'd' => 10];

// $arrayMap = array_map(fn($item1, $item2) => $item1 + $item2, $array1, $array2);
// print_r($arrayMap);


// ARRAY_MERGE: 
// $array1 = [1, 2, 3];
// $array2 = ['a' => 11, 'b' => 12, 'c' => 6];
// $array3 = [7, 8, 9];

// $mergeArray = array_merge($array1, $array2, $array3);
// print_r($mergeArray);

// $array1 = array("color" => "red", 2, 4);
// $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
// $result = array_merge($array1, $array2);
// print_r($result);


// ARRAY_REDUCE:
// function sum($carry, $item)
// {
//     echo $carry;
//     $carry += $item;
//     return $carry;
// }


// $a = array(1, 2, 3, 4, 5);
// $x = array(1, 2, 3);


// var_dump(array_reduce($a, fn($sum, $item) => $sum += $item, 0)); // int(1200), because: 10*1*2*3*4*5
// var_dump(array_reduce($x, "sum", 0)); // string(17) "No data to reduce"


// ARRAY SEARCH 
// $array = ['pink', 'black', 'white', 'yellow'];
// $key = array_search('pink', $array);
// echo $key;

// if ($key === false) {
//     echo "Key not found at";
// }

// if (in_array('white', $array)) {
//     echo "Letter Found";
// }


// ARRAY DIFF AND ARRAY DIFF ASSOCIATE:
// $array1 = ['a' => 1, 'b' => 2, 'c' => 23];
// $array2 = ['a' => 2, 'b' => 2, 'c' => 4];
// $array3 = ['a' => 9, 'b' => 8, 'c' => 7];

// print_r(array_diff($array1, $array2, $array3));
// print_r(array_diff_assoc($array1, $array2, $array3));


// SORTING FUNCTIONS:
// $array = [2, 3, 4, 2, 1, 9, 0];

// print_r($array);
// asort($array);           //sorting in accending order;
// // ksort($array);          // sorting by key; 
// foreach($array as $key => $value) {
//     echo "$key = $value\n";
// }


// ARRAY DISTRUCTURING:
// $array = [1, 2, 3, [4, 5]];
// [$a, $b, , [$d, $e]] = $array;

// echo $a . "<br />" . $b . "<br />" . $d . "<br />" . $e . "<br />";


// ERROR HANDLING:
// trigger_error("example error", E_USER_ERROR);
// echo 1;