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

<body class="">

  <div id="page-container">
    

  <div onclick="closeNavBar();" id="opacity-layer">
  </div>

    <!--The side bar-->
    <nav id="nav-bar-id" class="nav-bar set-nav-bar">
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
          <a  target="_blank" href="https://github.com/JosephWhittle">
            <i class="fab fa-github-square"></i>
          </a>
        </li>
        <li class="social-icon hover-background-linkedin">
          <a target="_blank" href="https://www.linkedin.com/in/josephwhittle/">
            <i class="fab fa-linkedin"></i>
          </a>
        </li>
      </ul>
    </nav>



    <!--Fixed Burger Button-->
    <button onclick="openNavBar();" id="mobile-button" type="button" class="burger-btn ">
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
        <span class="top-text" id="typewriter-hook-title">
        </span>
        <span class="bottom-text" id="typewriter-hook-subtitle">
        </span>

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
          <!--#HTML/CSS Project card  -->
          <div class="card set-width-thirds set-width-half set-width-full">
            <a href="https://netmatters.joseph-whittle.netmatters-scs.co.uk/">
              <div class="img-area hover-image-highlight">
                <img src="./images/Netmatters-preview.PNG" alt="Project Netmatters website preview image">
              </div>
            </a>
            <div class="description-area">
              <h2>Netmatters Site</h2>
              <p>A from scratch recreated version of Netmatters company website, using sass/css/html/js.
                <br class="line-fill">
                &nbsp;
                <br class="line-fill">
                &nbsp;
              </p>
            </div>
            <div class="tech-icons">
              <i class="fab fa-html5 i-html"></i>
              <i class="fab fa-css3-alt i-css"></i>
              <i class="fab fa-js i-js"></i>
              <i class="fab fa-php i-php"></i>
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
          <!--#endregion -->

          <!--#Image Linker card  -->
          <div class="card set-width-thirds set-width-half set-width-full">
            <a href="https://emage.joseph-whittle.netmatters-scs.co.uk/">
              <div class="img-area hover-image-highlight">
                <img src="./images/Image-linker.png" alt="A preview to the image linker application.">
              </div>
            </a>
            <div class="description-area">
              <h2>Emage</h2>
              <p>A Javascript driven website that allows the user to input a regex validated email address that can then have images assigned to it. These images are pulled from Lorem Picsum.
              </p>
            </div>
            <div class="tech-icons">
              <i class="fab fa-html5 i-html"></i>
              <i class="fab fa-css3-alt i-css"></i>
              <i class="fab fa-js i-js"></i>
            </div>
            <div class="view-projects">
              <a href="https://emage.joseph-whittle.netmatters-scs.co.uk/">
                <span>
                  View Project
                </span>
                <span class="material-icons">arrow_forward</span>
              </a>
            </div>
          </div>
          <!--#endregion -->


          <!--#Quality builders card  -->
          <div class="card set-width-thirds set-width-half set-width-full">
            <a href="https://qualitybuilders.joseph-whittle.netmatters-scs.co.uk/">
              <div class="img-area hover-image-highlight">
                <img src="./images/qualityBuilders-preview.PNG" alt="Preview of a site built for builders.">
              </div>
            </a>
            <div class="description-area">
              <h2>Quality builders</h2>
              <p>A project built with a fellow coursemate using HTML/CSS and JS for the contact form validation.
                <br class="line-fill">
                &nbsp;
                <br class="line-fill">
                &nbsp;
              </p>
            </div>
            <div class="tech-icons">
              <i class="fab fa-html5 i-html"></i>
              <i class="fab fa-css3-alt i-css"></i>
              <i class="fab fa-js i-js"></i>
            </div>
            <div class="view-projects">
              <a href="https://qualitybuilders.joseph-whittle.netmatters-scs.co.uk/">
                <span>
                  View Project
                </span>
                <span class="material-icons">arrow_forward</span>
              </a>
            </div>
          </div>
          <!--#endregion -->
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
              echo "Some fields are empty, please ensure all fields are filled in";
              echo "</span>";
            }

            if (strpos($returnedUrl, "name=illegalCharacters") == true) {
              echo "<span onclick='removeOnClick(this)' class='error-failure'>";
              echo "The name field contains illegal characters";
              echo "</span>";
            }
            if (strpos($returnedUrl, "email=incorrectFormat") == true) {
              echo "<span onclick='removeOnClick(this)' class='error-failure'>";
              echo "Please check the email field is a properly formated email address";
              echo "</span>";
            }

            if (strpos($returnedUrl, "contact-form-submission=success") == true) {
              echo "<span onclick='removeOnClick(this)' class='error-success'>";
              echo "Information submitted successfully!";
              echo "</span>";
            }


            ?>
          </div>
          <form id="contactId" class="contact-form set-width-half-2" oninput="validateInput()" action="./inc/contact-form-functions.php" method="POST">
            <fieldset>
              <input id="firstName" placeholder="First Name *" type="text" name="firstName">
              <i id="firstName-id" class="fas"></i>
              </fieldset>
              <fieldset>
              <input id="lastName" placeholder="Last Name *" type="text" name="lastName">
              <i id="lastName-id" class="fas"></i>
            </fieldset>
            <fieldset>
              <input id="emailAddress" placeholder="Email Address *" type="text" name="emailAddress">
              <i id="emailAddress-id" class="fas"></i>
            </fieldset>
            <fieldset>
              <input id="subject" placeholder="Subject *" type="text" name="subject">
              <i id="subject-id" class="fas"></i>
            </fieldset>
            <fieldset>
              <textarea id="message" class="message-box" placeholder="Message *" name="message"></textarea>
              <i id="message-id" class="fas"></i>
            </fieldset>
            <fieldset>
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
  <script src="./js/mobile-menu.js"></script>
  <script src="./js/typewriter-effect.js"></script>
  <script src="./js/contact-form-validation.js"></script>

</body>

</html>