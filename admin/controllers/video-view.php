<?php

include("connection.php");

$con = dbconnection();

$query_video_view = "SELECT * FROM videos";
$result = mysqli_query($con,$query_video_view);

// if(isset($_GET['delete'])){
//   $video_id = $_GET['delete'];
//   $query_video_delete = "DELETE FROM videos WHERE id=$video_id";
//   $result = mysqli_query($con,$query_video_delete);
//
//   //$query_video_delete->query("DELETE FROM videos WHERE id=$video_id") or die($query_video_delete->error());
// }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard - Vide View</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script> -->
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>

<body>
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
          <a class="is-active" href="http://localhost/php-mini-project/admin/views/dashboard.php">
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
          <a href="#" aria-current="page">Video Manage</a>
        </li>
      </ul>
    </nav>
    <div class="level">
      <div class="level-left">
        <div class="level-item">
          <div class="title has-text-info">
            <i class="fa fa-tachometer"></i> Video Manage
          </div>
        </div>
      </div>
    </div>

<!-- Video View code Start -->
<table class="table is-fullwidth">

	<thead>
		<tr>
			<th><abbr title="Video ID">ID</abbr></th>
			<th>Name</th>
      <th>Action</th>
		</tr>
	</thead>

	<tbody>

      <?php
        while ($row = $result->fetch_assoc()): ?>
          <tr>
            <th><?php echo $row['id']; ?></th>
            <td><?php echo $row['name']; ?></td>
            <td>
              <a href="http://localhost/php-mini-project/admin/controllers/video-edit.php" class="button is-warning" type="submit" name="submit_video">Edit</a>
              <a href="videoController.php?delete=<?php echo $row['id']; ?>" class="button is-danger" name="delete">Delete</a>
            </td>
          </tr>
        <?php endwhile; ?>
	</tbody>
</table>
<!-- Video View code End -->
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
