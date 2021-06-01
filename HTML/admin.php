<?php include('../PHP/login_adminController.php')?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>MASS | Welcome</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/admin.css">
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
        <form action="admin.php" method="POST"><br><br>
            <p>Admin username:<br>
            <input type="text" name="username" required></p>
            <br>

            <p>Admin password:<br>
            <input type="password" name="password" required></p>

            <button type="submit" name="login_user">LOGIN</button>
        </form>

      </section>

    <footer><p>MASS, Copyright &copy, 2021</p></footer>
  </body>
</html>