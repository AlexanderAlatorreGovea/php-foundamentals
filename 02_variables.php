<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'Brad';
$age = 40;
$has_kid = true;
$cash_on_hand = 3.432;

echo $age;
echo $name;
var_dump($has_kid);
echo $cash_on_hand;
echo "${name} is ${age}";
$x = '5' + 5;
echo $x * $x;

//constant
define("HOST", 'localhost');
define("DB_NAME", 'deb_db');

echo HOST;
echo DB_NAME;