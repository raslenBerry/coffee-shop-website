<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
//connexion à la base de données
try
{
 $db =new PDO('mysql:host=localhost;dbname=coffe;charset=utf8', 
'root', '');
}
catch (Exception $e)
{
 die('Erreur : ' . $e->getMessage());
}
// On récupère tout le contenu de la table data_etudiant
$sqlQuery = 'SELECT * FROM contact';
$requete = $db->prepare($sqlQuery);
$requete->execute();
$res = $requete->fetchAll();


?>
   
   <style>
    

        .cart-item {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 15px;
            background-color: #fff; /* White background for each item */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
         
        }
    </style>
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
          <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Contacts&nbsp;&nbsp;<img src="img/header-line.png" alt="Line" class="tm-header-line"></h2>
          <h2 class="gold-text tm-welcome-header-2">A&R Coffee</h2>
          <p class="gray-text tm-welcome-description">Step into our world of coffee delight, crafted with love and passion. We live for the perfect cup</p>
          <a href="#main" class="tm-more-button tm-more-button-welcome">Contacts</a>      
        </div>
        <img src="img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">  
      </div>      
    </section>
    <div class="tm-main-section light-gray-bg">
      <div class="container" id="main">

        <section class="tm-section row">
          <div class="col-lg-9 col-md-9 col-sm-8">
            <h2 class="tm-section-header gold-text tm-handwriting-font">Contacts</h2>
          
          
           <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="tm-section-header gold-text tm-handwriting-font">Name</th>
                    <th class="tm-section-header gold-text tm-handwriting-font">Email</th>
                    <th class="tm-section-header gold-text tm-handwriting-font">Subject</th>
                    <th class="tm-section-header gold-text tm-handwriting-font">Message</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($res as $et) {
                    echo '
                        <tr class="cart-item">
                            <td>' . $et["nom"] . '</td>
                            <td>' . $et["email"] . '</td>
                            <td>' . $et["subjec"] . '</td>
                            <td>' . $et["messag"] . '</td>
                        </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
              </div>          
        </section>          
    
      </div>
    </div> 
    <?php include 'adminFooter.php'; ?>
   <!-- JS -->
   <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>   
   <script type="text/javascript" src="js/templatemo-script.js"></script>     
 
    </body>
    </html>