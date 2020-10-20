<?php
	require_once 'user/controllers/authController.php';

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
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
          <!-- <div class="navbar-start">
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
                <a class="navbar-item" href="php-intro.php">
                  PHP
                </a>

              </div>
            </div>
          </div> -->

          <div class="navbar-end">
            <div class="navbar-item">
              <a class="navbar-item">
                Report an issue
              </a>

              <div class="buttons">

                <a class="button is-primary" href="signup.php">
                  <strong>Sign up</strong>
                </a>

                <?php if(isset($_SESSION['firstname'])):?>
                  <a class="button is-light" href="index.php?logout=1">
                    <strong>Log Out - <?php echo $_SESSION['firstname']; ?></strong>
                  </a>
                <?php else:?>
                  <a class="button is-light" href="login.php">
                    <strong>Log In</strong>
                </a>
                <?php endif; ?>

              </div>
            </div>
          </div>
        </div>
      </nav><br>
      <!-- Navigation bar end -->
    </div>
