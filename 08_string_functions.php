<?php
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/

// to have secure forms and not allow html tags
$string = '<script>alert(1</script>';
echo htmlspecialchars($string);
