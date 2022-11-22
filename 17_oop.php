<?php
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User
{
  // public - can be accessed from anywhere
  // private - can only be accessed from inside the class
  // protected - can only be accessed from inside the class and by inheriting classes
  public $name;
  private $email;
  public $password;

  public function __construct($name, $email, $password)
  {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  function getName()
  {
    return $this->name;
  }

  function login()
  {
    return "User $this->name is logged in.";
  }

  // Destructor is called when an object is destroyed or the end of the script.
  function __destruct()
  {
    echo "The user name is {$this->name}";
  }
}

$user = new User("Alex", "alex@gmail.com", 'safsfdivsda11');
$user->name = 'Brad';

//var_dump($user);
echo $user->getName();
echo $user->login();

echo "<br/>";

class Employee extends User {
  public function __construct($name, $email, $password, $title) {
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }

  public function getTitle() {
    return $this->title;
  }
}

$employee1 = new Employee('John','johndoe@gmail.com','123456','Manager');
echo $employee1->getTitle();

echo "<br><br>";
echo $employee1->login();
