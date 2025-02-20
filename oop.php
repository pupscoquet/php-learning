<?php
  class User {
    public $name;
    public $age;

    public function __construct($name, $age) {
      $this->name = $name;
      $this->age = $age;
    }

    public function greet() {
      return "<br>Hello, my name is $this->name and I am $this->age years old.";
    }

    public function changeName($newName) {
      $this->name = $newName;
    }
  }

  $user1 = new User("David", 18);
  echo $user1->greet();

  $user2 = new User("Clau", 71);
  $user2->changeName("Roman");
  echo $user2->greet();
?>
