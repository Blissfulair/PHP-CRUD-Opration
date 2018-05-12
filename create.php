<?php require 'header.php'; ?>
<?php
 include_once 'db-inc.php';
 if (isset($_POST['task']) && isset($_POST['date']) && isset($_POST['time'])) {
   $task = $_POST['task'];
   $date = $_POST['date'];
   $time = $_POST['time'];
   if(empty($task) || empty($date) || empty($time)){
     header('Location: index.php');
     return;
   }else{

     $query = "INSERT INTO todo(task, date, time) VALUES('$task', '$date', '$time');";
     $sql = mysqli_query($con, $query);
     header('Location: index.php');
   }
 }

?>
<div class="container">
    <div class="card  mt-5">
      <div class="card-header">
    <h1>Create a task</h1>
  </div>
  <div class="card-body">
  <form method="post">
    <div class="form-group">
      <label for="task">Task:</label>
      <input type="text" class="form-control" name="task">
    </div>
    <div class="form-group">
      <label for="date">Date:</label>
      <input type="date" class="form-control" name="date">
    </div>
    <div class="form-group">
      <label for="time">Time:</label>
      <input type="time" class="form-control" name="time">
    </div>
    <div class="form-group">
      <input type="submit" value="Save" class="btn btn-success">
    </div>
  </form>
</div>
</div>
</div>
<?php require 'footer.php'; ?>
