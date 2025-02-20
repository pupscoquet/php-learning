<?php
echo "<b>LESSON 1</b>";
echo "<br>Hello, PHP!";

$name = "Victoria";
$age = 33;

echo "<br>My name is $name and I am $age years old.";

echo "<br><br><b>LESSON 2</b>";

//string
$text = "Hello, PHP!";
echo "<br>" . $text;

//integer
$num = 42;
echo "<br>Number: " . $num;

//boolean
$is_active = true;
echo "<br>Boolean: " . ($is_active ? "true" : "false");

//array
$months = ["June", "July", "August", "September"];
echo "<br>I was born in " . $months[array_rand($months)];

//associative array (hash in ruby)
$user = ["name" => "David", "age" => 18, "gender" => "he"];
echo "<br>User's name is " . $user["name"] . " and " . $user["gender"] . "'s "
       . $user["age"] . " years old.";

//array practice
$books = ["Intermezzo", "Normal People", "Conversations with friends"];
$books_string = implode(', ', $books);
echo "<br>These are some of Sally Rooney's books: " . $books_string . ".";

//associative array practice
$favourite_cosas = ["ice_cream" => "De La Creme", "wine" => "la Rodgerita",
                    "colour" => "Mediterranean", "sport" => "diving"];
echo "<br>My favourite ice cream is from " . $favourite_cosas["ice_cream"] . ",
         my favourite wine is most when I share them with " .
        $favourite_cosas["wine"] . " and the sport that makes me the happiest
         is " . $favourite_cosas["sport"] . ".";


echo "<br><br><b>LESSON 3</b>";

//functions without parameters
function say_hello() {
  return "<br>Saying hello";
}
echo say_hello();

//functions w parameters
function greet($name) {
  return "<br> Hola, " . $name . "!";
}
echo greet("Juan");

//function w default parameter
function sum($a, $b = 10) {
  return "<br>Sum: " . ($a + $b);
}
echo sum(5);

//multiply practice
function multiply($a, $b) {
  return "<br>" . $a . " multiplied by " . $b . " is " . ($a * $b);
}
echo multiply(23, 45);

//is even function practice
function is_even($number) {
  return "<br>Is " . $number . " even?" . (($number % 2 == 0) ? " Yes" : " No");
}
echo is_even(rand(1,523));

echo "<br><br><b>LESSON 5</b>";

$age = 33;

//if-else statement
if ($age >= 18) {
  echo "<br>You're an adult";
} else {
  echo "<br>You're younger than an adult";
}

//loop statement
for ($i = 0; $i < 5; $i++) {
  echo "<br>Iteration " . $i;
}

//while loop
$count = 3;
while ($count > 0) {
  echo "<br>" . $count . " is above 0";
  $count--;
}

$fingers = 10;
while ($fingers >= 1) {
  echo "<br>" . $fingers;
  $fingers--;
}

echo "<br><br><b>LESSON 6</b>";

if (isset($GET_['name'])) {
  echo "<br>Hello, " . $GET_['name'];
}

echo "<br>New change"

?>

<form>
  Enter your name: <input type="text" name="name">
  Enter your age: <input type="text" name="age">
  <input type="submit">
</form>
