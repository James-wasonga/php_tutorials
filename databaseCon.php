<?php
$con = mysqli_connect("localhost","root","");
if($con){
    echo "Connection is successfull";
}else{
   echo "Connection Failed";
}

mysqli_select_db($con,"Maseno") or die("selection failed");

mysqli_close($con);



?>