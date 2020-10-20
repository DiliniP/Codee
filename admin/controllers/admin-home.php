<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Home Page</title>
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
            <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
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
                <a class="navbar-item" href="http://localhost/php-mini-project/admin/views/dashboard.php">
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
                <a class="button is-primary" href="sign-in.php">
                  Admin Log In
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav><br>
      <!-- Navigation bar end -->

      <!-- section header start -->
      <section class="hero is-medium is-primary is-bold">
        <div class="hero-body">
          <div class="container">
            <h1 class="title">
              Primary bold title
            </h1>
            <h2 class="subtitle">
              Primary bold subtitle
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
              <a href="php-intro.php"><button class="button is-fullwidth is-link is-light">More Details</button></a>
            </article>
          </div>

          <div class="tile is-parent">
            <article class="tile is-child notification is-info">
              <p class="title">Middle tile</p>
              <p class="subtitle">With an image</p>
              <figure class="image is-4by3">
                <img src="https://bulma.io/images/placeholders/640x480.png">
              </figure><br>
              <button class="button is-fullwidth is-link is-light">Medium</button>
            </article>
          </div>
        </div>

        <div class="tile is-parent">
          <article class="tile is-child notification is-danger">
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
