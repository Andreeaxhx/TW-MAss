<?php 
  include('../PHP/userTagsController.php');
  include('../bd/bd.php');
  
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
      <!-- <?php 
        session_start();
        echo $_SESSION['username'] 
      ?> -->
      <?php include('./navbars/navbarLogedIn.php'); ?>
    </header>

    <section id="showcase">

     <?php //include('../alte_chestii/errors.php')?> 
    <?php 

      if(isset($_POST["saveTags"]))
              {


                  /**
                   * Removing unnecesarry array keys
                   * so we can get the tag values
                   * without mapping input names
                   */

                $postArray = $_POST;

                unset($postArray["saveTags"]);

                foreach($postArray as $key=>$tag)
                {
                    $tagIds[] = $tag;
                }

                $saveUserTags = setUserTags($db,$_SESSION["user_id"],$tagIds);



                if($saveUserTags["result"])
                {
                    echo "<h3>Preferintele au fost salvate.</h3></hr><a href='home.php'>Acasa</a>";
                }
                else
                {
                      echo mysqli_error($db);
                }



              }



?>

    <form action="makeup.php" method="POST">
        <div class="container"><h1>Make-up advice</h1></div>

        <div class='another_container'>
          <div class='question'>
            <p>What type of makeup would you prefer?</p>

            <input name="typeMakeup" id="dayMakeup" type="radio" class="button" value=70>
            <label for="dayMakeup" class="button"> Day </label>
            <input name="typeMakeup" id="nightMakeup" type="radio" class="button" value=71>
            <label for="nightMakeup" class="button"> Night </label>


          </div>
        </div>

        <div class='another_container'>
          <div class='question'>
            <p>What type of event are you attending?</p>

            <input name="eventMakeup" id="casualMakeup" type="radio" class="button" value=72>
            <label for="casualMakeup" class="button"> Casual </label>
            <input name="eventMakeup" id="cocktailMakeup" type="radio" class="button" value=73>
            <label for="cocktailMakeup" class="button"> Cocktail </label>
            <input name="eventMakeup" id="partyMakeup" type="radio" class="button" value=74>
            <label for="partyMakeup" class="button"> Party  </label>

          </div>
        </div>
    
        <div class='another_container'>
          <div class='question'>
            <p>Should the makeup be waterproof?</p>

            <input name="waterproofMakeup" id="yesWaterproofMakeup" type="radio" class="button" value=75>
            <label for="yesWaterproofMakeup" class="button"> Yes </label>
            <input name="waterproofMakeup" id="noWaterproofMakeup" type="radio" class="button" value=76>
            <label for="noWaterproofMakeup" class="button"> No </label>


          </div>
        </div>

        <div class='another_container'>
          <div class='question'>
            <p>Would you like to wear false eyelashes?</p>
            <input name="falsies" id="yesFalsies" type="radio" class="button" value=77>
            <label for="yesFalsies" class="button"> Yes </label>
            <input name="falsies" id="noFalsies" type="radio" class="button" value=78>
            <label for="noFalsies" class="button"> No </label>
          </div>
        </div>

        <div class='another_container'>
          <div class='question'>
            <p>How long should the makeup last?</p>
            <input name="time" id="low" type="radio" class="button" value=79>
            <label for="low" class="button"> 2-4 hours </label>
            <input name="time" id="medium" type="radio" class="button" value=80>
            <label for="medium" class="button"> 4-8 hours </label>
            <input name="time" id="advanced" type="radio" class="button" value=81>
            <label for="advanced" class="button"> 8-16 hours </label>
            <input name="time" id="extreme " type="radio" class="button" value=82>
            <label for="extreme " class="button"> 16+ hours </label>
          </div>
        </div>

        <div class='another_container'>
          <div class='question'>
            <p>Do you have acnee?</p>

            <input name="acnee" id="yesAcnee" type="radio" class="button" value=83>
            <label for="yesAcnee" class="button"> Yes </label>
            <input name="acnee" id="noAcnee" type="radio" class="button" value=84>
            <label for="noAcnee" class="button"> No </label>

          </div>
        </div>

        <div class='another_container'>
          <div class='question'>
            <p>What type of skin do you have?</p>

            <input name="skin" id="dry" type="radio" class="button" value=85>
            <label for="dry" class="button"> Dry </label>
            <input name="skin" id="normal" type="radio" class="button" value=86>
            <label for="normal" class="button"> Normal </label>
            <input name="skin" id="mixed" type="radio" class="button" value=87>
            <label for="mixed" class="button"> Mixed </label>
            <input name="skin" id="oily " type="radio" class="button" value=88>
            <label for="oily " class="button"> Oily  </label>

          </div>
        </div>

        <div class='another_container'>
          <div class='question'>
            <p>What finish do you prefer?</p>

            <input name="finish" id="matte" type="radio" class="button" value=89>
            <label for="matte" class="button"> Matte </label>
            <input name="finish" id="dewy" type="radio" class="button" value=90>
            <label for="dewy" class="button"> Dewy </label>

          </div>
        </div>

        <div class='another_container'>
          <div class='question'>
            <p>Do you want your skin to look more natural or camouflaged?</p>

            <input name="coverage" id="Low_coverage" type="radio" class="button" value=91>
            <label for="Low_coverage" class="button"> Low coverage </label>
            <input name="coverage" id="medium_coverage" type="radio" class="button" value=92>
            <label for="medium_coverage" class="button"> Medium coverage </label>
            <input name="coverage" id="high_coverage" type="radio" class="button" value=93>
            <label for="high_coverage" class="button"> High coverage </label>
            <input name="coverage" id="buildable_coverage " type="radio" class="button" value=94>
            <label for="buildable_coverage " class="button"> Buildable coverage  </label>

          </div>
        </div>
      
        <div class='another_container'>
          <div class='question'>
            <p>Do you want to glow in the dark or look more natural?</p>

            <input name="glow" id="shiny_look" type="radio" class="button" value=95>
            <label for="shiny_look" class="button"> Shiny look </label>
            <input name="glow" id="natural_look " type="radio" class="button" value=96>
            <label for="natural_look " class="button"> Natural look  </label>

          </div>
        </div>

        <div class='another_container'>
          <div class='question'>
            <p>What color range would you pick for your eyeshadow?</p>

            <input name="color_range" id="nude" type="radio" class="button" value=97>
            <label for="nude" class="button"> Nude </label>
            <input name="color_range" id="pink " type="radio" class="button" value=98>
            <label for="pink " class="button"> Pink   </label>
            <input name="color_range" id="gray" type="radio" class="button" value=99>
            <label for="gray" class="button"> Gray </label>
            <input name="color_range" id="brown " type="radio" class="button" value=100>
            <label for="brown " class="button"> Brown </label>
            <input name="color_range" id="colorful " type="radio" class="button" value=101>
            <label for="colorful " class="button"> Colorful  </label>

          </div>
        </div>

        <div class='another_container'>
          <div class='question'>
            <p> What lipstick texture do you prefer?</p>

            <input name="lipstick_type" id="matte_lips" type="radio" class="button" value=102>
            <label for="matte_lips" class="button"> matte_lips </label>
            <input name="lipstick_type" id="glossy_lips " type="radio" class="button" value=103>
            <label for="glossy_lips " class="button"> glossy_lips   </label>
            <input name="lipstick_type" id="creamy_lips " type="radio" class="button" value=104>
            <label for="creamy_lips " class="button"> creamy_lips  </label>

          </div>
        </div>

        <input type="submit" value="Submit" name='saveTags'>

    </form>
  </section>

    <footer><p>MASS, Copyright &copy, 2021</p></footer>
  </body>
</html>