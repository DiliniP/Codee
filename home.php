<?php
	require_once 'user/controllers/authController.php';
	// //verify if user not logged in
	if(!isset($_SESSION['firstname'])){
		header('location: login.php');
		exit();
	}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Codee</title>
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
            <a class="navbar-item" href="http://localhost/php-mini-project/home.php">
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
      <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-item">
                Report an issue
              </a>

              <div class="buttons">

              <a class="navbar-link">
                <figure class="image is-32x32" style="margin-right:.5em">
                  <img src="C:\xampp\htdocs\miniProject\images">
                </figure><?php echo $_SESSION['firstname']; ?>
              </a>

              <div class="navbar-dropdown is-right">
                <a class="navbar-item" href="userProfile.php">
                  <span class="icon is-small">
                      <i class="fa fa-user-o"></i>
                  </span>&nbsp; Profile 
                </a>


                <hr class="navbar-divider">
                <a class="navbar-item" href="index.php?logout=1">
                  <span class="icon is-small">
                    <i class="fa fa-power-off"></i>
                  </span>&nbsp; Logout
                </a>
          </div>
      </div>
            <!-- Navbar Avatar Start -->
      </nav><br>
      <!-- Navigation bar end -->

      <!-- section header start -->
      <section class="hero is-medium is-primary is-bold">
        <div class="hero-body">
          <div class="container">
            <h1 class="title">
              Codee - The Code Learning Platform
            </h1>
            <h2 class="subtitle">
              Learn with easy
            </h2>
          </div>
        </div>
    </section><br>
    <!-- section header end -->

    <!-- tiles start -->
    <div class="tile is-ancestor">
      <div class="tile is-vertical is-8">
        <div class="tile">
          <div class="tile is-parent ">
            <article class="tile is-child notification is-info">
              <p class="title">PHP Course</p>
              <p class="subtitle">learn with fun!</p>
              <figure class="image is-4by3">
                <img src="images/courses/php.png">
              </figure><br>
              <a href="http://localhost/php-mini-project/user/views/php-intro.php"><button class="button is-fullwidth is-link is-light">More Details</button></a>
            </article>
          </div>

          <div class="tile is-parent">
            <article class="tile is-child notification is-info">
              <p class="title">Java Course</p>
              <p class="subtitle">learn java</p>
              <figure class="image is-4by3">
                <img src="http://localhost/php-mini-project/images/courses/java-course.png">
              </figure><br>
              <button class="button is-fullwidth is-link is-light">More Details</button>
            </article>
          </div>
        </div>

        <div class="tile is-parent">
          <!-- <article class="tile is-child notification is-danger">
            <p class="title">Wide tile</p>
            <p class="subtitle">Aligned with the right tile</p>
            <div class="content">
              <!-- Content -->
            </div>
          </article>
        </div>
      </div>

      <div class="tile is-parent">
        <article class="tile is-child notification is-success">
          <div class="content">
            <p class="title">Tall tile</p>
            <p class="subtitle">With even more content</p>
            <div class="content">
              <!-- Content -->
            </div>
          </div>
        </article>
      </div>
    </div>
    <!-- tiles end -->
</body>
<br>
<footer class="footer">
        <div class="container">
            <div class="content has-text-centered">
                <p>
                    <a href="">
                        <i class="fab fa-facebook-square fa-2x"></i>
                    </a>
                    <a href="">
                        <i class="fab fa-twitter-square fa-2x"></i>
                    </a>
                    <a href="">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>
                    <a href="">
                        <i class="fab fa-snapchat fa-2x"></i>
                    </a>
                </p>
                <p>
                    <a href="https://bulma.io">
                        <img src="https://bulma.io/images/made-with-bulma.png" alt="Codee" width="128" height="24">
                    </a>
                </p>
            </div>
        </div>
    </footer>
        <script src="../js/bulma.js"></script>

</div>
<!-- Container End -->
</html>
