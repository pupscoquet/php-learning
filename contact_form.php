<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  if (!empty($name) && !empty($email) && !empty($message)) {
    $data = "Name: $name\nEmail: $email\nMessage: $message\n\n";
    file_put_contents("messages.txt", $data, FILE_APPEND);
    echo "Message saved!";
    header('Location: oop.php');
  } else {
    echo "All files required!";
  }
}
?>

<form method="POST">
  Name: <input type="text" name="name"><br>
  Email: <input type="email" name="email"><br>
  Message: <textarea name="message"></textarea><br>
  <input type="submit" value="Send">
</form>
