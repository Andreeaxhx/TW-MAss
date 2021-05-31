<?php include('../PHP/registerController.php')?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable...">
    <meta name="keywords" content="andreea, delia, tudor">
    <meta name="author" content="Andreea, Delia, Tudor">
    <title>MASS | Welcome</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/register.css">
  </head>


  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1>Your virtual Beauty Assistant</h1>
        </div>
      </div>

      <!--navigation bar-->

      <div class="navbar">
        <a href="home.php">HOME</a>
        <a href="register.php">REGISTER</a>
        <a href="admin.php">ADMIN</a>
        <a href="aboutus.php">ABOUT US</a>
        <div class="dropdown">
          <button class="dropbtn">ADVICE<i class="fa fa-caret-down"></i></button>
          <div class="dropdown-content">
            <a href="makeup.php">MAKE-UP</a>
            <a href="skincare.php">SKINCARE</a>
          </div>
        </div> 
        <a href="tumay.php">TELL US MORE ABOUT YOU</a>
        <a href="products.php">PRODUCTS</a>
      </div>
    </header>

      <section id="showcase">

        <?php include('../alte_chestii/errors.php')?>

        <form action="register.php" method="POST">

          <p>Choose a username:<br>
          <input type="text" name="username" required></p>
          <br>

          <p>Email adress:<br>
          <input type="email" name="email" required></p>
          <br>

          <p>Choose a password:<br>
          <input type="password" name="password" required></p>
          <br>
          

          <button type="submit" name = "register" >REGISTER</button>

          <p>Already a user? <a href="./login.php"> <b> login </bss> </a> </p>
        </form>
      </section>
      <footer><p>MASS, Copyright &copy, 2021</p></footer>
  </body>
</html>