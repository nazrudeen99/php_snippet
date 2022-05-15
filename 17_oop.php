<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User {
  // Properties

  // Access Modifier: public, private, protected
  // public - can be accessed from anywhere
  // private - can only accessed inside a class
  // protected - can only be accessed from inside the class and by inheriting class
  public $name;
  private $email;
  protected $password;

  // A Constructor is a method that runs when an object is created
  function __construct($name, $email, $password) {
    $this -> name = $name;
    $this -> email = $email;
    $this -> password = $password;
  }

  // Method is a function that belongs to a class
  function set_email($email) {
    $this -> email = $email;
  }

  function get_email() {
    return $this -> email;
  }
}

// Instantiate a user object
$user_1 = new User('nasurudeen', 'Nasurudeen105@gmail.com', 'nasurudeen1994');
// $user_1 -> name = 'Brad';
// $user_1 -> set_email('Nazrudeendev22@gmail.com');
// echo $user_1 -> name;
// echo $user_1 -> get_email();


// Inheritance 
class Employee extends User {
  function __construct($name, $email, $password, $title) {
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }

  function get_title() {
    return $this->title;
  }
}

$employee = new Employee('john', 'john@gmail.com', 'john22', 'Office boy');
echo $employee->get_title();
// var_dump($employee);