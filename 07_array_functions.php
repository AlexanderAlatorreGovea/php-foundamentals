<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['apple', 'orange', 'pear'];

echo count($fruits);
echo '<br/>';

var_dump(in_array('apple', $fruits));

echo '<br/>';

array_push($fruits, 'blueberry', 'strawberry');
array_unshift($fruits, 'mango');
print_r($fruits);

//remove from array

array_pop(($fruits));

// split into chunks
print_r(array_chunk($fruits, 2));

// concat arrays


$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

$arr3 = array_merge($arr1, $arr2);

$spread = [...$arr1, ...$arr2];

print_r($arr3);
print_r($spread);


// combined

$a = ['green', 'red', 'yellow'];
$b = ['avacado', 'apple', 'bannana'];
$c = array_combine($a, $b);

print_r(array_combine($a, $b));

$keys = array_keys($c);


// map
$nums = [1, 2, 3];

$mapf = array_map(fn ($num) => $num * $num, $nums);

echo ($mapf);

//filter 

$filter = array_filter($nums, fn ($num) => $num > 1);


// reduce

$reduce = array_reduce($nums, fn ($num) => $num + $num);
var_dump($reduce);