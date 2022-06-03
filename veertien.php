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
<h1>Celsius omrekenen</h1>

<form action="veertien.php" method="post">
  <input type="number" name="graden">
  <input type="submit" name="submit" value="Bereken">
</form> 


    <?php  
     if(isset($_POST['submit'])) {
      $graden = $_POST['graden'];
     
    $celsius = "$graden";

    echo "Kelvin= ". $celsius + 237;
    echo "<br>";
    echo "Fahrenheit= ". $celsius * 1.8 + 32;
     }    
    ?> 


</body>
</html>