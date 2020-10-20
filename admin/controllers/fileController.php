<?php

//include 'config.php';
include("connection.php");
session_start();
$con = dbconnection();
$con = mysqli_connect(DBHOST,DBUSER, DBPASS , DBNAME);

$name = "";
$edit_video_state = false;
$filCategoryName = $_POST['category_name'];
$fileDescription = $_POST['file_description'];


// $query_video_view = "SELECT * FROM videos";
// $result = mysqli_query($con,$query_video_view);

//Delete Records
if(isset($_GET['delete'])){
  $file_id = $_GET['delete'];
  $query_file_delete = "DELETE FROM tutorial_pdfs WHERE id=$file_id";
  mysqli_query($con,$query_file_delete);
  header('location:file-view.php');

  //$query_video_delete->query("DELETE FROM videos WHERE id=$video_id") or die($query_video_delete->error());
}

//Update Recodes
if(isset($_POST['after_edit'])){
  $filCategoryName = mysqli_real_escape_string($con, $_POST['file_edit_category']);
  $video_id = mysqli_real_escape_string($con, $_POST['video_id']);
  $name = mysqli_real_escape_string($con, $_POST['file_edit_name']);
  $fileDescription = mysqli_real_escape_string($con, $_POST['file_edit_description']);

  $query_file_edit = "UPDATE tutorial_pdfs SET categoryname='$filCategoryName',filename='$name',description='$fileDescription' WHERE id=$file_id";

  mysqli_query($con, $query_file_edit);
  $_SESSION['session_message_succes'] = "File has been Updated";
  header('location:file-edit.php');
}

//Watch Video
if(isset($_GET['id'])){
  $video_id = $_GET['id'];
  $query_video_user_view = "SELECT * FROM videos WHERE id=$video_id";
  mysqli_query($con, $query_video_user_view);
}
