<?php
include "db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font CSS -->
    <link rel="stylesheet" href="./css/font.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <title>Upload</title>
</head>

<body class="bg-dark">
    <nav class="navbar navbar-expand-lg bg-dark border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand mr-5 btn" href="#" style="color: violet;font-weight: 900;">Image Gallery</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-info" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-info" href="#">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container d-flex justify-content-between align-items-center" style="margin-top: 150px;">
        <div class="container-fluid p-5 bg-success" style="width: fit-content; border-radius: 20px;">
            <form action="" method="post" enctype="multipart/form-data" class="text-light">
                <div class="image mb-3">
                    <label for="Image" class="form-label h2 mb-3 text-primary font-weight-bold">
                        Select Image Here!</label><br>
                    <input class="form-control" type="file" name="image" id="image" required>
                </div>
                <div class="submit">
                    <input type="submit" name="submit" value="Share" class="btn btn-primary" style="width: 100px;">
                </div>
                <div class="errBox">
                    <h3 id="err"></h3>
                </div>
            </form>
        </div>
        <div class="design d-flex flex-column justify-content-center align-items-center">
            <img src="./img/letter.gif" alt="Post your Image" style="height: 300px; width: 350px;">
            <h4 class="h3 mt-3 text-light">Upload Your Pics!</h4>
        </div>
    </div>


    <?php
    if (isset($_POST['submit'])) {
        session_start();
        $imageId = chop($_SESSION['image'], '@gmail.com');
        $login_id = $_SESSION['image'];
        $imgData = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $imgName = basename($_FILES['image']['name']);
        $imgExt = pathinfo($imgName, PATHINFO_EXTENSION);
        $imageProperties = getimageSize($_FILES['image']['tmp_name']);

        include_once "user_table.php";

        $alter = "ALTER TABLE `$imageId` AUTO_INCREMENT = 1";
        mysqli_query($conn, $alter);

        $err = '<script>
        const err = document.getElementById("err");
        err.innerHTML = "Insert Image with size less than 1mb";
    </script>';

        echo "<pre>";
        print_r($err);

        $Allow_Types = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($imgExt, $Allow_Types)) {

            $sql = "INSERT INTO `$imageId`(imageType ,imageData,imageId)
	VALUES('{$imageProperties['mime']}', '{$imgData}','{$imageName}')";
            $upload_image = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));

            // $arr = array($imageId, $login_id);
            // $data = join('_', $arr);

            // session_start();
            // $_SESSION['id'] = $data;
            if (isset($upload_image)) {
                header("Location: /Image_Gallery/view.php");
            }
        } else {
            echo "<script>alert('Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload')</script>";
        }
    }

    echo $data;

    ?>


    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
</body>

</html>