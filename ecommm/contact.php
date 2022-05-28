<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact || BOLT Sports Shop</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">BOLT Sports Shop</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li><a href="about.php">About</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          <li class="active"><a href="contact.php">Contact</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>




    <div class="row" style="margin-top:30px;">
      <div class="small-12">

        <p>Wanna get in touch. Email us at <a href="mailto:support@techbarrack.com">support@techbarrack.com</a></p>

        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; BOLT Sports Shop. All Rights Reserved.</p>
        </footer>

      </div>
      <section id="page-header" class="about-header">
        <h2>#KnowUS</h2>
        <p>Lorem ipsum dolor sit amet.</p>

    </section>
    <section id="about-head" class="section-p1">
        <img src="img/about/a6.jpg" alt="">
        <div>
            <h2>Who We Are?</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat eum aut consequatur quisquam illum dolores, incidunt repellat. Quidem necessitatibus eos earum incidunt veritatis eum iste, quasi ex qui in labore. Lorem ipsum dolor sit amet
                consectetur adipisicing elit. Quaerat eum aut consequatur quisquam illum dolores, incidunt repellat. Quidem necessitatibus eos earum incidunt veritatis eum iste, quasi ex qui in labore.</p>
            <abbr title="">
            create stunning images with as much or as little control
            as you like thanks to a choice of basic and creative modes...
        </abbr>

            <br><br>

            <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%"> create stunning images with as much or as little control as you like thanks to a choice of basic and creative modes...</marquee>
        </div>

    </section>
    <section id="about-app" class="section-p1">
        <h1>Download Our <a href="#">App</a> </h1>
        <div class="video">
            <video autoplay muted loop src="img/about/1.mp4"></video>
        </div>
    </section>
    </div>







    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
