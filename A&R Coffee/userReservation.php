<?php  

    session_start();
    
    // Redirect to login if user is not logged in
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit();
    }
    $user_id=$_SESSION['user_id'];


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
          <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Reservation&nbsp;&nbsp;<img src="img/header-line.png" alt="Line" class="tm-header-line"></h2>
          <h2 class="gold-text tm-welcome-header-2">A&R Coffee</h2>
          <p class="gray-text tm-welcome-description">Discover a unique culinary journey with us, where the passion for good cuisine meets the elegance of the ambiance. Reserve your table today and let us transform every meal into an unforgettable experience.</p>
          <a href="#main" class="tm-more-button tm-more-button-welcome">Reservation</a>      
        </div>
        <img src="img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">             
      </div>      
    </section>
    </section>
    <div class="tm-main-section light-gray-bg">
      <div class="container" id="main">
        <section class="tm-section row">
          <h2 class="col-lg-12 margin-bottom-30">Reservation</h2>



</form>

          <form action="<?= $_SERVER['PHP_SELF']?>" method="post" class="tm-contact-form">
            <div class="col-lg-6 col-md-6">
              <div class="form-group">
                <input type="text"  name="n" class="form-control" placeholder="Votre First/Last Name" />
              </div>
              <div class="form-group">
                <input type="date"  name="d" class="form-control" placeholder="Date" />
              </div>
              <div class="form-group">
                <input type="number"  name="nb" class="form-control" placeholder="nombre des places" />
              </div>
              <div class="form-group">
                <input class="tm-more-button" type="submit" onclick="envoyer()" value="Reservé" name="submit" style="border: none; outline: none;">
              </div>   

              

                
            </div>
          
            <img src="https://img.freepik.com/vecteurs-premium/conception-modele-carte-menu-nourriture-delicieuse-restaurant-cafe-taille-a4-creative-professionnelle_741765-55.jpg?w=2000"
                                alt="login form" class="img-fluid" style="border-radius: 10px;  width: 350px; height: 200px;" />
            </div> 
          </form>
        </section>
      </div>
    </div> 




   <?php  include("userFooter.php") ?>
   <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      
   <script type="text/javascript" src="js/templatemo-script.js"></script>      
    </body>
    </html>


<?php
if (!empty($_POST))
{

$nom=$_POST['n'];
$date=$_POST['d'];
$nb = $_POST['nb'];


try
{
 $db =new PDO('mysql:host=localhost;dbname=coffe;charset=utf8', 
'root', '');
}
catch (Exception $e)
{
 die('Erreur : ' . $e->getMessage());
}
// execution de la requete d insertion
$sqlQuery = "INSERT INTO reservationtable(id,nom,dateheure,user_id,nbPlaces)
VALUES(null,'$nom','$date','$user_id','$nb')";
$requete = $db->prepare($sqlQuery);
$requete->execute();


}
?>