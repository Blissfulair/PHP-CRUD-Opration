<?php require 'header.php'; ?>
<?php
 include_once 'db-inc.php';
 if(isset($_GET['id'])){ $id = $_GET['id'];
   $query = "SELECT * FROM todo WHERE id='$id'";
   $sql = mysqli_query($con, $query);
   $row = mysqli_fetch_assoc($sql);
   $task = $row['task'];
   $date = $row['date'];
   $time = $row['time'];
if (isset($_POST['task']) && isset($_POST['date']) && isset($_POST['time'])) {
  $task = $_POST['task'];
  $date = $_POST['date'];
  $time = $_POST['time'];
     $query = "UPDATE  todo SET task='$task', date='$date', time='$time' WHERE id='$id';";
     $sql = mysqli_query($con, $query);
     header('Location: index.php');
 }
 }
?>
<div class="container mt-5">
  <form method="post">
    <div class="form-group">
      <label for="task">Task:</label>
      <input type="text" value="<?= $task?>" class="form-control" name="task">
    </div>
    <div class="form-group">
      <label for="date">Date:</label>
      <input type="date" value="<?= $date?>" class="form-control" name="date">
    </div>
    <div class="form-group">
      <label for="time">Time:</label>
      <input type="time" value="<?= $time?>" class="form-control" name="time">
    </div>
    <div class="form-group">
      <input type="submit" value="Save" class="btn btn-success">
    </div>
  </form>
</div>
<?php require 'footer.php'; ?>
