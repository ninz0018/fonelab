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
    <link rel="icon" type="icon/x-icon" href="12.png">
    <title>FONELAB</title>
</head>
<body id="background">
    <script src="script.js"></script> 
    <div>
        <div>
            <nav id="navbar" class="fw-bold navbar navbar-dark bg-dark navbar-expand-md">
                <a class="ms-3 navbar-brand" href="#">
                    <img style="height: auto; width: 90px" src="12.png"></img>
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
    <div>
    <?php
        session_start(); 
        if (isset($_SESSION["pwd"])){
            echo '<script>
            Swal.fire({
                title: "Input Password!!!",
                text: "Try Again!!",
                icon: "warning"
              });            
            </script>';
        }else if (isset($_SESSION["sUp"])){
            echo '<script>
            Swal.fire({
                title: "Successfully Registered!!",
                text: "Click ok to Login!!",
                icon: "success"
              });            
            </script>';
        }else if (isset($_SESSION['match'])){
            echo '<script>
            Swal.fire({
                title: "Password Dont Match",
                text: "Try Again!!",
                icon: "warning"
              });            
            </script>';
        }
            session_destroy();
        ?>


        <div id="login1" class="min ms-0 p-1 ms-sm-3"></div>
    </div>
    <div class="d-flex align-items-center justify-content-center bgs adjust">
        <div class="sizes">
            <a href="https://m.me/ninz.getz.9" target="_blank">
                <img class="sizes" src="contact/fb.svg" alt="FACEBOOK">
            </a>
        </div>
    </div>
</body>
</html>



