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
<body class="bd" >
    <script src="script.js" ></script>
    <div class="d-flex justify-content-end align-items-end p-3" >
        
    </div>
    <div class="row rounded fa cntr" >
        <label class="fs-1 col-8 col-sm-10 cntr text-white" >CELLPHONE ACCESSORIES</label>
        <button for="log-out" class="col-4 col-sm-1 fa btn btn-warning rounded">
            <a href="../index.php" style="text-decoration: none;" >LOG-OUT</a>
        </button>
    </div>
    <div class="bar" >
        <nav id="navbar" class="fw-bold navbar navbar-dark bg-dark navbar-expand-md rounded">
            <button style="margin-right: 10px;" class="ms-2 btn-warning navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button>
            <div  class="row collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto align-items-center justify-content-center">
                   <li class="col-12 col-sm-2 border ms-1 view rounded nav-item">
                        <a class="fa cntr  rounded nav-link text-white text-decoration-none" id="login" href="#char">CHARGER</a>
                    </li>
                    <li class="col-12 col-sm-2 border ms-1 view rounded nav-item">
                        <a class="fa cntr rounded nav-link text-white text-decoration-none" id="browse" href="#cable">CABLE WIRE</a>
                    </li>
                    <li class="col-12 col-sm-2 border ms-1 view rounded nav-item">
                        <a class="fa cntr  rounded nav-link text-white text-decoration-none" id="browse" href="#hSet">HEADSET</a>
                    </li>
                    <li class="col-12 col-sm-2 border ms-1 view rounded nav-item">
                        <a class="fa cntr rounded nav-link text-white text-decoration-none" id="browse" href="#power">POWERBANK</a>
                    </li>
                    <li class="col-12 col-sm-2 border ms-1 view rounded nav-item">
                        <a class="fa cntr rounded nav-link text-white text-decoration-none" id="browse" href="#temp">TEMPERED GLASS</a>
                    </li>
                    <li class="col-12 col-sm-2 border ms-1 view rounded nav-item">
                        <a class="fa cntr rounded nav-link text-white text-decoration-none" id="browse" href="#hard">HARD CASE</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="bg-white row p-3">
        <div class="col-12 col-sm-9 border border-primary rounded"> 
            <div id="char" class="bg-dark fa text-white fw-bold cntr border rounded">
                <h3>CHARGER</h3>
            </div>
            <div class="border row rounded cntr" > 
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">Type C Charger</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" value="1" id="qty">    
                        </div>
                        <button id="adding" class="col-10 col-sm-10 add btn btn-primary rounded mt-2 " value="150">Add to Cart</button><br><br>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">Type B Charger</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/2.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button class="col-10 btn btn-primary rounded mt-2 ">Add to Cart</button>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">IPHONE CHARGER</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button class="col-10 btn btn-primary rounded mt-2 ">Add to Cart</button>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">SAM CHARGER</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button class="col-10 btn btn-primary rounded mt-2 ">Add to Cart</button>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">VIVO CHARGER</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button class="col-10 btn btn-primary rounded mt-2 ">Add to Cart</button>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">OPPO CHARGER</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button class="col-10 btn btn-primary rounded mt-2 ">Add to Cart</button>
                    </div>
                </div>       
            </div>
            <div id="cable" class="bg-dark fa text-white fw-bold cntr border rounded">
                <h3>CABLE WIRE</h3>
            </div>
            <div class="border row rounded cntr" > 
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">Type C Charger</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button id="adding" class="col-10 col-sm-10 add btn btn-primary rounded mt-2 " value="150">Add to Cart</button><br><br>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">Type B Charger</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/2.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button class="col-10 btn btn-primary rounded mt-2 ">Add to Cart</button>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">IPHONE CHARGER</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button class="col-10 btn btn-primary rounded mt-2 ">Add to Cart</button>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">SAM CHARGER</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button class="col-10 btn btn-primary rounded mt-2 ">Add to Cart</button>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">VIVO CHARGER</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button class="col-10 btn btn-primary rounded mt-2 ">Add to Cart</button>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">OPPO CHARGER</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button class="col-10 btn btn-primary rounded mt-2 ">Add to Cart</button>
                    </div>
                </div>       
            </div>
            <div id="hSet" class="bg-dark fa text-white fw-bold cntr border rounded">
                <h3>HEADSET</h3>
            </div>
            <div class="border row rounded cntr" > 
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">Type C Charger</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button id="adding" class="col-10 col-sm-10 add btn btn-primary rounded mt-2 " value="150">Add to Cart</button><br><br>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">Type B Charger</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/2.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button id="adding" class="col-10 col-sm-10 add btn btn-primary rounded mt-2 " value="150">Add to Cart</button><br><br>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">IPHONE CHARGER</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button id="adding" class="col-10 col-sm-10 add btn btn-primary rounded mt-2 " value="150">Add to Cart</button><br><br>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">SAM CHARGER</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button id="adding" class="col-10 col-sm-10 add btn btn-primary rounded mt-2 " value="150">Add to Cart</button><br><br>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">VIVO CHARGER</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button id="adding" class="col-10 col-sm-10 add btn btn-primary rounded mt-2 " value="150">Add to Cart</button><br><br>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">OPPO CHARGER</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button id="adding" class="col-10 col-sm-10 add btn btn-primary rounded mt-2 " value="150">Add to Cart</button><br><br>
                    </div>
                </div>       
            </div>
            <div id="power" class="bg-dark fa text-white fw-bold cntr border rounded">
                <h3>POWERBANK</h3>
            </div>
            <div class="border row rounded cntr" > 
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">Type C Charger</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button id="adding" class="col-10 col-sm-10 add btn btn-primary rounded mt-2 " value="150">Add to Cart</button><br><br>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">Type B Charger</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/2.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button class="col-10 btn btn-primary rounded mt-2 ">Add to Cart</button>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">IPHONE CHARGER</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button class="col-10 btn btn-primary rounded mt-2 ">Add to Cart</button>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">SAM CHARGER</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button class="col-10 btn btn-primary rounded mt-2 ">Add to Cart</button>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">VIVO CHARGER</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button class="col-10 btn btn-primary rounded mt-2 ">Add to Cart</button>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">OPPO CHARGER</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button class="col-10 btn btn-primary rounded mt-2 ">Add to Cart</button>
                    </div>
                </div>       
            </div>
            <div id="temp" class="bg-dark fa text-white fw-bold cntr border rounded">
                <h3>TEMPERED GLASS</h3>
            </div>
            <div class="border row rounded cntr" > 
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">Type C Charger</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button id="adding" class="col-10 col-sm-10 add btn btn-primary rounded mt-2 " value="150">Add to Cart</button><br><br>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">Type B Charger</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/2.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button class="col-10 btn btn-primary rounded mt-2 ">Add to Cart</button>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">IPHONE CHARGER</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button class="col-10 btn btn-primary rounded mt-2 ">Add to Cart</button>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">SAM CHARGER</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button class="col-10 btn btn-primary rounded mt-2 ">Add to Cart</button>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">VIVO CHARGER</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button class="col-10 btn btn-primary rounded mt-2 ">Add to Cart</button>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">OPPO CHARGER</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button class="col-10 btn btn-primary rounded mt-2 ">Add to Cart</button>
                    </div>
                </div>       
            </div>
            <div id="hard" class="bg-dark fa text-white fw-bold cntr border rounded">
                <h3>HARD CASE</h3>
            </div>
            <div class="border row rounded cntr" > 
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">Type C Charger</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button id="adding" class="col-10 col-sm-10 add btn btn-primary rounded mt-2 " value="150">Add to Cart</button><br><br>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">Type B Charger</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/2.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button class="col-10 btn btn-primary rounded mt-2 ">Add to Cart</button>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">IPHONE CHARGER</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button class="col-10 btn btn-primary rounded mt-2 ">Add to Cart</button>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">SAM CHARGER</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button class="col-10 btn btn-primary rounded mt-2 ">Add to Cart</button>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">VIVO CHARGER</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button class="col-10 btn btn-primary rounded mt-2 ">Add to Cart</button>
                    </div>
                </div>
                <div class="col-6 col-sm-2 view border rounded p-1 ">
                    <label class="cntr" for="product">OPPO CHARGER</label>
                    <div class="cntr">
                        <img style="height: 100px;" class="rounded" src="../product/1.jpg"  alt="">
                    </div>
                    <div class="cntr row">
                        <div class="cntr" >
                            <label class="col-3" for="qty">Qty: </label>
                            <input class="qty col-3" type="number" name="qty" id="qty">    
                        </div>
                        <button class="col-10 btn btn-primary rounded mt-2 ">Add to Cart</button>
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
                                <th>Qty</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="pName"></td>
                                <td id="price"></td>
                                <td id="quantity"></td>
                            </tr>
                        </tbody>
                    </table>
                    <div>
                        <div>
                            <label for="total" class="fs-3 fw-bold">Total: P</label>
                            <label class="fs-3 fw-bold" style=" pointer-events: none;" type="text" name="total" id="total">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>