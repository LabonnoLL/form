<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("connection.php");

    $c = $_POST['Email'];
    $e = $_POST['password'];

    $q = "SELECT * FROM `$n` WHERE gmail='$e'";

    $r = mysqli_query($con,$q);

    //$row = mysqli_fetch_array($r,MYSQLI_ASSOC);

    $count = mysqli_num_rows($r);

    if($count==1){

        
        echo"<script>window.alert('login success'); </script>";
        echo"<h1>your profile</h1>".$n;
    }else{
        echo"<script>window.alert('not found plz register'); </script>";
        include("form.html");
    }
    
    ?>
</body>
</html>