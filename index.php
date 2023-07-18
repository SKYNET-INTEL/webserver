<?php
   include("config.php");
   $error="";
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $email = mysqli_real_escape_string($db,$_POST['email']);
      $password = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM login WHERE email = '$email' and password = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         $_SESSION['login_user'] = $email;
         
         header("location: button.php");
      }else {
         $error = "Your Username or Password is invalid";
      }
   }
?>

<!DOCTYPE html>
<html>
<head>
    <title>SKYNET - LOGIN</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <div class="row">
                <!--img src="WhatsApp Image 2023-06-27 at 01.28.36.jpeg" class="logo"-->
                    <h1 >SKYNET FORENSICS CENTRALISED PORTAL</h1>
                      <span>Developed Proudly For National Security</span>      
            </div>
    </nav>
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="container">
        <div class="card border-0">           
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">                        
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line" >
                            <img src="LOGO.png" class="image" style="margin-top:40px;">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5">
                    <form action="" method="POST">
                    
                        <div class="row px-3 mb-4">
                            
                        </div>
                        <div class="row px-3">
                            <label class="mb-1"><h6 class="mb-0 text-sm">Username</h6></label>
                            <input class="mb-4" type="text" name="email" placeholder="Enter a valid Username" required><br>
                            
                        </div>
                        <div class="row px-3">
                            <label class="mb-1"><h6 class="mb-0 text-sm">Password</h6></label>
                            <input type="password" name="password" placeholder="Enter password" required><br>
                            
                        </div>
                        <div class="row px-3 mb-4">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> 
                                <label for="chk1" class="custom-control-label text-sm">Remember me</label>
                            </div>
                            <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                        </div>
                        <div class="row mb-3 px-3">
                            
                            <button type="submit" name="login"class="btn btn-blue text-center font-weight-bold">Login</button><br>
                            
                            
                        </div>
                        <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php if($error!==""){echo $error;}else{echo "";}?></div>
                        <div class="row mb-4 px-3">
                            <small class="font-weight-bold">Want to connect with us? <a href="contact.html" class="text-danger ">Contact Us</a></small>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    </div>
    <footer id="sticky-footer" class="flex-shrink-0">
        <div class="container2 bg-blue py-4">
            <div class="bg-blue py-4">
                <div class="row px-3">
                    <div class="d-flex justify-content-center align-items-center">
                        <small class="ml-4 ml-sm-5 mb-2">Important: Contains Confidential Information and Resources.
                        Do not copy, use or modify by any means without prior written permission</small>
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>
</body>
</html>