<?php 
include("labworktable.php");
$connect = mysqli_connect("localhost","root","");
mysqli_select_db($connect,"suggestion");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['text'];

}
mysqli_query($connect, "insert into labwork(Name,Email,Subject,Message) values('$name','$email','$subject','$message')");

mysqli_close($connect);



?>