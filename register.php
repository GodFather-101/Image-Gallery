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
    <title>Register</title>
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
                        <a class="nav-link btn btn-sm btn-outline-primary active" aria-current="page" href="./register.php">Register</a>
                    </li>
                    <li class="nav-item ml-4">
                        <a class="nav-link btn btn-sm btn-outline-warning" href="./login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container d-flex justify-content-between align-items-center">
        <form class="text-light border p-4" action="new_user.php" method="post" autocomplete="off" style="position: absolute; top: 150px; left: 200px; border-radius: 20px;">
            <div class="mb-3">
                <label for="InputName" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="InputEmail" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="InputPassword" class="form-label">Password</label>
                <input type="password" name="pwd" minlength="8" title="Passsword Must have length of 8" class="form-control" id="pwd" required>
            </div>
            <div class="mb-3">
                <label for="InputPassword" class="form-label">Confirm Password</label>
                <input type="password" name="confirmpwd" class="form-control" id="confirmpwd" required>
            </div>
            <div class="mb-3"><b id="Match"></b></div>
            <button type="submit" name="submit" id="submit" class="btn btn-primary text-light" disabled>Register</button>
        </form>
        <div class="design bg-dark" style="width: fit-content; position: absolute; bottom: 0; right: 50px;">
            <img src="./img/register.png" alt="Register" style="height: 400px; width: 400px; border-radius: 50% 50% 20% 20%;">
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>

    <!-- Valitation JS -->
    <script>
        let pwd = document.getElementById('pwd');
        let confirm_pwd = document.getElementById('confirmpwd');
        let Match = document.getElementById('Match');
        let btn = document.getElementById("submit");

        pwd.addEventListener('change', () => {
            setInterval(function() {
                if (pwd.value === confirm_pwd.value) {
                    Match.innerHTML = "Password Matched";
                    btn.removeAttribute("disabled");
                } else {
                    Match.innerHTML = "Password Not Matched";
                }
            }, 500)
        })
    </script>
</body>

</html>