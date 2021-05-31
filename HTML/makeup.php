<?php include('../PHP/get_info_makeup.php')?>
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
    <link rel="stylesheet" href="../CSS/makeup.css">
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
      <div class="container"><h1>Make-up advice</h1></div>

      <div class='another_container'>
        <div class='question'>
          <p>What type of makeup would you prefer?</p>

          <input name="typeMakeup" type="button" class="button" value="day">
          <input name="typeMakeup" type="button" class="button" value="night">

          <!-- <button class="button">day</button>
          <button class="button">night</button> -->

        </div>
      </div>
  
      <div class='another_container'>
        <div class='question'>
          <p>Should the makeup be waterproof?</p>

          <input name="waterproofMakeup" type="button" class="button" value="yes">
          <input name="waterproofMakeup" type="button" class="button" value="no">

          <!-- <button class="button">yes</button>
          <button class="button">no</button> -->

        </div>
      </div>

      <div class='another_container'>
        <div class='question'>
          <p>Based on color of your eyes, these are the eyeshadow that match!</p>
          <input type="color" list="eyeshadowColors" class="colorEyes1">
            <datalist id="eyeshadowColors">
              <option value="#4B0082">
              <option value="#6495ED">
              <option value="#708090">
              <option value="#800080">
              <option value="#9370DB">
            </datalist>

          <input type="color" list="eyeshadowColors" class="colorEyes2">
          <input type="color" list="eyeshadowColors" class="colorEyes3"> <br><br>
          <input type="radio" style="vertical-align: middle" id="lipstick" value="noEyeshadow">
          <label for="lipstick" style="vertical-align: middle">I prefer no eyeshadow</label>

        </div>
      </div>

      <div class='another_container'>
        <div class='question'>
          <p>Would you like false eyelashes?</p>

          <input name="falseEyelashes" type="button" class="button" value="yes">
          <input name="falseEyelashes" type="button" class="button" value="no">

          <!-- <button class="button">yes</button>
          <button class="button">no</button> -->

          <p>If yes, should they be more natural or dramatic?</p>

          <input name="typeEyelashes" type="button" class="button" value="natural">
          <input name="typeEyelashes" type="button" class="button" value="dramatic">

          <!-- <button class="button">natural</button>
          <button class="button">dramatic</button> -->


        </div>
      </div>


      <div class='another_container'>
        <div class='question'>
          <p>Choose a shade of lipstick:</p>
          <input type="color" list="lipstickColors" class="colorLips1">
            <datalist id="lipstickColors">
              <option value="#BA55D3">
              <option value="#C71585">
              <option value="#F08080">
              <option value="#FF0000">
              <option value="#FF6347">
            </datalist>

          <input type="color" list="lipstickColors" class="colorLips2">
          <input type="color" list="lipstickColors" class="colorLips3"><br> <br>
          <input type="radio" style="vertical-align: middle" id="lipstick" class="colorNatural">
          <label for="lipstick" style="vertical-align: middle">I prefer my natural shade</label>


        </div>
      </div>

      <div class='another_container'>
        <div class='question'>

          <label class= "question" for="quest">How long would you like your makeup to last?</label>

          <div class="hours">
            <input type="radio" style="vertical-align: middle; margin: 0px;" name ="quest" id="quest" class="time" value="2-4">
            <label for="quest">2 - 4 hrs</label><br>

            <input type="radio" style="vertical-align: middle; margin: 0px;"  name ="quest" id="quest" class="time" value="4-8">
            <label for="quest">4 - 8 hrs</label><br>

            <input type="radio" style="vertical-align: middle; margin: 0px;" name ="quest" id="quest" class="time" value="8-16">
            <label for="quest">8 - 16 hrs</label>
          </div>


        </div>
      </div>

    </section>

    <footer><p>MASS, Copyright &copy, 2021</p></footer>
  </body>
</html>