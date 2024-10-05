<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

try {
    $db = new PDO('mysql:host=localhost;dbname=coffe;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// Fetch product_ids from todayspecial
$sqlQuery = 'SELECT product_id FROM todayspecial';
$requete = $db->prepare($sqlQuery);
$requete->execute();
$productIds = $requete->fetchAll(PDO::FETCH_COLUMN);

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
  <?php include 'adminHeader.php'; ?>

  <section class="tm-welcome-section">
      <div class="container tm-position-relative">
        <div class="tm-lights-container">
          <img src="img/light.png" alt="Light" class="light light-1">
          <img src="img/light.png" alt="Light" class="light light-2">
          <img src="img/light.png" alt="Light" class="light light-3">  
        </div>        
        <div class="row tm-welcome-content">
          <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Today Special&nbsp;&nbsp;<img src="img/header-line.png" alt="Line" class="tm-header-line"></h2>
          <h2 class="gold-text tm-welcome-header-2">A&R Coffee</h2>
          <p class="gray-text tm-welcome-description">Discover a unique culinary journey with us, where the passion for good cuisine meets the elegance of the ambiance. Reserve your table today and let us transform every meal into an unforgettable experience.</p>
          <a href="#main" class="tm-more-button tm-more-button-welcome">Today Special</a>      
        </div>
        <img src="img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">             
      </div>      
    </section>
    <div class="tm-main-section light-gray-bg">
      <div class="container" id="main">
              
        <section class="tm-section row">
          <div class="col-lg-12 tm-section-header-container margin-bottom-30">
            <h2 class="tm-section-header gold-text tm-handwriting-font">Today special</h2>
            <div class="tm-hr-container"><hr class="tm-hr"></div>
          </div>
    <div class="tm-main-section light-gray-bg">
      <div class="container" id="main">
        <section class="tm-section tm-section-margin-bottom-0 row">
          <div class="col-lg-12 tm-popular-items-container">
          <?php
          foreach ($productIds as $productId) {
            $sqlQuery = 'SELECT * FROM product WHERE id=:productId';
            $requete = $db->prepare($sqlQuery);
            $requete->bindParam(':productId', $productId, PDO::PARAM_INT);
            $requete->execute();
            $res = $requete->fetchAll();
        
            foreach ($res as $i) {
                echo '
                <form method="post">
                    <div class="tm-popular-item">
                      <img src="' . $i["image"] . '" alt="Popular" class="tm-popular-item-img" height="280px" width="300px">
                      <div class="tm-popular-item-description">
                        <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">a</span>' . $i["nom"] . '</h3><hr class="tm-popular-item-hr">
                        <p>' . $i["description"] . '</p>
                        <div class="order-now-container">
                          <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                        </div>
                      </div>              
                    </div>
                </form>';
            }
        }
          
          ?>
          </div>       
        </section>
      </div>
      </div>
      </section>
      </div>
      </div>






        <?php include 'adminFooter.php'; ?>

   <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      
   <script type="text/javascript" src="js/templatemo-script.js"></script>      
 
    </body>
    </html>

