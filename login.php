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
    <title>Login</title>
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
            <div class="collapse-lg navbar-lg-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link btn btn-sm btn-outline-primary" aria-current="page" href="./register.php">Register</a>
                    </li>
                    <li class="nav-item ml-4">
                        <a class="nav-link active btn btn-sm btn-outline-warning" href="./login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container bg-success d-flex border p-5 justify-content-around align-items-center" style="margin-top: 100px; border-radius: 20px;">
        <div class="login_form p-5" style="width: 400px;">
            <form action="login_valid.php" method="post" class="text-light" autocomplete="off">
                <div class="header mb-3">
                    <label for="head" class="form-label h2">Login Form</label>
                </div>
                <div class="name mb-3">
                    <label for="name" class="form-label">Name :</label>
                    <input class="form-control" type="text" name="name" id="name" required>
                </div>
                <div class="password mb-3">
                    <label for="password" class="form-label">Password :</label>
                    <input class="form-control" type="password" name="pwd" id="pwd" required>
                </div>
                <div class="submit">
                    <button type="submit" class="btn btn-outline-primary" name="submit">Login</button>
                </div>
            </form>
        </div>
        <div class="design">
            <img src="./img/login.png" alt="login"  style="height: 300px; width: 350px;">
        </div>
    </div>



    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
</body>

</html>