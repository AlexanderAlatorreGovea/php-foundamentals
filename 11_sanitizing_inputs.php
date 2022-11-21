<?php
/* --- Sanitizing Inputs -- */

/*
  Data submitted through a form is not sanitized by default. We have methods to sanitize data manually.
*/
if (isset($_POST['submit'])) {
  $name =  filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
  $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

  echo $name;
};
?>

<form action="<?php echo htmlspecialchars(
                $_SERVER['PHP_SELF']
              ); ?>" method="POST">
  <div>
    <label>Name: </label>
    <input type="text" name="name">
  </div>
  <br>
  <?php echo $email; ?>
  <div>
    <label>Email: </label>
    <input type="email" name="email">
  </div>
  <br>
  <input type="submit" name="submit" value="Submit">
</form>