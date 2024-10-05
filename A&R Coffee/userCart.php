

<?php
session_start();

// Redirect to login if user is not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
   
}


try {
    // Database connection
    $db = new PDO('mysql:host=localhost;dbname=coffe;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$userId = $_SESSION['user_id'];

// Fetch cart items
$cartSql = "SELECT carts.id, product.nom, product.description, product.price, carts.quantity 
            FROM carts 
            JOIN product ON carts.product_id = product.id 
            WHERE user_id = :user_id";
$cartStmt = $db->prepare($cartSql);
$cartStmt->bindParam(':user_id', $userId);
$cartStmt->execute();
$cartItems = $cartStmt->fetchAll();

// Total amount calculation
$totalAmount = array_sum(array_column($cartItems, 'quantity', 'price'));

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
          <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Cart&nbsp;&nbsp;<img src="img/header-line.png" alt="Line" class="tm-header-line"></h2>
          <h2 class="gold-text tm-welcome-header-2">A&R Coffee</h2>
          <p class="gray-text tm-welcome-description">Discover a unique culinary journey with us, where the passion for good cuisine meets the elegance of the ambiance. Reserve your table today and let us transform every meal into an unforgettable experience.</p>
          <a href="#main" class="tm-more-button tm-more-button-welcome">Cart</a>      
        </div>
        <img src="img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">             
      </div>      
    </section>


<div class="tm-main-section light-gray-bg">
    <div class="container" id="main">
        <section class="tm-section row">
            <h2 class="col-lg-12 margin-bottom-30"  style="font-size:40px; font-family:italic; text-align:center; color:brown;">Your Cart</h2>
            <div class="col-lg-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="font-size:30px; font-family:italic;">Product</th>
                            <th style="font-size:30px; font-family:italic;">Description</th>
                            <th style="font-size:30px; font-family:italic;">Price</th>
                            <th style="font-size:30px; font-family:italic;">Quantity</th>
                            <th style="font-size:30px; font-family:italic;">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                     <?php  $prixTot=0; ?>
                        <?php foreach ($cartItems as $item): ?>
                            <tr>
                                <td style="font-weight:bold;"><?= $item["nom"] ?></td>
                                <td><?= $item["description"] ?></td>
                                <td style="color:red;"><?= $item["price"] ?></td>
                                <td><?= $item["quantity"] ?></td>
                                <td style="color:red;"><?=$item["quantity"] * $item["price"] ?></td>
                                <?php  $prixTot+=$item["quantity"] * $item["price"]; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <p class="total" style="color:red;">Total Amount: <?= $prixTot ?></p>
            </div>
        </section>
    </div>
</div>

<?php include 'userFooter.php'; ?>

   <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>   
   <script type="text/javascript" src="js/templatemo-script.js"></script>     
 
    </body>
    </html>

