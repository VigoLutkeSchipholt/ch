<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge Z</title>
</head>
<body>
<a href="index.php">home</a>
<br> 
<form action="drie.php" method="post">
  <input type="text" name="email">
  <input type="submit" name="submit" value="Zoeken">
</form> 
<h1> Email checker </h1>
<?php

if(isset($_POST['submit'])) 
$email = $_POST['email'];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("$email is a valid email address");
} else {
    echo("$email is not a valid email address");
}


?>


</body>
</html>