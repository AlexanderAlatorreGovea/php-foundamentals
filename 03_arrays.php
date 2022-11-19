<?php
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/
$numbers = [1, 33, 232, 3432, 234];

// print arrays
//print_r($numbers);
//echo $numbers[1];


// Associative array

$colors = [
  1 => 'red',
  4 => 'blue',
  5 => 'green'
];

//echo $colors[4];

$hex = [
  'red' => '#f00',
  'blue' => '#0f0'
];

echo $hex['red'];

$person = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'Brad@gmail.com'
];

echo $person['first_name'];

$people = [
  [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
  ],
  [
    'first_name' => 'alex',
    'last_name' => 'govea'
  ],
  [
    'first_name' => 'alex',
    'last_name' => 'govea'
  ]
];

var_dump(json_encode($people));
