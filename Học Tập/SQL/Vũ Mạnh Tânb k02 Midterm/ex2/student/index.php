<?php require('../config/connect.php') ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<h4>Hello! let's get started</h4>
        <h6 class="font-weight-light">Sign in to continue.</h6>
        <form class="pt-3">
            <div class="form-group">      
                 <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">   
            </div>      
            <div class="form-group">      
                 <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">   
            </div>      
             <div class="mt-3">     
             <a class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" href="../../inlink.php">SIGN IN</a>       
             </div>     
                <a href="#" class="auth-link text-black">Forgot password?</a>    
                 
                  </div>
                </form>
              </div>                
    
</body>
</html>