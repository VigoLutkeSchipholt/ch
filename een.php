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
<h1> Alphabeth backwards</h1>

<?php
foreach (range('Z', 'A') as $ch) {
    echo $ch ;
}  
?>

</body>
</html>