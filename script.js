//FOR SIGNIN
$(document).on('click','#login', function(e){
    e.preventDefault();

/*    if ($("#login1").hasClass('active')) {
        $("#login1").html("");
        $("#login1").removeClass('active');
    }else {
        $("#login1").addClass('active');  */
        $("#login1").html(`<form action="process/signin.php" method="post" class="mt-0 mt-sm-5">
                                <div class="p-1 col col-sm-3 border bg rounded">
                                    <div class="mb-1 d-flex justify-content-end align-items-end" >
                                        <button class="btn btn-dark text-white close" id="close" >x</button>
                                    </div>
                                <h1 class="text-warning rounded p-2 fa d-flex align-items-center justify-content-center" >SIGN-UP</h1><br>
                                <div class="p-3">                               
                                    <label class="fw-bold text-warning fa mb-2" for="username">Username:</label>
                                    <div class="d-flex justify-content-center align-items-center position">
                                        <i class="fas fa-user psicon"></i>
                                        <input type="text" name="username" class="form-control" id="username" autocomplete="off" required placeholder="Enter Username"><br>  
                                    </div><br>
                                    <label class="fw-bold text-warning fa mb-2" for="password">Password:</label>
                                    <div class="position d-flex justify-content-center align-items-center position" >
                                        <i class="fas fa-lock psicon"></i>
                                        <input type="password" name="pwd" id="pwd" placeholder="Enter Password" autocomplete="off" class="form-control"><br>
                                    </div><br>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <button class="fa btn btn-primary" type="submit" id="sign">SIGN-IN</button><br>
                                    </div>
                                    <a class="d-flex align-items-center justify-content-center" type="_blank" href="">Forget Password</a>
                                </div>
                            </form>`);
                            
        })
        
       
    
     

$(document).on('click','#close', function(){
    $("#login1").html("");
});

//FOR SIGNUP

$(document).on('click','#signup', function(e){
    e.preventDefault();
    
    
/*    if($("#login1").hasClass('active')){
        $("#login1").html("");
        $("#login1").removeClass('active');
    }else {
        $("#login1").addClass("active"); */
        $("#login1").html(` <form action="process/signup.php" method="post" class="mt-0 mt-sm-5">
                                <div class="p-1 col col-sm-3 border bg rounded">
                                    <div class="mb-1 d-flex justify-content-end align-items-end" >
                                        <button class="btn btn-dark text-white close" id="close" >x</button>
                                    </div>
                                <h1 class="text-warning rounded p-2 fa d-flex align-items-center justify-content-center" >SIGN-UP</h1><br>
                                <div class="p-3">                               
                                    <label class="fw-bold text-warning fa mb-2" for="username">Username:</label>
                                    <div class="d-flex justify-content-center align-items-center position">
                                        <i class="fas fa-user psicon"></i>
                                        <input type="text" name="username" class="form-control" id="username" autocomplete="off" required placeholder="Enter Username"><br>  
                                    </div><br>
                                    <label class="fw-bold text-warning fa mb-2" for="password">Password:</label>
                                    <div class="position d-flex justify-content-center align-items-center position" >
                                        <i class="fas fa-lock psicon"></i>
                                        <input type="password" name="pwd" id="pwd" placeholder="Enter Password" autocomplete="off" class="form-control"><br>
                                    </div><br>
                                    <label class="fw-bold text-warning fa mb-2" for="rPwd">Repeat Password:</label>
                                    <div class="position d-flex justify-content-center align-items-center position" >
                                        <i class="fas fa-lock psicon"></i>
                                        <input type="password" name="rPwd" id="rPwd" placeholder="Repeat Password" autocomplete="off" class="form-control"><br>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <button class="fa btn btn-primary" type="submit" id="sign">SUBMIT</button><br>
                                </div>
                                <a class="d-flex align-items-center justify-content-center" type="_blank" href="">Forget Password</a>
                                </div>
                            </form>`);
    })
 
