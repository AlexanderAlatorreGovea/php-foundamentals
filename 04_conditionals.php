<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/


/* -------- Switch Statements ------- */


$age = 20;

if ($age >= 19) {
  //echo 'You are old enough to vote';
};

$votingRights = $age > 25 ? 'you should vote' : 'you should not vote';

//echo($votingRights);


$posts = ['First Post'];

if(!empty($posts)) {
  echo $posts[0];
}

$default_message = 'there is no post 1';
$coalescing = $posts[1] ?? $default_message;

echo $coalescing;