<?php
require_once "./classes.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Conversion Results</h1>
    <?php

if(isset($_POST["amount"]) && isset($_POST["crypto"])){

//Superglobals variables
$amount=$_POST["amount"];
$crypto=$_POST["crypto"];


$converter = new CryptoConverter($crypto);
$result = $converter->convert($amount);

echo "<p>You want to convert $amount $crypto. </p> ";
echo "<h3>You have USD $result </h3> ";
}
else{
    echo "<h2> Oops! Something went wrong, try again. </h2>";
}
    ?>

</body>
</html>