<?php 
  include('../PHP/get_info_makeup.php')
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
      <!-- <?php echo $_SESSION['username'] ?> -->
      <?php include('./navbars/navbarLogedIn.php'); ?>
    </header>

    <section id="showcase">

    <?php include('../alte_chestii/errors.php')?>

    <form action="makeup.php" method="POST">
        <div class="container"><h1>Make-up advice</h1></div>

        <div class='another_container'>
          <div class='question'>
            <p>What type of makeup would you prefer?</p>

            <input name="typeMakeup" id="dayMakeup" type="radio" class="button" value="day">
            <label for="dayMakeup" class="button"> Day </label>
            <input name="typeMakeup" id="nightMakeup" type="radio" class="button" value="night">
            <label for="nightMakeup" class="button"> Night </label>

            <!-- <button class="button">day</button>
            <button class="button">night</button> -->

          </div>
        </div>
    
        <div class='another_container'>
          <div class='question'>
            <p>Should the makeup be waterproof?</p>

            <input name="waterproofMakeup" id="yesWaterproofMakeup" type="radio" class="button" value="yes">
            <label for="yesWaterproofMakeup" class="button"> Yes </label>
            <input name="waterproofMakeup" id="noWaterproofMakeup" type="radio" class="button" value="no">
            <label for="noWaterproofMakeup" class="button"> No </label>

            <!--<input name="waterproofMakeup" type="button" class="button" value="yes">
            <input name="waterproofMakeup" type="button" class="button" value="no">

             <button class="button">yes</button>
            <button class="button">no</button> -->

          </div>
        </div>

        <div class='another_container'>
          <div class='question'>
            <p>Based on color of your eyes, these are the eyeshadow that match!</p>
            <input type="color" list="eyeshadowColors" name="colorEyes1">
              <datalist id="eyeshadowColors">
                <option value="#4B0082">
                <option value="#6495ED">
                <option value="#708090">
                <option value="#800080">
                <option value="#9370DB">
              </datalist>

            <input type="color" list="eyeshadowColors" name="colorEyes2">
            <input type="color" list="eyeshadowColors" name="colorEyes3"> <br><br>
            <input type="checkbox" style="vertical-align: middle" id="eyeShadow" name="noEyeshadow" value="noEyeshadow">
            <label for="eyeShadow" style="vertical-align: middle">I prefer no eyeshadow</label>

          </div>
        </div>

        <div class='another_container'>
          <div class='question'>
            <p>Would you like false eyelashes?</p>

            <input name="falseEyelashes" id="yesFalseEyelashes" type="radio" class="button" value="yes">
            <label for="yesFalseEyelashes" class="button"> Yes </label>
            <input name="falseEyelashes" id="noFalseEyelashes" type="radio" class="button" value="no">
            <label for="noFalseEyelashes" class="button"> No </label>

            <!--<input name="falseEyelashes" type="button" class="button" value="yes">
            <input name="falseEyelashes" type="button" class="button" value="no">

            <button class="button">yes</button>
            <button class="button">no</button> -->

            <p>If yes, should they be more natural or dramatic?</p>

            <input name="typeEyelashes" id="naturalFalseEyelashes" type="radio" class="button" value="natural">
            <label for="naturalFalseEyelashes" class="button"> Natural </label>
            <input name="typeEyelashes" id="dramaticTypeEyelashes" type="radio" class="button" value="dramatic">
            <label for="dramaticTypeEyelashes" class="button"> Dramatic </label>

            <!--<input name="typeEyelashes" type="button" class="button" value="natural">
            <input name="typeEyelashes" type="button" class="button" value="dramatic">

             <button class="button">natural</button>
            <button class="button">dramatic</button> -->


          </div>
        </div>


        <div class='another_container'>
          <div class='question'>
            <p>Choose a shade of lipstick:</p>
            <input type="color" list="lipstickColors" name="colorLips1">
              <datalist id="lipstickColors">
                <option value="#BA55D3">
                <option value="#C71585">
                <option value="#F08080">
                <option value="#FF0000">
                <option value="#FF6347">
              </datalist>

            <input type="color" list="lipstickColors" name="colorLips2">
            <input type="color" list="lipstickColors" name="colorLips3"><br> <br>
            <input type="checkbox" style="vertical-align: middle" id="lipstick" name="lipstick" value="noLipstick">
            <label for="lipstick" style="vertical-align: middle">I prefer my natural shade</label>


          </div>
        </div>

        <div class='another_container'>
          <div class='question'>

            <label class= "question" for="quest">How long would you like your makeup to last?</label>

            <div class="hours">
              <input type="radio" style="vertical-align: middle; margin: 0px;" name ="time" id="quest1" class="time" value="2-4">
              <label for="quest1" class="button">2 - 4 hrs</label><br>

              <input type="radio" style="vertical-align: middle; margin: 0px;"  name ="time" id="quest2" class="time" value="4-8">
              <label for="quest2" class="button">4 - 8 hrs</label><br>

              <input type="radio" style="vertical-align: middle; margin: 0px;" name ="time" id="quest3" class="time" value="8-16">
              <label for="quest3" class="button">8 - 16 hrs</label>
            </div>


          </div>
        </div>

        <input type="submit" value="Submit" name='submitBtn'>

    </form>
  </section>

    <footer><p>MASS, Copyright &copy, 2021</p></footer>
  </body>
</html>