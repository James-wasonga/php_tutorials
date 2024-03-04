<?php
//connecting to  database using mysqli function
$connect = mysqli_connect("localhost","root","");

//checking for connection
if($connect){
    echo "connection to database successfull";

}else {
    echo "connection to the database is unsuccessfull";
}

//creating a database called library by executing sql statements via php scripts
mysqli_query($connect,"create database JamesWare");

//selecting the database

mysqli_select_db($connect,"JamesWare");

//creating tables
mysqli_query($connect,"create table student(Name varchar(20),AdmNo int,Age int,Course varchar(20), primary key(AdmNo))");

//inserting values to the table
mysqli_query($connect,"insert into student(Name,AdmNo,Age,Course) values('James',100,20,'computer science')");
$sql = "SELECT * FROM student where name='James'";
echo $sql; 



//closing the connection
mysqli_close($connect);
?>
