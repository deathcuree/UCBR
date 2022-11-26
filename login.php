<?php
 require_once ("includes/initialize.php"); 

 if(isset($_POST['gsubmit'])){

  $email = trim($_POST['username']);
  $upass  = trim($_POST['pass']);
  $h_upass = sha1($upass);
  
   if ($email == '' OR $upass == '') { 
      message("Invalid Username and Password!", "error");
       redirect($web_root."index.php?page=6");
         
    } else {   
        $guest = new Guest();
        $res = $guest::guest_login($email,$h_upass);

        if ($res==true){
           redirect(WEB_ROOT."guest/homepage.php");
        }else{
             message("Invalid Username and Password! Please contact administrator", "error");
             redirect(WEB_ROOT."booking/index.php?view=logininfo");
        }
 
 }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <form action="" method="" class="row g-3">
                        <h4>Welcome Back</h4>
                        <div class="col-12">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="col-12">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rememberMe">
                                <label class="form-check-label" for="rememberMe"> Remember me</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" name="gsubmit" class="btn btn-dark float-end">Login</button>
                        </div>
                    </form>
                    <hr class="mt-4">
                    <div class="col-12">
                        <p class="text-center mb-0">Don't have not account yet? <a href="#">Signup</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>
</html>