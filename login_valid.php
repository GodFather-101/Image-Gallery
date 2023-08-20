<?php
include "db.php";

if (isset($_POST['submit'])) {
    $err = '';
    $Name = $_POST['name'];
    $Password = $_POST['pwd'];


    $get = "SELECT * FROM `user_login`";
    $data = mysqli_query($conn, $get);

    while ($row = mysqli_fetch_array($data)) {
        $prev_name = $row['name'];
        $prev_email = $row['email'];
        $prev_password = $row['password'];
        if ($Name == $prev_name || $Name == $prev_email) {
            if ($Password == $prev_password) {
                $arr = array($imageId, $login_id);
                $data = join('_', $arr);
                // header("Location: /Image_Gallery/upload.php?image=$Name");

                session_start();
                $_SESSION['image'] = $Name;
                // header("Location: /Image_Gallery/upload.php");
                header("Location: /Image_Gallery/view.php");
            } else {
                $err = " Enter Correct Password";
                // header("Location: /Image_Gallery/login.php");
            }
        } else {
            $err = "Check Username and Password!";
            // header("Location: /Image_Gallery/login.php");
        }
    }
    echo "<script>let ok = confirm('$err');
    if(ok){history.back()}</script>";
}
