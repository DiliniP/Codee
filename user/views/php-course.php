<?php

include("connection.php");

$con = dbconnection();
$query_video_view = "SELECT * FROM videos";
$result = mysqli_query($con,$query_video_view);

$query_file_view = "SELECT * FROM tutorial_pdfs";
$resultfile = mysqli_query($con,$query_file_view);

if(!empty($_GET['file'])){
  $filename = basename($_GET['file']);
  $filepath = 'http://localhost/php-mini-project/admin/controllers/pdf/'.$filename;

  if(!empty($filename) && file_exists($filepath)){
    header('Cache-Control:public');
    header('Content-Description:FIle Transfer');
    header('Content-Disposition:attachment; filename=$filename');
    header('Content-Type:application/zip');
    header('Content-Transfer-Emcoding:binary');

    readfile($filepath);
    exit;
  }else {

  }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Course Page</title>
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
                <a class="button is-primary" href="sign-up.php">
                  <strong>Sign up</strong>
                </a>
                <a class="button is-light" href="sign-in.php">
                  Log in
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
              PHP Course
            </h1>
            <h2 class="subtitle">
              Medium subtitle
            </h2>
          </div>
        </div>
    </section><br>
    <!-- section header end -->

<!-- tiles video start -->
    <div class="tile is-ancestor">

    <div class="tile is-parent">
      <article class="tile is-child notification is-success">
        <div class="content">
          <p class="title">Video Tutorials</p>
          <p class="subtitle">With even more content</p>
          <div class="content">
            <!-- Video View code Start -->
            <table class="table is-fullwidth">

            	<thead>
            		<tr>
            			<th>Video Name</th>
                  <th>Action</th>
            		</tr>
            	</thead>

            	<tbody>
                <?php
                  while ($row = $result->fetch_assoc()): ?>
                    <tr>
                      <td><?php echo $row['name']; ?></td>
                      <td>
                        <a href="http://localhost/php-mini-project/user/views/php-watch.php?id=<?php echo $row['id']; ?>" class="button is-link" type="submit" name="watch_video">Watch Video</a>
                        <a href="#" class="button is-primary" name="youtube_video">Go to YouTube</a>
                        <?php
                        /*
                          <a href="php-watch.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a>
                          */
                         ?>

                      </td>
                    </tr>
                  <?php endwhile; ?>

            	</tbody>
            </table>
            <!-- Video View code End -->
          </div>
        </div>
      </article>
    </div>

</div>
<!-- tiles video end -->


<!-- tiles files start -->
    <div class="tile is-ancestor">

    <div class="tile is-parent">
      <article class="tile is-child notification is-success">
        <div class="content">
          <p class="title">PDF Tutorials</p>
          <p class="subtitle">With even more content</p>
          <div class="content">
            <!-- Video View code Start -->
            <table class="table is-fullwidth">

            	<thead>
            		<tr>
            			<th>File Name</th>
                  <th>Description</th>
                  <th>Action</th>
            		</tr>
            	</thead>

            	<tbody>
                <?php
                  while ($row = $resultfile->fetch_assoc()): ?>
                    <tr>
                      <td><?php echo $row['filename']; ?></td>
                      <td><?php echo $row['description']; ?></td>
                      <td>
                        <a href="http://localhost/php-mini-project/user/views/php-course.php?file=<?php echo $row['id']; ?>" class="button is-link" type="submit" name="watch_video">Download</a>
                        <?php
                        /*
                          <a href="php-watch.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a>
                          */
                         ?>

                      </td>
                    </tr>
                  <?php endwhile; ?>

            	</tbody>
            </table>
            <!-- Video View code End -->
          </div>
        </div>
      </article>
    </div>

</div>
<!-- tiles files end -->


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
