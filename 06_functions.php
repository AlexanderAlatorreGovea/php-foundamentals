<?php

$y = "from php function";

function registerUser($email = "incognito@gmailcom")
{
  global $y;
  return "Hello world {$y}. <br /> {$email}";
};

echo registerUser('alex@gmail.com');
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/

$anonFunction = fn () =>  '<br />Anon function';

echo $anonFunction();