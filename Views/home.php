<?php 
session_start();

  $_SESSION;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable...">
    <meta name="keywords" content="andreea, delia, tudor">
    <meta name="author" content="Andreea, Delia, Tudor">
    <title>MASS | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>


  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1>Your virtual Beauty Assistant</h1>
        </div>
        </div>

        <div class="navbar">
          <a href="./home">HOME</a>
          <a href="./aboutus">ABOUT US</a>
          <div class="dropdown">
            <button class="dropbtn">ADVICE 
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="./makeup">MAKE-UP</a>
              <a href="./skincare">SKINCARE</a>
            </div>
          </div> 
          <a href="./gettingtoknowyou">TELL US MORE ABOUT YOU</a>
          <a href="./products">PRODUCTS</a>
        </div>

      <section id="search-bar">

          <form>
            <input type="text" placeholder="Start typing...">
            <button type="search" class="button_1">SEARCH</button>
          </form>

      </section>
      </nav>
      </div>

    </header>
    <section id="showcase">
      <div class="container">
        <h1>News</h1>
        <p>We are constantly updating our content, in order for you to keep up with the latest trends in the beauty industry.</p>
        <div class="boxy">
          <img src="./pictures/back.jpg">
        </div>
        <h4>Our favorite eyeshadow palettes of 2021</h4>
        <ul>
          <li>1. Huda Beauty : Toffee Brown</li>
          <div class="boxpalettes">
            <img src="./pictures/toffee.jpg">
          </div>
          <li>2. Colourpop : Lizzie McGuire</li>
          <div class="boxpalettes">
            <img src="./pictures/lizzie.jpg">
          </div>
          <li>3. Urban Decay : Wild West</li>
          <div class="boxpalettes">
            <img src="./pictures/wildwest.jpg">
          </div>
       </ul>
      </div>
    </section>

    <footer>
    <p>MASS, Copyright &copy, 2021</p>
  </footer>
  </body>


</html>