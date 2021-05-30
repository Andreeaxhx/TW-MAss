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

          <button class="button">day</button>
          <button class="button">night</button>

        </div>
      </div>
  
      <div class='another_container'>
        <div class='question'>
          <p>Should the makeup be waterproof?</p>

          <button class="button">yes</button>
          <button class="button">no</button>

        </div>
      </div>

      <div class='another_container'>
        <div class='question'>
          <p>Based on color of your eyes, these are the eyeshadow that match!</p>
          <input type="color" list="eyeshadowColors">
            <datalist id="eyeshadowColors">
              <option>#4B0082</option>
              <option>#6495ED</option>
              <option>#708090</option>
              <option>#800080</option>
              <option>#9370DB</option>
            </datalist>

          <input type="color" list="eyeshadowColors">
          <input type="color" list="eyeshadowColors"> <br><br>
          <input type="radio" style="vertical-align: middle" id="lipstick">
          <label for="lipstick" style="vertical-align: middle">I prefer no eyeshadow</label>

        </div>
      </div>

      <div class='another_container'>
        <div class='question'>
          <p>Would you like false eyelashes?</p>

          <button class="button">yes</button>
          <button class="button">no</button>

          <p>If yes, should they be more natural or dramatic?</p>

          <button class="button">natural</button>
          <button class="button">dramatic</button>


        </div>
      </div>


      <div class='another_container'>
        <div class='question'>
          <p>Choose a shade of lipstick:</p>
          <input type="color" list="lipstickColors">
            <datalist id="lipstickColors">
              <option>#BA55D3</option>
              <option>#C71585</option>
              <option>#F08080</option>
              <option>#FF0000</option>
              <option>#FF6347</option>
            </datalist>

          <input type="color" list="lipstickColors">
          <input type="color" list="lipstickColors"><br> <br>
          <input type="radio" style="vertical-align: middle" id="lipstick">
          <label for="lipstick" style="vertical-align: middle">I prefer my natural shade</label>


        </div>
      </div>

      <div class='another_container'>
        <div class='question'>

          <label class= "question" for="quest">How long would you like your makeup to last?</label>

          <div class="hours">
            <input type="radio" style="vertical-align: middle; margin: 0px;" name ="quest" id="quest">
            <label for="quest">2 - 4 hrs</label><br>

            <input type="radio" style="vertical-align: middle; margin: 0px;"  name ="quest" id="quest">
            <label for="quest">4 - 8 hrs</label><br>

            <input type="radio" style="vertical-align: middle; margin: 0px;" name ="quest" id="quest">
            <label for="quest">8 - 16 hrs</label>
          </div>


        </div>
      </div>

    </section>

    <footer><p>MASS, Copyright &copy, 2021</p></footer>
  </body>
</html>