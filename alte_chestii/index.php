

<?php
//session_start();

if(isset($_SESSION['username'])){

	$_SESSION['msg'] = "log in first";
	header("location: ../login.php");
}

if(isset($GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header("location: ../login.php");
}
//session_destroy();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>MASS | Welcome</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/after_register.css">
    <script src="login.js"></script>
  </head>


  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1>Your virtual Beauty Assistant</h1>
        </div>
        </div>

        <div class="navbar">
          <a href="home.html">HOME</a>
          <a href="register.html">REGISTER</a>
          <a href="admin.html">ADMIN</a>
          <a href="aboutus.html">ABOUT US</a>
          <div class="dropdown">
            <button class="dropbtn">ADVICE 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="makeup.html">MAKE-UP</a>
              <a href="skincare.html">SKINCARE</a>
            </div>
          </div> 
          <a href="gettingtoknowyou.html">TELL US MORE ABOUT YOU</a>
          <a href="products.html">PRODUCTS</a>
        </div>
</header>


      <section id="showcase">

       <?php
       		if(isset($_SESSION['success'])) : ?>


       	<div>
       		
       		<p>
       			<?php

       			echo $_SESSION['success'];
       			unset($_SESSION['success']);

       			?>
       		</p>
       	</div>


       <?php endif ?>




<?php if(isset($_SESSION['username'])) : ?>

	<p>Welcome <strong><?php echo $_SESSION['username']; ?> </strong></p>

	<a href="../login.php">logout</a> </p>
	<button>heei<a href="index.php?logout='1'"></a></button>

<?php endif ?>
<p>heeeeei</p>

      </section>

      <footer>
      <p>PiRo, Copyright &copy, 2020</p>
    </footer>
    </body>
  </html>


