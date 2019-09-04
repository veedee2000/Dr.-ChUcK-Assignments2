<!DOCTYPE html>
<html>
<head>
  <title>Varun Das</title>
</head>
<body>
  <p><strong>Welcome to my guessing game</strong></p>
</body>
<pre>
  <?php
    if ( ! isset($_GET['guess']) ) {
      echo("Missing guess parameter");
    } else if ( strlen($_GET['guess']) < 1 ) {
      echo("Your guess is too short");
    } else if ( ! is_numeric($_GET['guess']) ) {
      echo("Your guess is not a number");
    } else if ( $_GET['guess'] < 30 ) {
      echo("Your guess is too low");
    } else if ( $_GET['guess'] > 30 ) {
      echo("Your guess is too high");
    } else {
      echo("Congratulations - You are right");
    }
  ?>
 <pre>
</html>
