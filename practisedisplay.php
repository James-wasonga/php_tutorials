<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"suggestion");
$result = mysqli_query($con,"select * from labwork");
?>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>

    </tr>
<?php
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
?>
    <tr>

      <td><?php echo $row['Name']?></td>
      <td><?php echo $row['Email']?></td>
      <td><?php echo $row['Subject']?></td>
      <td><?php echo $row['Message']?></td>

    </tr>
 <?php
  }
  ?>

    </table>
<button><a href="labwork.html">Add suggestion</a></button>
<?php

mysqli_close($con);
?>