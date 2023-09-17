<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
        <link rel="icon" type="image/jpg" href="logo.jpg">
	<link rel="stylesheet" type="text/css" href="css\signup.css">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
 <script src="js\jquery-1.11.3.min.js"></script>
</head>
<body style="background: url(kuriftu/guster.jpg);
    background-size: 100%;">
          <!--------navigation bar-------------------->

  <header >
     <div class="menu">
          <span class="bar"></span>          
     </div>
  <nav>
          <div class="nav-container">
          <div class="logo">
               <h2>Kuriftu Resort and Spa Afar</h2>
          </div>
 <ul>
          <li><a class="active" href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>  
       <!-----dropdown link-------->     
     <div class="dropdown">
        <button class="dropbtn">Booking</button>
        <div class="dropdown-content">
               <a href="Room booking.html">Boom & Suite</a>
               <a href="Bar and Resturant  Reservation.html">Bar & Resturant</a>
               <a href="Event Booking.html">Events</a>
          </div>
     </div>
       <li><a href="Gallery.html">Gallery</a></li>
 </ul> 
        </div>
     </nav>
</header>

         <!--------navigation bar-------------------->
<div class="box_bg">

<form action="signup-check.php" method="post" style="height: 600px;" >
      <h2>SIGN UP</h2>
    <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
         
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" name="name" placeholder="Name" value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" name="name" placeholder="Name"><br>
          <?php }?>

          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" name="uname" placeholder="User Name"value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" name="uname" placeholder="User Name"><br>
          <?php }?>

      <input type="password" name="password"  placeholder="Password"><br>

          <input type="password" name="re_password" placeholder="Re_Password"><br>

      <button type="submit" class="signup-btn">Sign Up</button>
          <a href="login_form.php" class="ca">Already have an account?</a>
     </form>
</div>


<footer class="footer">
          <div class="con">
                <div class="Row1">
                      <div class="colmn">
                             <h4>Address</h4>
                             <ul class="order">
                                <li class="list">SAMARA,ETHIOPIA</li>
                             </ul>
                      </div>
                      <div class="colmn">
                             <h4>contact us</h4>
                             <ul class="order">
                                <li class="list">Samara,Ethiopia</li>
                                <li class="list">Tel:+25191669044</li>
                                <li class="list">Email:devamesfin07@gmail.com</li>

                             </ul>
                      </div>
                      <div class="colmn">
                             <h4>social media</h4>
                              <div class="social-links">
    <a class="Sl" href="https://www.facebook.com/Kuriftu-Resorts-and-Spa-AFAR-783632542016011/"><i class="fab fa-facebook-f"></i></a>
     <a class="Sl" href="https://twitter.com/kuriftus?lang=en" class="fa fa-twitter"><i class="fab fa-twitter"></i></a>
     <a class="Sl" href="https://www.instagram.com/kurifturesortspa/"><i class="fab fa-instagram"></i></a>                      
                          </div>
                      </div>
                      
                </div>
          </div>

</footer>
      <hr>
      <div class="footer1" >
                <h4>Kuriftu Resorts and Spa Afar @ 2014</h4>
    </div>








<script >
  var isActive = false;
  $('.menu').on('click', function () {
    if (isActive){
      $(this).removeClass('active');
      $('body').removeClass('menu-open');
    }else{

      $(this).addClass('active');
      $('body').addClass('menu-open');
    }
   isActive = !isActive;  
  });
</script>

</body>
</html>