<?php
session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>A&R Coffee</title>


  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/templatemo-style.css" rel="stylesheet">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
  </head>
  <body>
  

  <?php include 'userHeader.php'; ?>

    <section class="tm-welcome-section">
      <div class="container tm-position-relative">
        <div class="tm-lights-container">
          <img src="img/light.png" alt="Light" class="light light-1">
          <img src="img/light.png" alt="Light" class="light light-2">
          <img src="img/light.png" alt="Light" class="light light-3">  
        </div>        
        <div class="row tm-welcome-content">
          <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Welcome&nbsp;&nbsp;<img src="img/header-line.png" alt="Line" class="tm-header-line"></h2>
          <h2 class="gold-text tm-welcome-header-2">A&R Coffee</h2>
          <p class="gray-text tm-welcome-description">Discover a unique culinary journey with us, where the passion for good cuisine meets the elegance of the ambiance. Reserve your table today and let us transform every meal into an unforgettable experience.</p>
          <a href="#main" class="tm-more-button tm-more-button-welcome">Details</a>      
        </div>
        <img src="img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">             
      </div>      
    </section>
    <div class="tm-main-section light-gray-bg">
      <div class="container" id="main">
        <section class="tm-section row">
          <div class="col-lg-9 col-md-9 col-sm-8">
            <h2 class="tm-section-header gold-text tm-handwriting-font">The Best Coffee for you</h2>
            <h2>A&R Coffee</h2>
            <p class="gray-text tm-welcome-description">Step into our world of coffee delight, crafted with love and passion. We live for the perfect cup</p>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-4 tm-welcome-img-container">
            <div class="inline-block shadow-img">
              <img src="img/1.jpg" alt="Image" class="img-circle img-thumbnail">  
            </div>              
          </div>            
        </section>          
     
        <section class="tm-section row">
          <div class="col-lg-12 tm-section-header-container">
            <h2 class="tm-section-header gold-text tm-handwriting-font">  We live for the perfect cup</h2>
            <div class="tm-hr-container"><hr class="tm-hr"></div>
          </div>          
          <div class="col-lg-12 tm-special-container margin-top-60">
            <div class="tm-special-container-left"> 
              <div class="tm-special-item">
                <div class="tm-special-img-container">
                  <img src="img/special-1.jpg" alt="Special" class="tm-special-img img-responsive">  
                </div>
              </div>
            </div>
            <div class="tm-special-container-right"> 
              <div>
                <div class="tm-special-item">
                  <div class="tm-special-img-container">
                    <img src="img/special-2.jpg" alt="Special" class="img-responsive">  
                    <a href="#">
                  </div>
                </div>  
              </div>
              <div class="tm-special-container-lower">
                <div class="tm-special-item">
                  <div class="tm-special-img-container">
                    <img src="img/special-3.jpg" alt="Special" class="img-responsive">  
                  </div>
                </div>
                <div class="tm-special-item">
                  <div class="tm-special-img-container">
                    <img src="img/special-4.jpg" alt="Special" class="img-responsive">  
                  </div>
                </div>  
              </div>              
            </div>
          </div>
        </section>
        <section class="tm-section">
          <div class="row">
            <div class="col-lg-12 tm-section-header-container">
              <h2 class="tm-section-header gold-text tm-handwriting-font"> Daily Menu</h2> 
              <div class="tm-hr-container"><hr class="tm-hr"></div> 
            </div>  
          </div>          
          <div class="row">
            <div class="tm-daily-menu-container margin-top-60">
              <div class="col-lg-4 col-md-4">
                <img src="img/menu-board.png" alt="Menu board" class="tm-daily-menu-img">      
              </div>            
              <div class="col-lg-8 col-md-8">
          <p>Discover a unique culinary journey with us, where the passion for good cuisine meets the elegance of the ambiance. Reserve your table today and let us transform every meal into an unforgettable experience.</p>
                <ol class="margin-top-30">
                
    <li>Tunisian Margherita Pizza</li>
    <li>Makloub with Local Spices</li>
    <li>Tunisian Seafood Pizza</li>
    <li>Harissa-infused Chicken Pizza</li>
    <li>Spicy Merguez Sausage Makloub</li>
    <li>Tunisian Olive and Feta Pizza</li>
    <li>Traditional Tunisian Calzone</li>


                </ol>
              </div>
            </div>
          </div>          
        </section>
      </div>
    </div> 
    <?php include 'userFooter.php'; ?>
   <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script> 
   <script type="text/javascript" src="js/templatemo-script.js"></script> 
 
    </body>
    </html>

