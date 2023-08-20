<?php

include 'db.php';
if (isset($_POST['submit'])) {
    $Name = $_POST['name'];
    $Password = $_POST['pwd'];
    $Email = $_POST['email'];

    $alter2 = "ALTER TABLE `user_login` AUTO_INCREMENT = 1";
    mysqli_query($conn, $alter2);
    $alter = "ALTER TABLE `new_user` AUTO_INCREMENT = 1";
    mysqli_query($conn, $alter);

    $get = "SELECT * FROM new_user";
    $data = mysqli_query($conn, $get);
    while ($row = mysqli_fetch_array($data)) {
        $prev_name = $row['name'];
        $prev_password = $row['password'];
        $prev_email = $row['email'];
    }

    if ($prev_email == $Email) {
        echo '<script>alert("Your Email is already Registered")</script>';
        // header("Location: /Image_Gallery/register.php");
        echo "<script>
        setInterval(()=>{
           history.back();
        },100)
   </script>";
    } else {
        $sql1 = "INSERT INTO user_login (name,password,email) VALUES ('$Name','$Password','$Email')";
        $sql2 = "INSERT INTO new_user (name,password,email) VALUES ('$Name','$Password','$Email')";
        mysqli_query($conn, $sql1);
        mysqli_query($conn, $sql2);
        header("Location: /Image_Gallery/login.php");
    }
}
?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

</body>
</html> -->