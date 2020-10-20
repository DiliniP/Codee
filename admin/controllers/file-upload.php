<?php

include("connection.php");
session_start();
$con = dbconnection();

if(isset($_POST['submit_file'])){
   $filCategoryName = $_POST['category_name'];
   $fileDescription = $_POST['file_description'];
   $maxsize = 5242880; // 5MB

   $name = $_FILES['file']['name'];
   $target_dir = "pdf/";
   $target_file = $target_dir . $_FILES["file"]["name"];

   // Select file type
   $pdfFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

   // Valid file extensions
   $extensions_arr = array("pdf");

   // Check extension
   if( in_array($pdfFileType,$extensions_arr) ){

      // Check file size
      if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
        echo "File too large. File must be less than 5MB.";
      }else{
        // Upload
        if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
          // Insert record
          $query = "INSERT INTO tutorial_pdfs(categoryname,filename,description,location) VALUES('".$filCategoryName."','".$name."','".$fileDescription."','".$target_file."')";

          mysqli_query($con,$query);
          // echo "Upload successfully.";
          $_SESSION['session_message_succes'] = $name." has been Uploded";
        }
      }

   }else{
     // echo "faild";
     $_SESSION['session_message_failed'] = "Failed";
   }

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
              Files Upload Section
            </h1>
            <h2 class="subtitle">
              Upload PDF and DOC
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
          <a href="#" aria-current="page">Files Upload</a>
        </li>
      </ul>
    </nav>
    <div class="level">
      <div class="level-left">
        <div class="level-item">
          <div class="title has-text-info">
            <i class="fa fa-tachometer"></i> Files Upload
          </div>
        </div>
      </div>
    </div>
<!-- File Upload code Start -->
<form class="" action="file-upload.php" method="post" enctype="multipart/form-data">
  <div class="field">
    <label class="label">Category Name</label>
    <div class="control">
      <input class="input" type="text" name="category_name" placeholder="Category Name">
    </div>
  </div>

  <div class="field">
    <label class="label">File Name</label>
    <div class="control">
      <input class="input" type="file" name="file" placeholder="File Upload">
    </div>
  </div>

  <div class="field">
    <label class="label">Description</label>
    <div class="control">
      <textarea class="textarea" name="file_description" placeholder="Description"></textarea>
    </div>
  </div>

  <div class="field is-grouped">
    <div class="buttons">
      <button id="submit_file" class="button is-success" type="submit" name="submit_file">Save changes</button>
      <button class="button is-danger">Cancel</button>
    </div>
  </div>
</form><br>
<!-- File Upload code End -->

<!-- File upload succes message Start -->
<?php if(isset($_SESSION['session_message_succes'])): ?>
  <article class="message is-success">
    <div class="message-header">
      <p>Successfully Uploaded</p>
      <button class="delete" aria-label="delete"></button>
    </div>
    <div class="message-body">
      <?php
            echo $_SESSION['session_message_succes'];
            unset($_SESSION['session_message_succes']);
      ?>
    </div>
  </article>
<?php endif ?>
<!-- Video upload succes message End -->

<!-- Video upload faild message Start -->
<?php if(isset($_SESSION['session_message_failed'])): ?>
  <article class="message is-danger">
    <div class="message-header">
      <p>Error while Uploading</p>
      <button class="delete" aria-label="delete"></button>
    </div>
    <div class="message-body">
      <?php
            echo $_SESSION['session_message_failed'];
            unset($_SESSION['session_message_failed']);
      ?>
    </div>
  </article>
<?php endif ?>
<!-- Video upload faild message End -->
<a href="http://localhost/php-mini-project/admin/controllers/file-view.php" class="button is-primary is-rounded is-pulled-right">View Uploaded Files</a>

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
