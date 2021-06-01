<?php include('../PHP/get_info_skincare.php')?>
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
    <link rel="stylesheet" href="../CSS/skincare.css">
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

      <form class="skinCare" id="skinCareReg" action="skincare.php" method="POST">
        
        <div class="another_container">
          <div class="question">
            <label for="question1">Which best describes your pores?</label>
          </div>

          <br>

          <div class="answers"> 
            <input class="qInput" type="radio" name="q1" id="answer11" value="1">
            <label class = "qLabel" for="answer11"> Medium size all over</label>
            <br>
            <input class="qInput" type="radio" name="q1" id="answer12"  value="2">
            <label class = "qLabel" for="answer12">Large and visible all over</label>
            <br>
            <input class="qInput" type="radio" name="q1" id="answer13"  value="3">
            <label class = "qLabel" for="answer13">Small and not visible</label>
            <br>
            <input class="qInput" type="radio" name="q1" id="answer14" value="4">
            <label class = "qLabel" for="answer14"> Large or medium size and only visible in T zone</label>
          </div>
        </div>

        <div class="another_container">
          <div class="question">
            <label for="question2">What is your #1 skin concern?</label>
          </div>

          <br>

          <div class="answers"> 
            <input class="qInput" type="radio" name="q2" id="answer21" value="1">
            <label class = "qLabel" for="answer21"> Acnee </label>
            <br>
            <input class="qInput" type="radio" name="q2" id="answer22" value="2">
            <label class = "qLabel" for="answer22"> Dryness/Hydration </label>
            <br>
            <input class="qInput" type="radio" name="q2" id="answer23" value="3">
            <label class = "qLabel" for="answer23"> Oil Control/Pores</label>
            <br>
            <input class="qInput" type="radio" name="q2" id="answer24" value="4">
            <label class = "qLabel" for="answer24"> None of the above </label>
          </div>
        </div>

        <div class="another_container">
          <div class="question">
            <label for="question3"> How would you describe your skins shine? </label>
          </div>

          <br>

          <div class="answers"> 
            <input class="qInput" type="radio" name="q3" id="answer31"  value="1">
            <label class = "qLabel" for="answer31"> My skin is radient </label>
            <br>
            <input class="qInput" type="radio" name="q3" id="answer32"  value="2">
            <label class = "qLabel" for="answer32"> Bright like a diamond </label>
            <br>
            <input class="qInput" type="radio" name="q3" id="answer33"  value="3">
            <label class = "qLabel" for="answer33"> Dull everywhere </label>
            <br>
            <input class="qInput" type="radio" name="q3" id="answer34"  value="4" >
            <label class = "qLabel" for="answer34"> Only in the T zone</label>
          </div>
        </div>

        <div class="another_container">
          <div class="question">
            <label for="question4"> What do you deel when you touch your skin? </label>
          </div>

          <br>

          <div class="answers"> 
            <input class="qInput" type="radio" name="q4" id="answer41"  value="1">
            <label class = "qLabel" for="answer41">  Only in some places dry in others </label>
            <br>
            <input class="qInput" type="radio" name="q4" id="answer42"  value="2">
            <label class = "qLabel" for="answer42"> Rough and scaly </label>
            <br>
            <input class="qInput" type="radio" name="q4" id="answer43"  value="3">
            <label class = "qLabel" for="answer43"> Healty and smooth </label>
            <br>
            <input class="qInput" type="radio" name="q4" id="answer44"  value="4">
            <label class = "qLabel" for="answer44"> Slick and greasy </label>
          </div>
        </div>

        <div class="another_container">
          <div class="question">
            <label for="question5"> What does your skin need most in the afternoons? </label>
          </div>

          <br>

          <div class="answers"> 
            <input class="qInput" type="radio" name="q5" id="answer51"  value="1">
            <label class = "qLabel" for="answer51"> Blotting paper or powder all over </label>
            <br>
            <input class="qInput" type="radio" name="q5" id="answer52"  value="2">
            <label class = "qLabel" for="answer52"> Blotting paper or powder only on your forehead, nose, and/or chin </label>
            <br>
            <input class="qInput" type="radio" name="q5" id="answer53"  value="3">
            <label class = "qLabel" for="answer53"> Moisture </label>
            <br>
            <input class="qInput" type="radio" name="q5" id="answer54"  value="4">
            <label class = "qLabel" for="answer54"> None of the above </label>
          </div>
        </div>

        <div class="another_container">
          <div class="question">
            <label for="question6"> How does your skin feel after you wash your face? </label>
          </div>

          <br>

          <div class="answers"> 
            <input class="qInput" type="radio" name="q6" id="answer61"  value="1">
            <label class = "qLabel" for="answer61"> Clean until the oil soon returns </label>
            <br>
            <input class="qInput" type="radio" name="q6" id="answer62"  value="2">
            <label class = "qLabel" for="answer62">Itchy and a bit dry</label>
            <br>
            <input class="qInput" type="radio" name="q6" id="answer63"  value="3">
            <label class = "qLabel" for="answer63">Clean, healthy and even</label>
            <br>
            <input class="qInput" type="radio" name="q6" id="answer64"  value="4">
            <label class = "qLabel" for="answer64"> Clean in the T zone but dry on the cheeks</label>
          </div>
        </div>

        <div class="another_container">
          <div class="question">
            <label for="question7"> Which best describes your skins relationship with pimples & blackheads? </label>
          </div>

          <br>

          <div class="answers"> 
            <input class="qInput" type="radio" name="q7" id="answer71"  value="1">
            <label class = "qLabel" for="answer71"> I have more flakiness and tightness that I do pimples and blackheads? </label>
            <br>
            <input class="qInput" type="radio" name="q7" id="answer72"  value="2">
            <label class = "qLabel" for="answer72">They love me</label>
            <br>
            <input class="qInput" type="radio" name="q7" id="answer73"  value="3">
            <label class = "qLabel" for="answer73">Only on my T zone my cheeks are clear as day</label>
            <br>
            <input class="qInput" type="radio" name="q7" id="answer74"  value="4">
            <label class = "qLabel" for="answer74"> Pimples and blackheads? Never heard of them</label>
          </div>
        </div>

        <input type="submit" value="Submit" name='submitBtn'>

      </form>


      

    </section>

    <footer><p>MASS, Copyright &copy, 2021</p></footer>
  </body>
</html>