<?php
session_start();

try {
    $db = new PDO('mysql:host=localhost;dbname=coffe;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// Fetch products from the database
$sqlQuery = 'SELECT * FROM product';
$requete = $db->prepare($sqlQuery);
$requete->execute();
$res = $requete->fetchAll();

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
          <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Menu&nbsp;&nbsp;<img src="img/header-line.png" alt="Line" class="tm-header-line"></h2>
          <h2 class="gold-text tm-welcome-header-2">A&R Coffee</h2>
          <p class="gray-text tm-welcome-description">Discover a unique culinary journey with us, where the passion for good cuisine meets the elegance of the ambiance. Reserve your table today and let us transform every meal into an unforgettable experience.</p>
          <a href="#main" class="tm-more-button tm-more-button-welcome">Menu</a>      
        </div>
        <img src="img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">             
      </div>      
    </section>
    <div class="tm-main-section light-gray-bg">
      <div class="container" id="main">
              
        <section class="tm-section row">
          <div class="col-lg-12 tm-section-header-container margin-bottom-30">
            <h2 class="tm-section-header gold-text tm-handwriting-font"> Our Menus</h2>
            <div class="tm-hr-container"><hr class="tm-hr"></div>
          </div>
          <div>
            <div class="col-lg-3 col-md-3">
              <div class="tm-position-relative margin-bottom-30">              
                <nav class="tm-side-menu">
                <ul>
                  <?php
                        foreach ($res as $i) {
                            echo '
                    <li><a href="#" class="active">' . $i["nom"] . '</a></li>
                   ';}
                  ?>
                  </ul>              
                </nav>    
                <img src="img/vertical-menu-bg.png" alt="Menu bg" class="tm-side-menu-bg">
              </div>  
            </div>            
            
            
            <div class="tm-menu-product-content col-lg-9 col-md-9">
    <!-- menu content -->
    <?php
    foreach ($res as $i) {
        echo '
        <form method="post">
            <div class="tm-product">
                <img src="' . $i["image"] . '" alt="Product" style="width:120px; height=120px;">
                <div class="tm-product-text">
                    <h3 class="tm-product-title">' . $i["nom"] . '</h3>
                    <p class="tm-product-description">' . $i["description"] . '</p>
                </div>
                <div class="tm-product-price">
                    <a href="#" class="tm-product-price-link tm-handwriting-font"><span class="tm-product-price-currency"></span>' . $i["price"] . 'D</a>
                </div>
                <div>
                    <input type="hidden" name="product_id" value="' . $i["id"] . '">
                    <input type="number" name="quantity" value="1" min="1" style="padding-left: 30px;">
                    <button type="submit" class="tm-more-button" name="add_to_cart">Add to Cart</button>
                </div>
            </div>
        </form>';
    }

    // Add to Cart 
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["add_to_cart"])) {
        $product_id = $_POST["product_id"];
        $quantity = $_POST["quantity"];
        $user_id = $_SESSION["user_id"];

        try {
            $sql = "INSERT INTO carts (user_id, product_id , quantity) VALUES (:user_id, :product_id , :quantity)";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':user_id', $user_id);
            $stmt->bindParam(':product_id', $product_id);
            $stmt->bindParam(':quantity', $quantity);


            
           
            $stmt->execute();
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
    ?>
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

