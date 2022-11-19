<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

for ($i = 0; $i <= 10; $i++) { 
  echo $i;
}


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/
$a = 1;
while ($a <= 10) {
  echo "<div>Number: ${a}</div>";
  $a++;
}


/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

$posts = [
  'first post',
  'second post',
  'third post'
];

// for ($i=0; $i < count($posts); $i++) { 
//   echo "<div>$posts[$i]</div>";
// }

foreach ($posts as $post) {
  echo "<div>
    {$post}
  </div>";
}

$person = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy'
];

foreach ($person as $key => $value) {
  echo "$key - $value <br/>";
};




