<?php
   include('session.php');
?>
<html>
<head>
    <title>SKYNET</title>
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
        
        <div class="card border-0">
            
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">                        
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                            <img src="LOGO.png" class="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5">
                        <div class="row">
                            <h2 style="text-align: center;"> Welcome <?php echo $login_session; ?></h2>                         
                        </div>   
                        <div class="row">
                            <a href="blank.html" class="col-12">
                            <button type="button" class="btn btn-primary btn-lg btn-block mb-4">DJI</button>
                            </a>                            
                        </div>
                        <div class="row">
                            <a href="blank.html" class="col-12">
                            <button type="submit" class="btn btn-primary btn-lg btn-block mb-4">Mavlink</button>
                            </a>                            
                        </div>
                        <div class="row">
                            <a href="blank.html" class="col-12">
                            <button type="button" class="btn btn-primary btn-lg btn-block mb-4">Others(kml/csv)</button>
                            </a>                            
                        </div>
                        <div class="row">
                            <a href="logout.php" class="col-12">
                            <button type="button" class="btn btn-warning btn-lg btn-block mb-4">Sign Out</button>
                            </a>                            
                        </div>
                         
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    <footer id="sticky-footer" class="flex-shrink-0">
        <div class="container2 bg-blue">
            <div class="bg-blue py-4">
                <div class="row px-3">
                    <small class="ml-4 ml-sm-5 mb-2">Important: Contains Confidential Information and Resources.
                        Do not copy, use or modify by any means without prior written permission</small>
                        
                </div>
            </div>
        </div>
    </footer>
</body>
</html>