<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge Z</title>
</head>
<body>

<a href="index.php">Home</a>
<br>
<br>
<form action="vijf.php" method="post">
  <input type="number" name="nummer">
  <input type="submit" name="submit" value="Checken">
</form> 
<h1> Telefoonnummer checker </h1>
<?php

if(isset($_POST['submit'])) 
$nummer = $_POST['nummer'];

if (filter_var($nummer, FILTER_VALIDATE_EMAIL)) {
    echo("$nummer is een Nederlands telefoonnummer");
} else {
    echo("$nummer is een Belgisch telefoonnummer");
}


?>