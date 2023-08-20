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

    <title>Image Gallery</title>
</head>

<body class="bg-dark">
    <section>
        <nav class="navbar navbar-expand-lg bg-dark border-bottom">
            <div class="container-fluid">
                <a class="navbar-brand mr-5 btn" href="#" style="color: violet;font-weight: 900;">Image Gallery</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-info" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-info" href="#">About</a>
                        </li>
                    </ul>
                </div>
                <div class="collapse-lg navbar-lg-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link btn btn-sm btn-outline-primary" aria-current="page" href="./register.php">Register</a>
                        </li>
                        <li class="nav-item ml-4">
                            <a class="nav-link btn btn-sm btn-outline-warning" href="./login.php">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container d-flex justify-content-between text-light align-items-center mt-3 justify-content-between p-5">
            <div class="content">
                <h1 class="h1">WELCOME</h1>
                <h3 class="h3">EVERYONE</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta dolore odio, ipsam consequatur autem culpa est! Accusamus facere porro iure voluptatibus, voluptate ut repellendus velit dolores nihil sapiente doloribus quia labore sunt consequatur similique provident incidunt quidem veritatis? Qui temporibus suscipit doloremque tempora natus hic dolore, sapiente delectus dolor. Odio deserunt reiciendis veritatis provident, blanditiis, vel assumenda error iste obcaecati repudiandae esse repellendus libero ut omnis. Atque cupiditate odit ipsa! Est aspernatur vero, necessitatibus reprehenderit enim temporibus atque minima vitae, totam dolore fugiat non officia hic! Quasi modi, tenetur distinctio expedita nam, ducimus, quia in laudantium molestias itaque odit aut?</p>
                <a href="./register.php"><button class="btn btn-primary m-3">Register</button></a><a href="./login.php"><button class="btn btn-warning">Login</button></a>
            </div>
            <div class="Desgin" style="position: relative;left:60px;">
                <img src="./img/image_design.png" alt="Image_Gallery">
            </div>
        </div>

    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
</body>

</html>