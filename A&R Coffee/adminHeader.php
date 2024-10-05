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
    right: 10%;
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
    width: 100%;
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
    right: 10%;
  }

  .tm-nav select {
    background-color: #fff; 
    color: #000; 
    border: 1px solid #ccc; 
    padding: 8px;
    margin-top: -25px;
    border-radius: 5px; 
    position: relative;
    bottom : 10%
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
                <li><a title="t"href="adminSpecial.php">Today'Special</a></li>
                <li><a title="t"href="adminMenu.php">Menu</a></li>
                <li style="background-color: black; color: rgb(244, 240, 240); margin-top: 13px;">
                    <select title="tm-dropdown-link" onchange="navigateTo(this.value)" style="background-color: black; color: rgb(252, 251, 251); border: none;">
                        <option value="#" selected style="color:rgb(252, 251, 251); background-color: black;">Our_Dish</option>
                        <option value="update.php" style="color: rgb(248, 246, 246);">Update</option>
                        <option value="add.php" style="color: rgb(243, 235, 48, 247, 247);">Add</option>
                        <option value="delete.php" style="color: rgb(245, 241, 241);">Delete</option>
                    </select>
                </li>
    
                <script>
                    function navigateTo(url) {
                        if (url !== "#") {
                            window.location.href = url;
                        }
                    }
                </script>
                <li><a title="t"href="cartRecent.php">Cart_recent</a></li>    
                <li><a title="t"href="adminReservation.php">Reservations</a></li>       
                <li><a title="t"href="adminContact.php">Contacts</a></li>                
         
            
                <li><a href="logout.php">LogOut</a></li>
                
              </ul>
            </nav>   
          </div>           
        </div>    
      </div>
    </div>