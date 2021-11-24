<!doctype html>
<html lang="en">

<head>
  <!--Meta tags-->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!--favicon/page name-->
  <title>Portfolio | Joseph Whittle</title>
  <meta name=" description" content="Personal Portfolio represnting web development work by Joseph Whittle">
  <meta name="author" content="">
  <link rel="shortcut icon" href="./images/favicon-32x32-pink.png">

  <!--API's-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://kit.fontawesome.com/604f1ed31d.js" crossorigin="anonymous"></script>

  <!--Main jQuery import-->
  <script src="./js/jquery-3.6.0.js"></script>

  <!-- jquery plugins css inports -->

  <!--Stylesheets/links-->
  <link rel="stylesheet" href="./css/main.css">


</head>

<body>

  <div id="page-container">
    <!--Not sure this needs to be there-->

    <!--The side bar-->
    <nav class="nav-bar set-nav-bar">
      <span id="main-icon">
        <a href="./index.php">
          JW
        </a>
      </span>
      <ul id="main-list">
        <li>
          <a href="./pages/about-me.html">About Me</a>
        </li>
        <li>
          <a href="./index.php#project-area">My Portfolio</a>
        </li>
        <li>
          <a href="./pages/coding-examples.html">Coding Examples</a>
        </li>
        <li>
          <a href="./pages/scs-scheme.html">SCS Scheme</a>
        </li>
        <li>
          <a href="./index.php#contact-section" id="contact-me-btn-styling">Contact Me</a>
        </li>
      </ul>
      <ul id="social-icon-list">
        <li class="social-icon hover-background-github">
          <a href="https://github.com/JosephWhittle">
            <i class="fab fa-github-square"></i>
          </a>
        </li>
        <li class="social-icon hover-background-linkedin">
          <a href="https://www.linkedin.com/in/josephwhittle/">
            <i class="fab fa-linkedin"></i>
          </a>
        </li>
      </ul>
    </nav>



    <!--Fixed Burger Button-->
    <button type="button" class="burger-btn ">
      <span>
        <span class="bar1"></span>
        <span class="bar2"></span>
        <span class="bar3"></span>
      </span>
    </button>

    <!--The main section of the page-->
    <div id="main" class="set-main-page">


      <!--Landing Page-->
      <div class="landing-page">

        <!--Your js needs to inject and get the below part-->
        <h1 id="typewriter-hook-title">
        </h1>
        <h2 id="typewriter-hook-subtitle">
        </h2>


        <!--Scroll on the landing page-->
        <span class="scroll hover-image-highlight">
          <a href="#project-area">
            <span class="text">Scroll Down</span>
            <span class="arrow material-icons">arrow_downward</span>
          </a>
        </span>
      </div>

      <div class="horizontal-container">

        <!--Project cards-->
        <div id="project-area" class="vertical-margins horizontal-margins">
          <div class="card set-width-thirds set-width-half set-width-full">
            <div class="img-area hover-image-highlight">
              <img src="./images/Netmatters-preview.PNG" alt="Project Netmatters website preview image">
            </div>
            <div class="description-area">
              <h2>HTML/CSS Reflection</h2>
              <p>A from scratch recreated version of Netmatters company website, using sass/css/html/js.
              </p>
            </div>
            <div class="view-projects">
              <a href="https://netmatters.joseph-whittle.netmatters-scs.co.uk/">
                <span>
                  View Project
                </span>
                <span class="material-icons">arrow_forward</span>
              </a>
            </div>
          </div>
          <div class="card set-width-thirds set-width-half set-width-full">
            <div class="img-area hover-image-highlight">
              <img src="https://plchldr.co/i/1920x1040?&bg=E31B6D&fc=fff&text=Project-Image-Preview">
            </div>
            <div class="description-area">
              <h2>Project Title</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's.
              </p>
            </div>
            <div class="view-projects">
              <a href="">
                <span>
                  View Project
                </span>
                <span class="material-icons">arrow_forward</span>
              </a>
            </div>
          </div>
          <div class="card set-width-thirds set-width-half set-width-full">
            <div class="img-area hover-image-highlight">
              <img src="https://plchldr.co/i/1920x1040?&bg=E31B6D&fc=fff&text=Project-Image-Preview">
            </div>
            <div class="description-area">
              <h2>Project Title</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's.
              </p>
            </div>
            <div class="view-projects">
              <a href="">
                <span>
                  View Project
                </span>
                <span class="material-icons">arrow_forward</span>
              </a>
            </div>
          </div>
          <div class="card set-width-thirds set-width-half set-width-full">
            <div class="img-area hover-image-highlight">
              <img src="https://plchldr.co/i/1920x1040?&bg=E31B6D&fc=fff&text=Project-Image-Preview">
            </div>
            <div class="description-area">
              <h2>Project Title</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's.
              </p>
            </div>
            <div class="view-projects">
              <a href="">
                <span>
                  View Project
                </span>
                <span class="material-icons">arrow_forward</span>
              </a>
            </div>
          </div>
        </div>


        <!--The contact section-->
        <div id="contact-section" class="horizontal-margins">
          <div class="contact-info set-width-half-2">
            <h2>
              Get In Touch
            </h2>
            <p>Feel free to reach out if you have any questions or inquiries!
            </p>
            <?php

            $returnedUrl = "http://£_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            if (strpos($returnedUrl, "contactform=empty") == true) {
              echo "<span onclick='removeOnClick(this)' class='error-failure'>";
              echo "<p> Some fields are empty, please ensure all fields are filled in</p>";
              echo "</span>";
            }

            if (strpos($returnedUrl, "name=illegalCharacters") == true) {
              echo "<span onclick='removeOnClick(this)' class='error-failure'>";
              echo "<p>The name field contains illegal characters</p>";
              echo "</span>";
            }
            if (strpos($returnedUrl, "email=incorrectFormat") == true) {
              echo "<span onclick='removeOnClick(this)' class='error-failure'>";
              echo "<p>Please check the email field is a properly formated email address</p>";
              echo "</span>";
            }


            if (strpos($returnedUrl, "contact-form-submission=success") == true) {
              echo "<span onclick='removeOnClick(this)' class='error-success'>";
              echo "<p>Information submitted successfully!</p>";
              echo "</span>";
            }


            ?>
          </div>
          <form id="contactId" class="contact-form set-width-half-2" oninput="validateInput()" action="./inc/contact-form-functions.php" method="POST">
            <fieldset>
              <input id="firstName" placeholder="First Name" type="text" name="firstName">
              <input id="lastName" placeholder="Last Name" type="text" name="lastName">
            </fieldset>
            <fieldset>
              <input id="emailAddress" placeholder="Email Address" type="text" name="emailAddress">
            </fieldset>
            <fieldset>
              <input id="subject" placeholder="Subject" type="text" name="subject">
            </fieldset>
            <fieldset>
              <textarea id="message" class="message-box" placeholder="Message" type="text" name="message"></textarea>
            </fieldset>
            <button id="submitButton" class="btn" name="submit" type="submit" data-submit="...Sending">Submit</button>
            </fieldset>
          </form>
        </div>
      </div>

      <!--Scroll section at the bottom-->
      <div class="vertical-margins">
        <span class="scroll hover-image-highlight">
          <a href="#main">
            <span class="arrow material-icons">arrow_upward</span>
            <span class="text">Scroll Up</span>
          </a>
        </span>
      </div>
    </div>
  </div>


  <!--script tag javascript file imports below (Make sure jquery comes first if applicable) -->
  <script src="./app.js"></script>
  <script src="./js/typewriter-effect.js"></script>
  <script src="./js/contact-form-validation.js"></script>

</body>

</html>