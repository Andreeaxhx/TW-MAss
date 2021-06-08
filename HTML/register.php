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

      <?php include('./navbars/navbarLogedIn.php'); ?>

      <?php
        if(isset($_POST["register"]))
        {
            // $username = $_POST["username"];
            // $email = $_POST["email"];
            // $password = $_POST["password"];

            if(isset($_POST['username'])){
                $username = mysqli_real_escape_string($db, $_POST['username']);}

            if(isset($_POST['email'])){
                $email = mysqli_real_escape_string($db, $_POST['email']);}

            if(isset($_POST['password'])){
                $password = mysqli_real_escape_string($db, $_POST['password']);}


            $check = checkIfExists($db, $username, $email);
            //echo $check;
            if($check["result"]){

              $add = registerUser($db,$username,$email,$password);
              if($add["result"])
              {
                  header("Location: ../HTML/after_register.php");
              }
              else
              {
                  echo $add["error"];
              }
          }
          else echo $check["error"];
        }

    ?>

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