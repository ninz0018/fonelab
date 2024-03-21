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
    <title>FONELAB</title>
</head>
<body>
    <script src="script.js" ></script>
    <div class="d-flex justify-content-end align-items-end p-3" >
        <button for="log-out" class="fa btn btn-warning rounded">
            <a href="../index.php" style="text-decoration: none;" >LOG-OUT</a>
        </button>
    </div>
    <div class="border bg-white rounded fa cntr" >
        <h2>CELLPHONE ACCESSORIES</h2>
    </div>
    <nav id="navbar" class="fw-bold navbar navbar-dark bg-dark navbar-expand-md rounded">
                    <button style="margin-right: 10px;" class="ms-2 btn-warning navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div  class="row collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto align-items-center justify-content-center">
                        <li class="col-12 col-sm-2 border border-danger ms-1 view rounded nav-item">
                            <a class="fa cntr  rounded nav-link text-white text-decoration-none" id="login" href="#char">CHARGER</a>
                        </li>
                        <li class="col-12 col-sm-2 cntr border border-danger ms-1 view rounded nav-item">
                            <a class="fa  rounded nav-link text-white text-decoration-none" id="signup" href="#char">HEADSET</a>
                        </li>
                        <li class="col-12 col-sm-2 border border-danger ms-1 view rounded nav-item">
                            <a class="fa cntr rounded nav-link text-white text-decoration-none" id="browse" href="#char">POWERBANK</a>
                        </li>
                    </ul>
                </div>
    </nav>
    <div class="bg-white row p-3">
        <div class="col-12 col-sm-9 border border-primary rounded">
            <div id="char" class="bg-dark fa text-white fw-bold cntr border rounded">
                <h3>CHARGER</h3>
            </div>
            <div class="border row rounded cntr" > 
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">Type C Charger</label>
                    <a class="cntr" href="" > <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt=""></a>
                    <div class="cntr">
                        <button id="adding" class="add btn btn-primary rounded mt-2 " value="150">Add to Cart</button>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">Type B Charger</label>
                    <a class="cntr" href="" > <img style="height: 100px;" class="rounded" src="../product/2.jpg"  alt=""></a>
                    <div class="cntr">
                        <button class="btn btn-primary rounded mt-2 ">Add to Cart</button>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">IPHONE CHARGER</label>
                    <a class="cntr" href="" > <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt=""></a>
                    <div class="cntr">
                        <button class="btn btn-primary rounded mt-2 ">Add to Cart</button>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">SAM CHARGER</label>
                    <a class="cntr" href="" > <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt=""></a>
                    <div class="cntr">
                        <button class="btn btn-primary rounded mt-2 ">Add to Cart</button>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">VIVO CHARGER</label>
                    <a class="cntr" href="" > <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt=""></a>
                    <div class="cntr">
                        <button class="btn btn-primary rounded mt-2 ">Add to Cart</button>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">OPPO CHARGER</label>
                    <a class="cntr" href="" > <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt=""></a>
                    <div class="cntr">
                        <button class="btn btn-primary rounded mt-2 ">Add to Cart</button>
                    </div>
                </div>       
            </div>
        </div>
        <div class="col-12 col-sm-3 border rounded" >
            <div>
                <div class="d-flex justify-content-center align-items-center">
                    <h3>ORDER LIST</h3>
                </div>
            </div>
            <div>
                <div>
                    <table class="table" >
                        <thead>
                            <tr>
                                <th>PRODUCT</th>
                                <th>PRICE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="pName"></td>
                                <td id="price"></td>
                            </tr>
                        </tbody>
                    </table>
                    <div>
                        <div>
                            <label for="total">Total: P</label>
                            <label style=" pointer-events: none;" type="text" name="total" id="total">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>