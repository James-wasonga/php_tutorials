<?php
include("retrievingDataTable.php");
//connecting to database
 $connect = mysqli_connect("localhost","root","");

//  if($connect){
//     echo "Database connected successfully";
//  }else{
//     echo "Database not connected";
//  }
 //create database
//mysqli_query($connect,"create database University");
mysqli_select_db($connect,"University");

//mysqli_query($connect,"create table Students(AdmNo varchar(13) PRIMARY KEY,Name varchar(20), age int, Program varchar(20))");


//inserting the data into the database 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $admNo =$_POST['AdmNo'];
      $name =$_POST['Name'];
      $Age =$_POST['age'];
      $program =$_POST['Program'];


mysqli_query($connect, "insert into Students(AdmNo,Name,age,Program) values('$admNo','$name','$Age','$program')");

mysqli_close($connect);
    


}



?>