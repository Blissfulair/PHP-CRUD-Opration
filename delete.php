<?php
include_once 'db-inc.php';
if(isset($_GET['id'])){
$id = $_GET['id'];
$query = "DELETE FROM todo WHERE id = '$id'";
$delete = mysqli_query($con, $query);
  }
  header('Location: index.php');
