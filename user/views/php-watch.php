<?php
//require_once 'user/controllers/authController.php';

include("connection.php");
session_start();
$con = dbconnection();


$query_video_user_view = "SELECT * FROM videos";
$result = mysqli_query($con,$query_video_user_view);


if(isset($_GET['id'])){
  $video_id = $_GET['id'];
  $query_video_user_view = "SELECT name FROM videos WHERE id=$video_id";
  mysqli_query($con, $query_video_user_view);
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
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
              PHP Course
            </h1>
            <h2 class="subtitle">
              Medium subtitle
            </h2>
          </div>
        </div>
    </section><br>
    <!-- section header end -->

<!-- tiles start -->
    <div class="tile is-ancestor">

    <div class="tile is-parent">
      <article class="tile is-child notification is-success">
        <div class="content">
          <p class="title">Video Tutorials</p>
          <p class="subtitle">With even more content</p>
          <div class="content">
            <!-- Video View code Start -->
            <!-- <table class="table is-fullwidth">

            	<thead>
            		<tr>
            			<th>Video Name</th>
            		</tr>
            	</thead>

            	<tbody>


            	</tbody>
            </table> -->
            <?php
            $con = dbconnection();
            if(isset($_GET['id'])){
              $video_id = $_GET['id'];
              $query_video_user_view = "SELECT * FROM videos WHERE id=$video_id";
              $result = mysqli_query($con,$query_video_user_view);
              while ($row = $result->fetch_assoc()) {
                $name = $row['name'];
              }
              echo "Your are watchimg ".$name."<br>";
              //echo "<embed src='$name' width='560' height='315'></embed>";
              echo "<video width='640x480' controls><source src='http://localhost/php-mini-project/admin/controllers/videos/".$name."' type='video/mp4'></video>";
            }

            ?>

            <!-- Video View code End -->
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
