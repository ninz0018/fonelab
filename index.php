<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body id="background" class="full-height" >
    <script src="script.js"></script>
    <div>
        <div class="bg-dark">
            <nav id="navbar" style="height: 70px;" class="fw-bold navbar navbar-dark navbar-expand-md">
                <a class="ms-3 navbar-brand" href="#">
                    <img style="height: auto; width: 100px" src="logo.png"></img>
                </a>
                    <button style="margin-right: 10px;" class="btn-warning navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div  class="align-self-end justify-content-end p-3 collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="rounded nav-item">
                            <a class="fa nav-link text-white text-decoration-none" id="login" >Login</a>
                        </li>
                        <li class="rounded nav-item">
                            <a class="fa nav-link text-white text-decoration-none" id="signup" >Signup</a>
                        </li>
                        <li class="rounded nav-item">
                            <a class="fa nav-link text-white text-decoration-none" id="browse" href="login/signinSuccss.php">Browse</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div  >
            <div id="login1" class="min ms-0 p-3 ms-sm-3" ></div>
    </div>
    <form action="process/signin.php" method="post" class="mt-0 mt-sm-5">
    <div class="p-3 col col-sm-3 border bg-warning rounded">
        <h1 class="bg-white rounded p-2 fa d-flex align-items-center justify-content-center" >LOG-IN</h1><br>
        <label class="fw-bold fa mb-2" for="username">Username:</label>
            <input type="text" class="form-control" id="users" autocomplete="off" required placeholder="Enter Username"><br>
        <label class="fw-bold fa mb-2" for="password">Password:</label>
            <input type="password" name="password" id="pwd" placeholder="Enter Password" autocomplete="off" class="form-control"><br>
        <div class="d-flex align-items-center justify-content-center">
            <button class="fa btn btn-primary" type="submit" id="sign">SIGN-IN</button><br>
        </div>
        <a class="d-flex align-items-center justify-content-center" type="_blank" href="">Forget Password</a>
    </div>
</form>
    <div class="d-flex align-self-center justify-content-center bg-warning">
        <div>
            <a href="https://m.me/ninz.getz.9" target="_blank">
                <img class="sizes" src="contact/fb.svg" alt="FACEBOOK">
            </a>
        </div>
    </div>
</body>
</html>

