<style>
  body {
    margin: 0;
    padding: 0;
  }

  .tm-top-header {
    background-color: black;
    color: #fff;
    padding: 3px 0;
    
  }

  .tm-top-header .tm-top-header-inner {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
    right : 10% ;
  }

  .tm-nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    align-items: center; 
  }

  .tm-nav ul li {
    margin: 0 3px;
  }
  li {
    width : 100% ;
  }

  .tm-nav ul li a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
  }

  .tm-site-logo {
    width: 100%;
    height: auto;
  }

  .tm-site-name {
    margin-left: 10px; 
    
  }

  .tm-logo-container {
    display: flex;
    align-items: center;
    position: relative;
    right : 10% ;
    
  }
</style>


<div class="tm-top-header">
  <div class="container">
    <div class="row">
      <div class="tm-top-header-inner">
        <div class="tm-logo-container">
          <img src="img/logo.png" alt="Logo" class="tm-site-logo">
          <h1 class="tm-site-name tm-handwriting-font">A&R Coffee</h1>
        </div>
        <div class="mobile-menu-icon">
          <i class="fa fa-bars"></i>
        </div>
        <nav class="tm-nav">
          <ul>
            <li><a href="userHome.php">Home</a></li>
            <li><a href="userSpecial.php">Today'Special</a></li>
            <li><a href="userMenu.php">Menu</a></li>
            <li><a href="userReservation.php">Reservation</a></li>
            <li><a href="userCart.php">Cart</a></li>
            <li><a href="userContact.php">Contact</a></li>
           <?php if (!isset($_SESSION['user_id'])) {
            echo '
                  <li><a href="login.php">Login</a></li>
                  <li><a href="register.php">Register</a></li>';
                  } ?>
            <?php if (isset($_SESSION['user_id'])) {
            echo '
            <li><a href="logout.php">LogOut</a></li>'; 
            } ?>
   

            
            
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
