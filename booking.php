<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            color:blue;
        }
       
    </style>
</head>
<body>
<h1>Welome to Kenya</h1>
<form action="booking.php" method="get">

Name:<input type="text" name="name1"/></br>
Password:<input type="password" name="name2"/></br>


   <input type="Submit"/>


</form>

<?php

$call = $_GET["name1"];
$calls = $_GET["name2"];
echo"This is $call ";
echo "</br>";
echo"This is $calls ";



?>



</body>
</html>