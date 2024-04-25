<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $con = mysqli_connect("localhost","root","","student");
    if($con==false){
        die("error").mysqli_connect_error();
    }
    ?>
</body>
</html>