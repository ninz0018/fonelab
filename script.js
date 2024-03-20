//FOR SIGNIN
$(document).on('click','#login', function(e){
    e.preventDefault();

    if ($("#login1").hasClass('active')) {
        $("#login1").html("");
        $("#login1").removeClass('active');
    }else {
        $("#login1").addClass('active');
        $("#login1").html(`<form action="process/signin.php" method="post" class="mt-0 mt-sm-5">
        <div class="p-3 col col-sm-3 border bg-warning rounded">
        <h1 class="bg-white rounded p-2 fa d-flex align-items-center justify-content-center" >LOG-IN</h1><br>
        <label class="fw-bold fa mb-2" for="users">Username:</label>
        <input type="text" name="users" class="form-control" id="users" autocomplete="off" required placeholder="Enter Username"><br>
        <label class="fw-bold fa mb-2" for="pwd">Password:</label>
        <input type="password" name="pwd" id="pwd" placeholder="Enter Password" autocomplete="off" class="form-control"><br>
        <div class="d-flex align-items-center justify-content-center">
            <button class="fa btn btn-primary" type="submit" id="sign">SIGN-IN</button><br>
        </div>
        <a class="d-flex align-items-center justify-content-center" type="_blank" href="">Forget Password</a>
    </div>
    </form>`);
    }
        
        
    
})


//FOR SIGNUP
$(document).on('click','#signup', function(e){
    e.preventDefault();
    $("#login1").html(` <form action="process/signup.php" method="post" class="mt-0 mt-sm-5">
    <div class="p-3 col col-sm-3 border bg-warning rounded">
        <h1 class="bg-white rounded p-2 fa d-flex align-items-center justify-content-center" >SIGN-UP</h1><br>
        <label class="fw-bold fa mb-2" for="username">Username:</label>
        <input type="text" name="username" class="form-control" id="username" autocomplete="off" required placeholder="Enter Username"><br>
        <label class="fw-bold fa mb-2" for="password">Password:</label>
        <input type="password" name="pwd" id="pwd" placeholder="Enter Password" autocomplete="off" class="form-control"><br>
        <label class="fw-bold fa mb-2" for="rPwd">Repeat Password:</label>
        <input type="password" name="rPwd" id="rPwd" placeholder="Repeat Password" autocomplete="off" class="form-control"><br>
        <div class="d-flex align-items-center justify-content-center">
            <button class="fa btn btn-primary" type="submit" id="sign">SUBMIT</button><br>
        </div>
        <a class="d-flex align-items-center justify-content-center" type="_blank" href="">Forget Password</a>
    </div>
</form>`);
    
})

//hide chars in password



