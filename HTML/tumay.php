<?php include('../PHP/tumayController.php')?>

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
    <link rel="stylesheet" href="../CSS/tumay.css">
    <script src="/server.js" type="text/javascript"></script>
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
      <!--
      <div class="container">
        <h1>There's supposed to be some boxes to fill in here:</h1>
        <p>COMING SOON</p>
      </div>
      -->

      <?php

          // echo '<pre>';
          // print_r($_POST);
          // echo '<pre>';
      ?>

      <form class="firstForm" name="form1" action="tumay.php" id="registrationForm" method="POST"> 
        <div class="age">
          <label for="age">Age:</label>
          <input type="number" name="age" min="15" max="99" size="1" maxlength="2">
        </div>

        <br>

        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="male" checked>
        <label>Male</label>
        <input type="radio" name="gender" value="female">
        <label>Female</label>

        <br><br>
        <br><br>


        <!--      HAIR COLOR      -->

        <div>
          <div class="titleHairColor"> 
            <label for="hairColor">Hair color</label>
          </div>
          <br>
          <br>
          <!-- Black -->
          <input class="hairInput" type="radio" name="hairColor" id="blackHair" value="blackHair">
              <label class = "hairLabel" for="blackHair">
                <figure class="hair">
                  <img class="hair" src="../pictures/hairColor/black.jpg" alt="blackHair">
                  <figcaption> Black </figcaption>
                </figure>
              </label>

            <!-- Brown -->
            <input class="hairInput" type="radio" name="hairColor" id="brownHair" value="brownHair">
            <label class = "hairLabel" for="brownHair">
              <figure class="hair">
                <img class="hair" src="../pictures/hairColor/brown.jpg" alt="brownHair">
                <figcaption> Brown </figcaption>
              </figure>
            </label>

            <!-- Cinnamon -->
            <input class="hairInput" type="radio" name="hairColor" id="cinnamonHair" value="cinnamonHair">
            <label class = "hairLabel" for="cinnamonHair">
              <figure class="hair">
                <img class="hair" src="../pictures/hairColor/cinnamon.jpg" alt="cinnamonHair">
                <figcaption> Cinnamon </figcaption>
              </figure>
            </label>

            <!-- Dark Blonde -->
            <input class="hairInput" type="radio" name="hairColor" id="darkBlondeHair" value="darkBlondeHair">
            <label class = "hairLabel" for="darkBlondeHair">
              <figure class="hair">
                <img class="hair" src="../pictures/hairColor/darkblonde.jpg" alt="darkBlondeHair">
                <figcaption> Dark Blonde </figcaption>
              </figure>
            </label>

            <!-- Dark Brown -->
            <input class="hairInput" type="radio" name="hairColor" id="darkBrownHair" value="darkBrownHair">
            <label class = "hairLabel" for="darkBrownHair">
              <figure class="hair">
                <img class="hair" src="../pictures/hairColor/darkbrown.jpg" alt="darkBrownHair">
                <figcaption> Dark Brown </figcaption>
              </figure>
            </label>

            <!-- Dark Red -->
            <input class="hairInput" type="radio" name="hairColor" id="darkRedHair" value="darkRedHair">
            <label class = "hairLabel" for="darkRedHair">
              <figure class="hair">
                <img class="hair" src="../pictures/hairColor/darkred.jpg" alt="darkRedHair">
                <figcaption>  Dark Red </figcaption>
              </figure>
            </label>

            <!-- Gray -->
            <input class="hairInput" type="radio" name="hairColor" id="grayHair" value="grayHair">
            <label class = "hairLabel" for="grayHair">
              <figure class="hair">
                <img class="hair" src="../pictures/hairColor/gray.jpg" alt="grayHair">
                <figcaption> Gray </figcaption>
              </figure>
            </label>

            <!-- Green -->
            <input class="hairInput" type="radio" name="hairColor" id="greenHair" value="greenHair">
            <label class = "hairLabel" for="greenHair">
              <figure class="hair">
                <img class="hair" src="../pictures/hairColor/green.jpg" alt="greenHair">
                <figcaption> Green </figcaption>
              </figure>
            </label>

            <!-- Grey Brown -->
            <input class="hairInput" type="radio" name="hairColor" id="greyBrownHair" value="greyBrownHair">
            <label class = "hairLabel" for="greyBrownHair">
              <figure class="hair">
                <img class="hair" src="../pictures/hairColor/greybrown.jpg" alt="greyBrownHair">
                <figcaption> Grey Brown </figcaption>
              </figure>
            </label>

            <!-- Light Blonde -->
            <input class="hairInput" type="radio" name="hairColor" id="lightBlondeHair" value="lightBlondeHair">
            <label class = "hairLabel" for="lightBlondeHair">
              <figure class="hair">
                <img class="hair" src="../pictures/hairColor/lightblonde.jpg" alt="lightBlondeHair">
                <figcaption> Light Blonde </figcaption>
              </figure>
            </label>

            <!-- Light Blue -->
            <input class="hairInput" type="radio" name="hairColor" id="lightBlueHair" value="lightBlueHair">
            <label class = "hairLabel" for="lightBlueHair">
              <figure class="hair">
                <img class="hair" src="../pictures/hairColor/lightblue.jpg" alt="lightBlueHair">
                <figcaption> Light Blue </figcaption>
              </figure>
            </label>

            <!-- Light Cinnamon -->
            <input class="hairInput" type="radio" name="hairColor" id="lightCinnamonHair" value="lightCinnamonHair">
            <label class = "hairLabel" for="lightCinnamonHair">
              <figure class="hair">
                <img class="hair" src="../pictures/hairColor/lightcinnamon.jpg" alt="lightCinnamonHair">
                <figcaption> Light Cinnamon </figcaption>
              </figure>
            </label>

            <!-- Light Gray -->
            <input class="hairInput" type="radio" name="hairColor" id="lightGrayHair" value="lightGrayHair">
            <label class = "hairLabel" for="lightGrayHair">
              <figure class="hair">
                <img class="hair" src="../pictures/hairColor/lightgray.jpg" alt="lightGrayHair">
                <figcaption> Light Gray </figcaption>
              </figure>
            </label>

            <!-- Light Purple -->
            <input class="hairInput" type="radio" name="hairColor" id="lightPurpleHair" value="lightPurpleHair">
            <label class = "hairLabel" for="lightPurpleHair">
              <figure class="hair">
                <img class="hair" src="../pictures/hairColor/lightpurple.jpg" alt="lightPurpleHair">
                <figcaption> Light Purple </figcaption>
              </figure>
            </label>

            <!-- Orange -->
            <input class="hairInput" type="radio" name="hairColor" id="orangeHair" value="orangeHair">
            <label class = "hairLabel" for="orangeHair">
              <figure class="hair">
                <img class="hair" src="../pictures/hairColor/orange.jpg" alt="orangeHair">
                <figcaption> Orange </figcaption>
              </figure>
            </label>

            <!-- Pink -->
            <input class="hairInput" type="radio" name="hairColor" id="pinkHair" value="pinkHair">
            <label class = "hairLabel" for="pinkHair">
              <figure class="hair">
                <img class="hair" src="../pictures/hairColor/pink.jpg" alt="pinkHair">
                <figcaption> Pink </figcaption>
              </figure>
            </label>

            <!-- Red -->
            <input class="hairInput" type="radio" name="hairColor" id="redHair" value="redHair">
            <label class = "hairLabel" for="redHair">
              <figure class="hair">
                <img class="hair" src="../pictures/hairColor/red.jpg" alt="redHair">
                <figcaption> Red </figcaption>
              </figure>
            </label>

            <!-- White -->
            <input class="hairInput" type="radio" name="hairColor" id="whiteHair" value="whiteHair">
            <label class = "hairLabel" for="whiteHair">
              <figure class="hair">
                <img class="hair" src="../pictures/hairColor/white.jpg" alt="whiteHair">
                <figcaption> White </figcaption>
              </figure>
            </label>

          </div>           

        <br><br>

        <!--      HAIR TYPE     -->
      <div>   
        <div class="titleHairType">
          <label for="hairType">Hair type</label>
        </div>

        <br>
        
        <!-- Afro Bun -->
        <input class="hairTypeInput" type="radio" name="hairType" id="afro_bunHair" value="afro_bunHair">
            <label class = "hairTypeLabel" for="afro_bunHair">
              <figure class="hair">
                <img class="hairType" src="../pictures/hairType/afro_bun.jpg" alt="afro_bunHairType">
                <figcaption> Afro Bun </figcaption>
              </figure>
            </label>

            <!-- Afro Short -->
            <input class="hairTypeInput" type="radio" name="hairType" id="afro_shortHair" value="afro_shortHair">
            <label class = "hairTypeLabel" for="afro_shortHair">
              <figure class="hair">
                <img class="hairType" src="../pictures/hairType/afro_short.jpg" alt="afro_shortHairType">
                <figcaption>  Afro Short </figcaption>
              </figure>
            </label>

            <!-- Afro -->
            <input class="hairTypeInput" type="radio" name="hairType" id="afroHair" value="afroHair">
            <label class = "hairTypeLabel" for="afroHair">
              <figure class="hair">
                <img class="hairType" src="../pictures/hairType/afro.jpg" alt="afroHairType">
                <figcaption> Afro </figcaption>
              </figure>
            </label>

            <!--Asymmetric -->
            <input class="hairTypeInput" type="radio" name="hairType" id="asymmetricHair" value="asymmetricHair">
            <label class = "hairTypeLabel" for="asymmetricHair">
              <figure class="hair">
                <img class="hairType" src="../pictures/hairType/asymmetric.jpg" alt="asymmetricHairType">
                <figcaption> Asymmetric </figcaption>
              </figure>
            </label>

            <!-- Bangs Bun -->
            <input class="hairTypeInput" type="radio" name="hairType" id="bangs_bunHair" value="bangs_bunHair">
            <label class = "hairTypeLabel" for="bangs_bunHair">
              <figure  class="hair">
                <img class="hairType" src="../pictures/hairType/bangs_bun.jpg" alt="bangs_bunHairType">
                <figcaption> Bangs Bun </figcaption>
              </figure>
            </label>

            <!-- Bold -->
            <input class="hairTypeInput" type="radio" name="hairType" id="boldHair" value="boldHair">
            <label class = "hairTypeLabel" for="boldHair">
              <figure class="hair"> 
                <img class="hairType" src="../pictures/hairType/bold.jpg" alt="boldHairType">
                <figcaption> Bold </figcaption>
              </figure>
            </label>

            <!-- Curly Bangs -->
            <input class="hairTypeInput" type="radio" name="hairType" id="curly_bangsHair" value="curly_bangsHair">
            <label class = "hairTypeLabel" for="curly_bangsHair">
              <figure class="hair">
                <img class="hairType" src="../pictures/hairType/curly_bangs.jpg" alt="curly_bangsHairType">
                <figcaption> Curly Bangs </figcaption>
              </figure>
            </label>

            <!--Curly -->
            <input class="hairTypeInput" type="radio" name="hairType" id="curlyHair" value="curlyHair">
            <label class = "hairTypeLabel" for="curlyHair">
              <figure class="hair">
                <img class="hairType" src="../pictures/hairType/curly.jpg" alt="curlyHairType">
                <figcaption> Curly </figcaption>
              </figure>
            </label>

            <!-- Long Straight Part -->
            <input class="hairTypeInput" type="radio" name="hairType" id="long_straight_partHair" value="long_straight_partHair">
            <label class = "hairTypeLabel" for="long_straight_partHair">
              <figure class="hair">
                <img class="hairType" src="../pictures/hairType/long_straight_part.jpg" alt="long_straight_partHairType">
                <figcaption> Long Straight Part </figcaption>
              </figure>
            </label>

            <!--  Long Straight -->
            <input class="hairTypeInput" type="radio" name="hairType" id="long_straightHair" value="long_straightHair">
            <label class = "hairTypeLabel" for="long_straightHair">
              <figure class="hair">
                <img class="hairType" src="../pictures/hairType/long_straight.jpg" alt="long_straightHairType">
                <figcaption> Long Straight </figcaption>
              </figure>
            </label>

            <!-- Medium Bangs -->
            <input class="hairTypeInput" type="radio" name="hairType" id="medium_bangsHair" value="medium_bangsHair">
            <label class = "hairTypeLabel" for="medium_bangsHair">
              <figure class="hair">
                <img class="hairType" src="../pictures/hairType/medium_bangs.jpg" alt="medium_bangsHairType">
                <figcaption> Medium Bangs </figcaption>
              </figure>
            </label>

            <!-- Not Straight -->
            <input class="hairTypeInput" type="radio" name="hairType" id="not_straightHair" value="not_straightHair">
            <label class = "hairTypeLabel" for="not_straightHair">
              <figure class="hair">
                <img class="hairType" src="../pictures/hairType/not_straight.jpg" alt="not_straightHairType">
                <figcaption> Not Straight </figcaption>
              </figure>
            </label>

            <!-- Ponytail -->
            <input class="hairTypeInput" type="radio" name="hairType" id="ponytailHair" value="ponytailHair">
            <label class = "hairTypeLabel" for="ponytailHair">
              <figure class="hair">
                <img class="hairType" src="../pictures/hairType/ponytail.jpg" alt="ponytailHairType">
                <figcaption> Ponytail </figcaption>
              </figure>
            </label>

            <!-- Ponytail Bangs -->
            <input class="hairTypeInput" type="radio" name="hairType" id="ponytail_bangsHair" value="ponytail_bangsHair">
            <label class = "hairTypeLabel" for="ponytail_bangsHair">
              <figure class="hair">
                <img class="hairType" src="../pictures/hairType/ponytail_bangs.jpg" alt="ponytail_bangsHairType">
                <figcaption> Ponytail Bangs </figcaption>
              </figure>
            </label>

            <!-- Short Curly -->
            <input class="hairTypeInput" type="radio" name="hairType" id="short_curlyHair" value="short_curlyHair">
            <label class = "hairTypeLabel" for="short_curlyHair">
              <figure class="hair">
                <img class="hairType" src="../pictures/hairType/short_curly.jpg" alt="short_curlyHairType">
                <figcaption> Short Curly </figcaption>
              </figure>
            </label>

            <!-- Short Notstraight -->
            <input class="hairTypeInput" type="radio" name="hairType" id="short_notstraightHair" value="short_notstraightHair">
            <label class = "hairTypeLabel" for="short_notstraightHair">
              <figure class="hair">
                <img class="hairType" src="../pictures/hairType/short_notstraight.jpg" alt="short_notstraightHairType">
                <figcaption> Short Notstraight </figcaption>
              </figure>
            </label>

            <!-- Short Not Straight -->
            <input class="hairTypeInput" type="radio" name="hairType" id="short_notstraightHair" value="short_notstraightHair">
            <label class = "hairTypeLabel" for="short_notstraightHair">
              <figure class="hair">
                <img class="hairType" src="../pictures/hairType/short_notstraight.jpg" alt="short_notstraightHairType">
                <figcaption> Short Not Straight </figcaption>
              </figure>
            </label>

            <!-- short_straight_bangs -->
            <input class="hairTypeInput" type="radio" name="hairType" id="short_straight_bangsHair" value="short_straight_bangsHair">
            <label class = "hairTypeLabel" for="short_straight_bangsHair">
              <figure class="hair">
                <img class="hairType" src="../pictures/hairType/short_straight_bangs.jpg" alt="short_straight_bangsHairType">
                <figcaption> Short Straight Bangs </figcaption>
              </figure>
            </label>

            <!-- short_straight -->
            <input class="hairTypeInput" type="radio" name="hairType" id="short_straightHair" value="short_straightHair">
            <label class = "hairTypeLabel" for="short_straightHair">
              <figure class="hair">
                <img class="hairType" src="../pictures/hairType/short_straight.jpg" alt="short_straightHairType">
                <figcaption> Short Straight </figcaption>
              </figure>
            </label>

              <!-- short_wavy_bangs -->
            <input class="hairTypeInput" type="radio" name="hairType" id="short_wavy_bangsHair" value="short_wavy_bangsHair">
            <label class = "hairTypeLabel" for="short_wavy_bangsHair">
              <figure class="hair">
                <img class="hairType" src="../pictures/hairType/short_wavy_bangs.jpg" alt="HairType">
                <figcaption> Short Wavy Bangs </figcaption>
              </figure>
            </label>

            <!-- short_wavy_part -->
            <input class="hairTypeInput" type="radio" name="hairType" id="short_wavy_partHair" value="short_wavy_partHair">
            <label class = "hairTypeLabel" for="short_wavy_partHair">
              <figure class="hair">
                <img class="hairType" src="../pictures/hairType/short_wavy_part.jpg" alt="short_wavy_partHairType">
                <figcaption> Short Wavy Part </figcaption>
              </figure>
            </label>

              <!-- side  -->
            <input class="hairTypeInput" type="radio" name="hairType" id="sideHair" value="sideHair">
            <label class = "hairTypeLabel" for="sideHair">
              <figure class="hair">
                <img class="hairType" src="../pictures/hairType/side.jpg" alt="sideHairType">
                <figcaption> Side </figcaption>
              </figure>
            </label>

            <!-- very_curly -->
            <input class="hairTypeInput" type="radio" name="hairType" id="very_curlyHair" value="very_curlyHair">
            <label class = "hairTypeLabel" for="very_curlyHair">
              <figure class="hair">
                <img class="hairType" src="../pictures/hairType/very_curly.jpg" alt="very_curlyHairType">
                <figcaption> Very Curly </figcaption>
              </figure>
            </label>

            <!-- very_short -->
            <input class="hairTypeInput" type="radio" name="hairType" id="very_shortHair" value="very_shortHair">
            <label class = "hairTypeLabel" for="very_shortHair">
              <figure class="hair">
                <img class="hairType" src="../pictures/hairType/very_short.jpg" alt="very_shortHairType">
                <figcaption> Very Short </figcaption>
              </figure>
            </label>

            <!-- very_very_short -->
            <input class="hairTypeInput" type="radio" name="hairType" id="very_very_shortHair" value="very_very_shortHair">
            <label class = "hairTypeLabel" for="very_very_shortHair">
              <figure class="hair">
                <img class="hairType" src="../pictures/hairType/very_very_short.jpg" alt="very_very_shortHairType">
                <figcaption> Very Very Short </figcaption>
              </figure>
            </label>

            <!-- wavy_bangs_too -->
            <input class="hairTypeInput" type="radio" name="hairType" id="wavy_bangs_tooHair" value="wavy_bangs_tooHair">
            <label class = "hairTypeLabel" for="wavy_bangs_tooHair">
              <figure class="hair">
                <img class="hairType" src="../pictures/hairType/wavy_bangs_too.jpg" alt="wavy_bangs_tooHairType">
                <figcaption> Wavy Bangs Too </figcaption>
              </figure>
            </label>

            <!-- wavy_bangs -->
            <input class="hairTypeInput" type="radio" name="hairType" id="wavy_bangsHair" value="wavy_bangsHair">
            <label class = "hairTypeLabel" for="wavy_bangsHair">
              <figure class="hair">
                <img class="hairType" src="../pictures/hairType/wavy_bangs.jpg" alt="wavy_bangsHairType">
                <figcaption> Wavy Bangs </figcaption>
              </figure>
            </label>

            <!-- wavy_middle -->
            <input class="hairTypeInput" type="radio" name="hairType" id="wavy_middleHair" value="wavy_middleHair">
            <label class = "hairTypeLabel" for="wavy_middleHair">
              <figure class="hair">
                <img class="hairType" src="../pictures/hairType/wavy_middle.jpg" alt="wavy_middleHairType">
                <figcaption> Wavy Middle </figcaption>
              </figure>
            </label>


      </div>   
        <br><br>
        
      <!--      SKIN COLOR     -->
      <div>   
        <div class="skinColorTitle">
          <label for="skinColor">Skin color</label>
        </div>

        <br>

        <!-- 1 -->
        <input class="skinColorInput" type="radio" name="skinColor" id="skinColor1" value="skinColor1">
            <label class = "skinColorLabel" for="skinColor1">
              <figure class="skinColorFig">
                <img class="skinColorImg" src="../pictures/skinColor/1.jpg" alt="skinColor1">
                <figcaption> 1 </figcaption>
              </figure>
            </label>

        <!-- 2 -->
        <input class="skinColorInput" type="radio" name="skinColor" id="skinColor2" value="skinColor2">
            <label class = "skinColorLabel" for="skinColor2">
              <figure class="skinColorFig">
                <img class="skinColorImg" src="../pictures/skinColor/2.jpg" alt="skinColor2">
                <figcaption> 2  </figcaption>
              </figure>
            </label>

        <!-- 3  -->
        <input class="skinColorInput" type="radio" name="skinColor" id="skinColor3" value="skinColor3">
        <label class = "skinColorLabel" for="skinColor3">
          <figure class="skinColorFig">
            <img class="skinColorImg" src="../pictures/skinColor/3.jpg" alt="skinColor3">
            <figcaption> 3  </figcaption>
          </figure>
        </label>

        <!-- 4 -->
        <input class="skinColorInput" type="radio" name="skinColor" id="skinColor4" value="skinColor4">
            <label class = "skinColorLabel" for="skinColor4">
              <figure class="skinColorFig">
                <img class="skinColorImg" src="../pictures/skinColor/4.jpg" alt="skinColor4">
                <figcaption> 4  </figcaption>
              </figure>
            </label>

        <!-- 5 -->
        <input class="skinColorInput" type="radio" name="skinColor" id="skinColor5" value="skinColor5">
        <label class = "skinColorLabel" for="skinColor5">
          <figure class="skinColorFig">
            <img class="skinColorImg" src="../pictures/skinColor/5.jpg" alt="skinColor5">
            <figcaption> 5 </figcaption>
          </figure>
        </label>

        <!-- 6 -->
        <input class="skinColorInput" type="radio" name="skinColor" id="skinColor6" value="skinColor6">
            <label class = "skinColorLabel" for="skinColor6">
              <figure class="skinColorFig">
                <img class="skinColorImg" src="../pictures/skinColor/6.jpg" alt="skinColor6">
                <figcaption>  6 </figcaption>
              </figure>
            </label>

        <!-- 7 -->
        <input class="skinColorInput" type="radio" name="skinColor" id="skinColor7" value="skinColor7">
        <label class = "skinColorLabel" for="skinColor7">
          <figure class="skinColorFig">
            <img class="skinColorImg" src="../pictures/skinColor/7.jpg" alt="skinColor7">
            <figcaption> 7 </figcaption>
          </figure>
        </label>

        <!-- 8 -->
        <input class="skinColorInput" type="radio" name="skinColor" id="skinColor8" value="skinColor8">
            <label class = "skinColorLabel" for="skinColor8">
              <figure class="skinColorFig">
                <img class="skinColorImg" src="../pictures/skinColor/8.jpg" alt="skinColor8">
                <figcaption> 8 </figcaption>
              </figure>
            </label>

        <!-- 9 -->
        <input class="skinColorInput" type="radio" name="skinColor" id="skinColor9" value="skinColor9">
        <label class = "skinColorLabel" for="skinColor9">
          <figure class="skinColorFig">
            <img class="skinColorImg" src="../pictures/skinColor/9.jpg" alt="skinColor9">
            <figcaption> 9 </figcaption>
          </figure>
        </label>

        <!-- 10 -->
        <input class="skinColorInput" type="radio" name="skinColor" id="skinColor10" value="skinColor10">
            <label class = "skinColorLabel" for="skinColor10">
              <figure class="skinColorFig">
                <img class="skinColorImg" src="../pictures/skinColor/10.jpg" alt="skinColor10">
                <figcaption> 10 </figcaption>
              </figure>
            </label>

      </div>   
      
      <br><br>

      <!--      FACE     -->
      <div>   
        <div class="faceTitle">
          <label for="face">Face Shape</label>
        </div>
        <br>
        <!-- 1 -->
        <input class="faceInput" type="radio" name="face" id="face1" value="face1">
            <label class = "faceLabel" for="face1">
              <figure class="faceFig">
                <img class="faceImg" src="../pictures/faceType/1.jpg" alt="face1">
                <figcaption> 1 </figcaption>
              </figure>
            </label>

        <!-- 2 -->
        <input class="faceInput" type="radio" name="face" id="face2" value="face2">
            <label class = "faceLabel" for="face2">
              <figure class="faceFig">
                <img class="faceImg" src="../pictures/faceType/2.jpg" alt="face2">
                <figcaption> 2 </figcaption>
              </figure>
            </label>

        <!-- 3 -->
        <input class="faceInput" type="radio" name="face" id="face3" value="face3">
        <label class = "faceLabel" for="face3">
          <figure class="faceFig">
            <img class="faceImg" src="../pictures/faceType/3.jpg" alt="face3">
            <figcaption> 3 </figcaption>
          </figure>
        </label>

        <!-- 4 -->
        <input class="faceInput" type="radio" name="face" id="face4" value="face4">
            <label class = "faceLabel" for="face4">
              <figure class="faceFig">
                <img class="faceImg" src="../pictures/faceType/4.jpg" alt="face4">
                <figcaption> 4 </figcaption>
              </figure>
            </label>

        <!-- 5 -->
        <input class="faceInput" type="radio" name="face" id="face5" value="face5">
        <label class = "faceLabel" for="face5">
          <figure class="faceFig">
            <img class="faceImg" src="../pictures/faceType/5.jpg" alt="face5">
            <figcaption> 5 </figcaption>
          </figure>
        </label>

        <!-- 6 -->
        <input class="faceInput" type="radio" name="face" id="face6" value="face6">
            <label class = "faceLabel" for="face6">
              <figure class="faceFig">
                <img class="faceImg" src="../pictures/faceType/6.jpg" alt="face6">
                <figcaption> 6 </figcaption>
              </figure>
            </label>

      </div>

      <br><br>

        <!--      EYES      -->

        <div>
            <div class="titleEyes">
              <label for="eyesColor">Eyes color</label>
            </div>
          <br><br>
            <!--  Black  -->
            <input class="eyesInput" type="radio" name="eyesColor" id="blackEyes" value="blackEyes">
            <label class = "eyesLabel" for="blackEyes">
              <figure>
                <img class="eyes" src="../pictures/eyesColor/black.jpg" alt="blackEyes">
                <figcaption> Black </figcaption>
              </figure>
            </label>
            
            <!--  Baby Blue  -->
            <input class="eyesInput" type="radio" name="eyesColor" id="babyBlueEyes" value="babyBlueEyes">
            <label class = "eyesLabel" for="babyBlueEyes">
              <figure>
                <img class="eyes" src="../pictures/eyesColor/babyblue.jpg" alt="babyBlueEyes">
                <figcaption> Baby Blue </figcaption>
              </figure>
            </label>
            
            <!--  Brown  -->
            <input class="eyesInput" type="radio" name="eyesColor" id="brownEyes" value="brownEyes">
            <label class = "eyesLabel" for="brownEyes">
              <figure>
                  <img class="eyes" src="../pictures/eyesColor/brown.jpg" alt="brownEyes">
                  <figcaption> Brown </figcaption>
              </figure>
            </label>

            <!--  Cinnamon  -->
            <input class="eyesInput" type="radio" name="eyesColor" id="cinnamonEyes" value="cinnamonEyes">
            <label class = "eyesLabel" for="cinnamonEyes">
              <figure>
                <img class="eyes" src="../pictures/eyesColor/cinnamon.jpg" alt="cinnamonEyes">
                <figcaption> Cinnamon </figcaption>
              </figure>
            </label>

            <!--  Green  -->
            <input class="eyesInput" type="radio" name="eyesColor" id="greenEyes" value="greenEyes">
            <label class = "eyesLabel" for="greenEyes">
              <figure>
                <img class="eyes" src="../pictures/eyesColor/green.jpg" alt="greenEyes">
                <figcaption> Green </figcaption>
              </figure>
            </label>

            <!--  Grey  -->
            <input class="eyesInput" type="radio" name="eyesColor" id="greyEyes" value="greyEyes">
            <label class = "eyesLabel" for="greyEyes">
              <figure>
                <img class="eyes" src="../pictures/eyesColor/grey.jpg" alt="greyEyes">
                <figcaption> Grey </figcaption>
              </figure>
            </label>

            <!--  Sapphire  -->
            <input class="eyesInput" type="radio" name="eyesColor" id="sapphireEyes" value="sapphireEyes">
            <label class = "eyesLabel" for="sapphireEyes">
              <figure>
                <img class="eyes" src="../pictures/eyesColor/sapphire.jpg" alt="sapphireEyes">
                <figcaption> Sapphire </figcaption>
              </figure>
            </label>
          
        </div>

        <br><br>
        <br><br>

        <input type="submit" value="Submit" name='submitBtn' >
        <br>
        <br>
        <?php include('../alte_chestii/errors.php')?>

      </form>

    </section>

    <footer>
    <p>MASS, Copyright &copy, 2021</p>
  </footer>
  </body>


</html>