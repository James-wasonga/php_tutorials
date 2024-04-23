<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="loginPage.php"><br>
Username:<input type="text" name="username"/><br>
Password:<input type="text" name="password"/><br>
<input type="submit" value="Login"/>

</form>
<?php
session_start();
$connect = mysqli_connect("localhost","root","");
 if($connect){
    echo "Database connected successfully";
 }else{
    echo "Database not connected";
 }
 mysqli_select_db($connect, "project");

 if(isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
     $sql = "select * from James where Username = '$username' and Password = '$password'";
     $row = mysqli_query($connect,$sql);
     if(mysqli_num_rows($row)>0){
        $result = mysqli_fetch_assoc($row);
       $_SESSION['username'] = $result['Username'];
       $_SESSION['password'] = $result['Password'];
       $_SESSION['fullname'] = $result['FullName'];



     }

 }
 echo $_SESSION['fullname'];
    
	// if (isset($_SESSION['FullName'])){
	// 	echo "You are logged in as " . $_SESSION['FullName'] 
	// 	. " with session id " . session_id() . "<br />";

	// }else{
	// 	header('location: loginPage.php');
	// }
	
	
	echo "<a href=loginPage.php>Logout</a>";
?>




</body>
</html>