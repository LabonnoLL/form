<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("connection.php");
    $n = $_POST['Name'];
    $m = $_POST['Location'];
    $b = $_POST['Mobile'];
    $f = $_POST['Email'];

    $table = "CREATE TABLE IF NOT EXISTS $n (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        location VARCHAR(30) NOT NULL,
        gmail VARCHAR(30) NOT NULL,
        phone VARCHAR(30) NOT NULL
    )";
    
    $insert = "INSERT INTO `$n` (`location`, `gmail`, `phone`) VALUES ('$m', '$b', '$f')";

   
    $table_check_query = "SHOW TABLES LIKE '$n'";
    $table_check_result = mysqli_query($con, $table_check_query);
    

    if (!$table_check_result) {
        echo "Error checking for existing table: " . mysqli_error($con);
        mysqli_close($con);
        exit;
    }

    if (mysqli_num_rows($table_check_result) > 0) {
        echo "<script>
            alert('Profile already registered');
            window.location.href = 'form.html';
            </script>";
        mysqli_close($con);
        exit;
    }

   
    if(mysqli_query($con, $table)) {
        if(mysqli_query($con, $insert)) {
            echo "<h1>Your profile</h1>" . $n;
            echo "<script>
                    alert('Registration successful');
                  
                </script>";
        } else {
            echo "Error inserting data: " . mysqli_error($con);
        }
    } else {
        echo "Error creating table: " . mysqli_error($con);
    }

    mysqli_close($con);

    ?>
</body>
</html>