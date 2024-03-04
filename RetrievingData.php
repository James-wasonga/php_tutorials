<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>



<?php

$connect = mysqli_connect("localhost","root","");

if($connect){
   echo "Database connected successfully";
}else{
   echo "Database not connected";
}




mysqli_select_db($connect, "University");

//retrieving and displaying the data from the database
$result = mysqli_query($connect,"select * from Students"); 


//using the loop to retrieve and display the data in the database 
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){

echo $row["AdmNo"]." ".$row["Name"]." ".$row["age"]." ".$row["Program"];
echo "</br>";
}
mysqli_close($connect);
?>