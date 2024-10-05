
<?php
session_start();


if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
if (!empty($_POST))
{
  

$im=$_POST['im'];
$nom=$_POST['n'];
$des=$_POST['d'];
$price=$_POST['p'];

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
// execution de la requete d insertion
$sqlQuery = "INSERT INTO product(id,image,nom,description,price)
VALUES(null,'$im','$nom','$des','$price')";
$requete = $db->prepare($sqlQuery);
$requete->execute();
}
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
          <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Add&nbsp;&nbsp;<img src="img/header-line.png" alt="Line" class="tm-header-line"></h2>
          <h2 class="gold-text tm-welcome-header-2">A&R Coffee</h2>
          <p class="gray-text tm-welcome-description">Step into our world of coffee delight, crafted with love and passion.We live for the perfect cup</p>
          <a href="#main" class="tm-more-button tm-more-button-welcome">Add</a>      
        </div>
        <img src="img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">            
      </div>      
    </section>
    <div class="tm-main-section light-gray-bg">
      <div class="container" id="main">
        <section class="tm-section row">
          <h2 class="col-lg-12 margin-bottom-30">Add Here</h2>

</form>

          <form action="<?= $_SERVER['PHP_SELF']?>" method="post" class="tm-contact-form">
            <div class="col-lg-6 col-md-6">





             
              <div class="form-group">
                <input type="text" id="contact_email" name="im" class="form-control" placeholder="image" />
              </div>
              <div class="form-group">
                <input type="text" id="contact_email" name="n" class="form-control" placeholder="nom" />
              </div>
              <div class="form-group">
                <input type="text" id="contact_email" name="d" class="form-control" placeholder="description" />
              </div>
              <div class="form-group">
                <input type="text" id="contact_email" name="p" class="form-control" placeholder="price" />
              </div>
            

              
              
              <div class="form-group">
                <input class="tm-more-button" type="submit" onclick="envoyer()" value="Add" name="submit" style="border: none; outline: none;">
              </div>   
  
              

                
            </div>
            <img src="https://img.freepik.com/vecteurs-premium/conception-modele-carte-menu-nourriture-delicieuse-restaurant-cafe-taille-a4-creative-professionnelle_741765-55.jpg?w=2000"
                                alt="login form" class="img-fluid" style="border-radius: 10px;  width: 350px; height: 270px;" />
            </div> 
          </form>
        </section>
      </div>
    </div> 
    <?php include 'adminFooter.php'; ?>

   <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>    
   <script type="text/javascript" src="js/templatemo-script.js"></script>     
    </body>
    </html>


   

