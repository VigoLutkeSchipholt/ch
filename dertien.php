
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
<h1> Cirkel berekenen</h1>

<form action="dertien.php" method="post">
  <input type="number" name="diameter">
  <input type="submit" name="submit" value="Bereken">
</form> 


<?php
 
if(isset($_POST['submit'])) {
 $diameter = $_POST['diameter'];

    $straal= $diameter / 2;
    $getal= $straal * $straal;

    echo "omtrek=". pi() * $diameter;
    echo "<br>";
    echo "oppervlakte=". $getal * pi();
}  
?>

</body>
</html>