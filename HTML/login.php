<?php include('../PHP/loginController.php')?>
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

      <?php include('./navbars/navbarLogedIn.php'); ?>
    </header>

      <section id="showcase">

        <?php include('../alte_chestii/errors.php')?>
        <form action="login.php" method="POST">
            <p>Username:<br>
            <input type="text" name="username" required></p>
            <br>

            <p>Password:<br>
            <input type="password" name="password" required></p>
           

            <button type="submit" name="login_user">LOGIN</button>

            <p>Not a user? <a href="register.php"><b> register </b> </a></p>

       
            
            <br><br>
        </form>

      </section>

      <footer>
      <p>PiRo, Copyright &copy, 2020</p>
    </footer>
    </body>
  </html>


