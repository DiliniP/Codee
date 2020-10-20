<?php

include("connection.php");

$con = dbconnection();

$query_file_view = "SELECT * FROM tutorial_pdfs";
$result = mysqli_query($con,$query_file_view);

$edit_file_state = false;
$file_id = 0;
$name = "";
$filCategoryName = $record['categoryname'];
$name = $record['filename'];
$fileDescription = $record['description'];
$file_id= $record['id'];

if(isset($_GET['edit'])){
  $file_id = $_GET['edit'];
  $query_file_edit = mysqli_query($con,"SELECT * FROM tutorial_pdfs WHERE id=$file_id");
  $record = mysqli_fetch_array($query_file_edit);
  $filCategoryName = $record['categoryname'];
  $name = $record['filename'];
  $fileDescription = $record['description'];
  $file_id= $record['id'];


  //$query_video_delete->query("DELETE FROM videos WHERE id=$video_id") or die($query_video_delete->error());
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
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
          <a href="#" aria-current="page">Files Edit</a>
        </li>
      </ul>
    </nav>
    <div class="level">
      <div class="level-left">
        <div class="level-item">
          <div class="title has-text-info">
            <i class="fa fa-tachometer"></i> Files Edit
          </div>
        </div>
      </div>
    </div>

<!-- Video View code Start -->
<form class="" action="fileController.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="file_id" value="<?php echo $file_id; ?>">

  <div class="field">
    <label class="label">Category Name</label>
    <div class="control">
      <input class="input" type="text" name="file_edit_category" value="<?php echo $filCategoryName; ?>">
    </div>
  </div>

  <div class="field">
    <label class="label">File Name</label>
    <div class="control">
      <input class="input" type="file" name="file_edit_name" value="<?php echo $name; ?>">
    </div>
  </div>

  <div class="field">
    <label class="label">Description</label>
    <div class="control">
      <textarea class="textarea" name="file_edit_description" value="<?php echo $fileDescription; ?>"></textarea>
    </div>
  </div>

  <div class="field is-grouped">
    <p class="control">
      <div class="buttons">
          <button class="button is-success" type="submit" name="after_edit">Save changes</button>
          <button class="button is-danger">Cancel</button>
      </div>
    </p>
  </div>
</form>

<!-- Video edit succes message Start -->
<?php if(isset($_SESSION['session_message_succes'])): ?>
  <article class="message is-success">
    <div class="message-header">
      <p>
        <?php
            echo $_SESSION['session_message_succes'];
            unset($_SESSION['session_message_succes']);
        ?>
      </p>
      <button class="delete" aria-label="delete"></button>
    </div>
    <div class="message-body">

    </div>
  </article>
<?php endif ?>
<!-- Video edit succes message End -->

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
              <a href="video-edit.php?edit=<?php echo $row['id']; ?>" class="button is-warning" type="submit" name="submit_video">Edit</a>
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
