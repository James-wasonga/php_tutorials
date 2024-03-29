<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="practise.php" method="POST">
<label>Name: </label>
<input type="text" name="name"/><br>
<label>Email Address: </label>
<input type="text" name="email"/><br>
<label>Subject</label>
<input type="text" name="subject"/><br>
<textarea type="text" name="message"></textarea><br>
<input type="submit" value="submit">
<input type="reset" value="Refresh"/>
    </form>
    <?php
    include("practisedisplay.php");
    $con = mysqli_connect("localhost","root","");
    if($con){
        echo "connection successfull";
    }else {
        echo "connection failed";
    }
    mysqli_select_db($con,"suggestion");
    

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];


        mysqli_query($con,"insert into labwork(Name,Email,Subject,Message) values('$name','$email','$subject','$message')");




        mysqli_close($con);
}

    
    ?>
    
</body>
</html>