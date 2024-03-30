<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
session_start();

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"suggestion");

$result = mysqli_query($con, "select * from labwork");

// while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
//     echo $row['Name'];
//     echo $row['Email'];
    
// }
if(isset($_POST['name'])){
  $name = $_POST['Name'];
  $email = $_POST['email'];

  if(mysqli_num_rows($result)>0){
   $row = mysqli_fetch_assoc($result);
   
   $_SESSION['name'] = $row['Name'];
   $_SESSION['email'] = $_row['Email'];

  }

}
?>
</body>
</html>