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
    <link rel="stylesheet" href="./css/skinCare.css">
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
        <!--<h1>SKINCARE advice</h1>
        <p>COMING SOON</p>
        -->
      </div>

      <form class="skinCare" id="skinCareReg" action="">
        
        <div class="another_container">
          <div class="question">
            <label for="question1">Which best describes your pores?</label>
          </div>

          <br>

          <div class="answers"> 
            <input class="qInput" type="radio" name="question1" id="answer11">
            <label class = "qLabel" for="answer11"> Medium size all over</label>
            <br>
            <input class="qInput" type="radio" name="question1" id="answer12">
            <label class = "qLabel" for="answer12">Large and visible all over</label>
            <br>
            <input class="qInput" type="radio" name="question1" id="answer13">
            <label class = "qLabel" for="answer13">Small and not visible</label>
            <br>
            <input class="qInput" type="radio" name="question1" id="answer14">
            <label class = "qLabel" for="answer14"> Large or medium size and only visible in T zone</label>
          </div>
        </div>

        <div class="another_container">
          <div class="question">
            <label for="question2">What is your #1 skin concern?</label>
          </div>

          <br>

          <div class="answers"> 
            <input class="qInput" type="radio" name="question2" id="answer21">
            <label class = "qLabel" for="answer21"> Acnee </label>
            <br>
            <input class="qInput" type="radio" name="question2" id="answer22">
            <label class = "qLabel" for="answer22"> Dryness/Hydration </label>
            <br>
            <input class="qInput" type="radio" name="question2" id="answer23">
            <label class = "qLabel" for="answer23"> Oil Control/Pores</label>
            <br>
            <input class="qInput" type="radio" name="question2" id="answer24">
            <label class = "qLabel" for="answer24"> None of the above </label>
          </div>
        </div>

        <div class="another_container">
          <div class="question">
            <label for="question3"> How would you describe your skins shine? </label>
          </div>

          <br>

          <div class="answers"> 
            <input class="qInput" type="radio" name="question3" id="answer1">
            <label class = "qLabel" for="answer1"> My skin is radient </label>
            <br>
            <input class="qInput" type="radio" name="question3" id="answer2">
            <label class = "qLabel" for="answer2"> Bright like a diamond </label>
            <br>
            <input class="qInput" type="radio" name="question3" id="answer3">
            <label class = "qLabel" for="answer3"> Dull everywhere </label>
            <br>
            <input class="qInput" type="radio" name="question3" id="answer4">
            <label class = "qLabel" for="answer4"> Only in the T zone</label>
          </div>
        </div>

        <div class="another_container">
          <div class="question">
            <label for="question4"> What do you deel when you touch your skin? </label>
          </div>

          <br>

          <div class="answers"> 
            <input class="qInput" type="radio" name="question4" id="answer1">
            <label class = "qLabel" for="answer1">  Only in some places dry in others </label>
            <br>
            <input class="qInput" type="radio" name="question4" id="answer2">
            <label class = "qLabel" for="answer2"> Rough and scaly </label>
            <br>
            <input class="qInput" type="radio" name="question4" id="answer3">
            <label class = "qLabel" for="answer3"> Healty and smooth </label>
            <br>
            <input class="qInput" type="radio" name="question4" id="answer4">
            <label class = "qLabel" for="answer4"> Slick and greasy </label>
          </div>
        </div>

        <div class="another_container">
          <div class="question">
            <label for="question5"> What does your skin need most in the afternoons? </label>
          </div>

          <br>

          <div class="answers"> 
            <input class="qInput" type="radio" name="question5" id="answer1">
            <label class = "qLabel" for="answer1"> Blotting paper or powder all over </label>
            <br>
            <input class="qInput" type="radio" name="question5" id="answer2">
            <label class = "qLabel" for="answer2"> Blotting paper or powder only on your forehead, nose, and/or chin </label>
            <br>
            <input class="qInput" type="radio" name="question5" id="answer3">
            <label class = "qLabel" for="answer3"> Moisture </label>
            <br>
            <input class="qInput" type="radio" name="question5" id="answer4">
            <label class = "qLabel" for="answer4"> None of the above </label>
          </div>
        </div>

        <div class="another_container">
          <div class="question">
            <label for="question6"> How does your skin feel after you wash your face? </label>
          </div>

          <br>

          <div class="answers"> 
            <input class="qInput" type="radio" name="question6" id="answer1">
            <label class = "qLabel" for="answer1"> Clean until the oil soon returns </label>
            <br>
            <input class="qInput" type="radio" name="question6" id="answer2">
            <label class = "qLabel" for="answer2">Itchy and a bit dry</label>
            <br>
            <input class="qInput" type="radio" name="question6" id="answer3">
            <label class = "qLabel" for="answer3">Clean, healthy and even</label>
            <br>
            <input class="qInput" type="radio" name="question6" id="answer4">
            <label class = "qLabel" for="answer4"> Clean in the T zone but dry on the cheeks</label>
          </div>
        </div>

        <div class="another_container">
          <div class="question">
            <label for="question7"> Which best describes your skins relationship with pimples & blackheads? </label>
          </div>

          <br>

          <div class="answers"> 
            <input class="qInput" type="radio" name="question7" id="answer1">
            <label class = "qLabel" for="answer1"> I have more flakiness and tightness that I do pimples and blackheads? </label>
            <br>
            <input class="qInput" type="radio" name="question7" id="answer2">
            <label class = "qLabel" for="answer2">They love me</label>
            <br>
            <input class="qInput" type="radio" name="question7" id="answer3">
            <label class = "qLabel" for="answer3">Only on my T zone my cheeks are clear as day</label>
            <br>
            <input class="qInput" type="radio" name="question7" id="answer4">
            <label class = "qLabel" for="answer4"> Pimples and blackheads? Never heard of them</label>
          </div>
        </div>

      </form>


      

    </section>

    <footer>
    <p>MASS, Copyright &copy, 2021</p>
  </footer>
  </body>


</html>