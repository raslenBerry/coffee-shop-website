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
$sqlQuery = 'SELECT * FROM reservationtable';
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
  <?php include 'adminHeader.php'; ?>

  <section class="tm-welcome-section">
      <div class="container tm-position-relative">
        <div class="tm-lights-container">
          <img src="img/light.png" alt="Light" class="light light-1">
          <img src="img/light.png" alt="Light" class="light light-2">
          <img src="img/light.png" alt="Light" class="light light-3">  
        </div>        
        <div class="row tm-welcome-content">
          <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Reservations&nbsp;&nbsp;<img src="img/header-line.png" alt="Line" class="tm-header-line"></h2>
          <h2 class="gold-text tm-welcome-header-2">A&R Coffee</h2>
          <p class="gray-text tm-welcome-description">Discover a unique culinary journey with us, where the passion for good cuisine meets the elegance of the ambiance. Reserve your table today and let us transform every meal into an unforgettable experience.</p>
          <a href="#main" class="tm-more-button tm-more-button-welcome">Reservations</a>      
        </div>
        <img src="img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">             
      </div>      
    </section>
    <div class="tm-main-section light-gray-bg">
      <div class="container" id="main">
              
        <section class="tm-section row">
          <div class="col-lg-12 tm-section-header-container margin-bottom-30">
            <h2 class="tm-section-header gold-text tm-handwriting-font">Reservations</h2>
            <div class="tm-hr-container"><hr class="tm-hr"></div>
          </div>
          
             
            <style>
    

        .cart-item {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 15px;
            background-color: #fff; 
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
         
        }
    </style>
           <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="tm-section-header gold-text tm-handwriting-font">Nom</th>
                    <th class="tm-section-header gold-text tm-handwriting-font">Date</th>
                    <th class="tm-section-header gold-text tm-handwriting-font">Nobre des places</th>

                   
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($res as $et) {
                    echo '
                        <tr class="cart-item">
                            <td>' . $et["dateheure"] . '</td>
                            <td>' . $et["nom"] . '</td>     
                            <td>' . $et["nbPlaces"] . '</td>                            
                       
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
   <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      
   <script type="text/javascript" src="js/templatemo-script.js"></script>      
 
    </body>
    </html>