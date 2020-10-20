<?php

//include 'config.php';
include("connection.php");
session_start();
$con = dbconnection();
$con = mysqli_connect(DBHOST,DBUSER, DBPASS , DBNAME);

$name = "";
$edit_video_state = false;


// $query_video_view = "SELECT * FROM videos";
// $result = mysqli_query($con,$query_video_view);

//Delete Records
if(isset($_GET['delete'])){
  $video_id = $_GET['delete'];
  $query_video_delete = "DELETE FROM videos WHERE id=$video_id";
  mysqli_query($con,$query_video_delete);
  header('location:video-view.php');

  //$query_video_delete->query("DELETE FROM videos WHERE id=$video_id") or die($query_video_delete->error());
}

//Update Recodes
if(isset($_POST['after_edit'])){
  $name = mysqli_real_escape_string($con, $_POST['video_edit']);
  $video_id = mysqli_real_escape_string($con, $_POST['video_id']);

  $query_video_edit = "UPDATE videos SET name='$name' WHERE id=$video_id";

  mysqli_query($con, $query_video_edit);
  $_SESSION['session_message_succes'] = "Video name has been Updated";
  header('location:video-edit.php');
}

//Watch Video
if(isset($_GET['id'])){
  $video_id = $_GET['id'];
  $query_video_user_view = "SELECT * FROM videos WHERE id=$video_id";
  mysqli_query($con, $query_video_user_view);
}
