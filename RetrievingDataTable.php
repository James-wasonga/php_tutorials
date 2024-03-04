<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $connect = mysqli_connect("localhost","root","");
    mysqli_select_db($connect,"University");
    //retrieving and displaying the data from the database
$result = mysqli_query($connect,"select * from Students"); 
    ?>

    <table >
        <tr>
            <th>AdmNo</th>
            <th>Name</th>
            <th>age</th>
            <th>Program</th>

        </tr>
        <?php
        while($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){
            ?>

            <tr>
                <td><?php echo $row['AdmNo']?></td>
                <td><?php echo $row['Name']?></td>
                <td><?php echo $row['age']?></td>
                <td><?php echo $row['Program']?></td>

        </tr>
        <?php
        }
        ?>

     </table>
   
     <button class="btn"><a href="form.html"> Add Student </a></button>
        <?php
        mysqli_close($connect);
        ?>

</body>
</html>