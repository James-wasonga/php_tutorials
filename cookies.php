<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cookies.php" method="POST">

    Username:<input type="text" name="username"></br>
    Password:<input type="text" name="password"></br>
     <input type="submit" value="Login">
    </form>

    <?php

       setcookie("username");
      $connect =  mysqli_connect("localhost","root","");
      mysqli_select_db($connect, "project");

 if(isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
     $sql = "select * from James where Username = '$username' and Password = '$password'";
     $row = mysqli_query($connect,$sql);
     if(mysqli_num_rows($row)>0){
        $result = mysqli_fetch_assoc($row);
       setcookie('username' , $result['Username']);
       setcookie('password', $result['Password']);
       setcookie('fullname',$result['FullName']);
       header("location:index.php" );


     }

 }
 

    
    ?>
</body>
</html>