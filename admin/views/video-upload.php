
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>

<body>
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
                <!-- <hr class="navbar-divider">
                <a class="navbar-item">
                  Report an issue
                </a> -->
              </div>
            </div>
          </div>

<!-- Navbar ending -->
          <div class="navbar-end">
            <div class="navbar-item">
              <a class="navbar-item">
                Report an issue
              </a>
            </div>
            <!-- Navbar Avatar Start -->
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">
                <figure class="image is-32x32" style="margin-right:.5em">
                  <img src="#">
                </figure>Admin
              </a>
              <div class="navbar-dropdown is-right">
                <a class="navbar-item">
                  <span class="icon is-small">
                      <i class="fa fa-user-o"></i>
                  </span>&nbsp; Profile
                </a>
                <hr class="navbar-divider">
                <a class="navbar-item">
                  <span class="icon is-small">
                    <i class="fa fa-power-off"></i>
                  </span>&nbsp; Logout
                </a>
              </div>
            </div>
            <!-- Navbar Avatar Start -->
          </div>
<!-- Navbar ending -->
        </div>
      </nav><br>
      <!-- Navigation bar end -->

      <!-- section header start -->
      <section class="hero is-primary is-smaill">
        <div class="hero-body">
          <div class="container">
            <h1 class="title">
              Medium title
            </h1>
            <h2 class="subtitle">
              Medium subtitle
            </h2>
          </div>
        </div>
    </section><br>
    <!-- section header end -->

<!-- Dashboard Start -->
<div class="columns">
  <aside class="column is-2 aside">
    <nav class="menu">
      <p class="menu-label">General</p>
      <ul class="menu-list">
        <li>
          <a class="is-active" href="#">
            <span class="icon is-small">

            </span> Dashboard
          </a>
        </li>
      </ul>
      <p class="menu-label">Administration</p>
      <ul class="menu-list">
        <li>
          <a href="#">
            <span class="icon is-small">
              <i class="fa fa-pencil-square-o"></i>
            </span> Forms
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon is-small">
              <i class="fa fa-desktop"></i>
            </span> UI Elements
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon is-small">
              <i class="fa fa-table"></i>
            </span> Tables
          </a>
        </li>
        <li>
          <a href="/bulma-admin-dashboard-template/presentations.html">
            <span class="icon is-small">
              <i class="fa fa-bar-chart"></i>
            </span> Presentations
          </a>
        </li>
      </ul>
      <p class="menu-label">Live On</p>
      <ul class="menu-list">
        <li>
          <a>
            <span class="icon is-small">
              <i class="fa fa-bug"></i>
            </span> Additional Pages
          </a>
        </li>
        <li>
          <a>
            <span class="icon is-small">
              <i class="fa fa-windows"></i>
            </span> Extras
          </a>
        </li>
        <li>
          <a>
            <span class="icon is-small">
              <i class="fa fa-laptop"></i>
            </span> Landing Page
          </a>
        </li>
      </ul>
    </nav>
  </aside>
  <main class="column main" style="height: auto !important;">
    <nav class="breadcrumb is-small" aria-label="breadcrumbs">
      <ul>
        <li>
          <a href="#">Home</a>
        </li>
        <li class="is-active">
          <a href="#" aria-current="page">Video Upload</a>
        </li>
      </ul>
    </nav>
    <div class="level">
      <div class="level-left">
        <div class="level-item">
          <div class="title has-text-info">
            <i class="fa fa-tachometer"></i> Video Upload
          </div>
        </div>
      </div>
    </div>
<!-- Video Upload code Start -->
<form class="" action="video-upload.php" method="post" enctype="multipart/form-data">
  <div class="field is-grouped">
    <p class="control is-expanded">
      <input class="input" type="file" name="file" placeholder="Video Upload">
    </p>
    <p class="control">
      <div class="buttons">
        <button class="button is-success" type="submit" name="submit_video">Save changes</button>
        <button class="button is-danger">Cancel</button>
      </div>
    </p>
  </div>
</form>

<?php
if(isset($_POST['submit_video'])){
  echo "<br>".$filename." has been uploaded.";

}

?>
<!-- Video Upload code End -->
  </main>
</div>
<!-- Dashboard End -->




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
</html>
