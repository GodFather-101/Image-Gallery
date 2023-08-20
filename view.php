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
    <title>View Page</title>
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

    <div class="container d-flex justify-content-center align-items-center flex-column">
        <div class="upload mt-5">
            <a class="text-light" href="./upload.php" style="text-decoration: none;"><button class="btn btn-primary">Upload Files</button></a>
        </div>
        <div class="view border mt-3 p-2" style="height: 400px;width: 1200px;">
            <div class="view_container row d-flex flex-column align-items-center text-light" id="main" style="min-height: 300px;min-width: 400px;width : 100%; height: 100%;overflow-x: auto;">
                <h3 id="msg" style="visibility: visible;">Insert Some Picture To See</h3>
                <?php

                include "db.php";
                // if (isset($_GET['id'])) {
                //     $Data = $_GET['id'];
                session_start();
                $imageId = chop($_SESSION['image'], '@gmail.com');
                $login_id = $_SESSION['image'];
                $select_img = "SELECT * FROM $imageId";
                $process = mysqli_query($conn, $select_img);

                if ($process) {
                    while ($row = mysqli_fetch_array($process)) {
                        $image = $row['imageData'];
                        $Type = $row['imageType'];
                        $image_Name = $row['imageId'];
                        $image_id = $row['Id'];
                        $arr = array($imageId, $image_id, $login_id);
                        $data = join('_', $arr);
                        echo '<div class="m-2 col-sm-3">';
                        echo '<img class="image col-sm-8" src="data:image;base64,' . base64_encode($image) . '"/>';

                        echo '<a href="./delete.php?id=' . $data . '"><button class="btn btn-danger text-light"><i class="fa-solid fa-heart-circle-xmark"></i></button></a>';

                        echo "</div>";
                    }
                }
                // }

                ?>
            </div>
        </div>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>

    <script>
        let msg = document.getElementById('msg');
        if (document.getElementById('main').getElementsByClassName('image')[0]) {
            msg.innerHTML = "";
            msg.style.visibility = "hidden";
        };
    </script>
</body>

</html>