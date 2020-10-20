<?php
include("connection.php");
session_start();
$con = dbconnection();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Intro Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
<body>
<!-- Container Start -->
<div class="container is-fluid">
          <!-- Navigation bar start -->
          <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="https://#">
            <img src="http://localhost/php-mini-project/images/codee.png" width="112" height="28">
          </a>

          <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item" href="home.php">
              Home
            </a>

            <a class="navbar-item">
              Documentation
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">
                Courses
              </a>

              <div class="navbar-dropdown">
                <a class="navbar-item">
                  C
                </a>
                <a class="navbar-item">
                  Java
                </a>
                <a class="navbar-item" href="http://localhost/php-mini-project/user/views/php-intro.php">
                  PHP
                </a>
                <!-- <hr class="navbar-divider">
                <a class="navbar-item">
                  Report an issue
                </a> -->
              </div>
            </div>
          </div>

          <div class="navbar-end">
            <div class="navbar-item">
              <a class="navbar-item">
                Report an issue
              </a>
              <div class="buttons">
                <a class="button is-light" href="index.php?logout=1">
                  Log Out <?php echo $_SESSION['firstname']; ?>
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav><br>
      <!-- Navigation bar end -->

      <!-- section header start -->
      <section class="hero is-primary is-smaill">
        <div class="hero-body">
          <div class="container">
            <h1 class="title">
              PHP Course Introduction
            </h1>
            <h2 class="subtitle">
              Hypertext Preprocessor
            </h2>
            <div class="content">
              <p>The PHP Hypertext Preprocessor (PHP) is a programming language that allows web developers to create dynamic
                 content that interacts with databases. PHP is basically used for developing web based software applications.
                  This tutorial helps you to build your base with PHP.</p>
            </div>
          </div>
        </div>
    </section><br>
    <!-- section header end -->

    <!-- tiles start -->
    <div class="tile is-ancestor">

    <div class="tile is-parent is-8">
      <article class="tile is-child notification is-danger">
        <p class="title">Why to Learn PHP?</p>
        <!-- <p class="subtitle">With some content</p> -->
        <div class="content">
          <p>PHP started out as a small open source project that evolved as more and more people found out how useful it was.
            Rasmus Lerdorf unleashed the first version of PHP way back in 1994.<br><br>
            PHP is a MUST for students and working professionals to become a great Software Engineer specially when they are working
             in Web Development Domain. I will list down some of the key advantages of learning PHP:<br><br>
             <ol type="A">
               <li>PHP is a recursive acronym for "PHP: Hypertext Preprocessor".</li>
               <li>PHP is a server side scripting language that is embedded in HTML. It is used to manage dynamic content, databases, session tracking, even build entire e-commerce sites.</li>
               <li>It is integrated with a number of popular databases, including MySQL, PostgreSQL, Oracle, Sybase, Informix, and Microsoft SQL Server.</li>
             </ol>
           </p>
        </div>
      </article>
    </div>

    <div class="tile is-parent">
      <article class="tile is-child box">
        <p class="title">Learn Today</p>
        <p class="subtitle">With Us</p>
        <div class="content">
          <p>This PHP tutorial is designed for PHP programmers who are completely unaware of PHP concepts but they have basic understanding on computer programming.</p>
        </div>
        <a href="http://localhost/php-mini-project/user/views/php-course.php"><button class="button is-fullwidth is-info is-outlined">Enroll PHP Course</button></a>
      </article>
    </div>
  </div>
  <!-- tiles end -->





</body><br>






  <footer class="footer">
  <div class="content has-text-centered">
    <p>
      <strong>Bulma</strong> by <a href="https://jgthms.com">Jeremy Thomas</a>. The source code is licensed
      <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
      is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
    </p>
  </div>
</footer>

</div>
<!-- Container End -->

</html>
