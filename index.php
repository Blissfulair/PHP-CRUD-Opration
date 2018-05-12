<?php require 'header.php'; ?>
<div class="container">
  <div class="card">
    <div class="card-header">
  <h1>Todo-List-App</h1>
</div>
<div class="card-body">
  <table class="table table-bordered">
    <tr>
      <th>ID</th>
      <th>Task</th>
      <th>Date</th>
      <th>Time</th>
    </tr>
  <?php
  $query = "SELECT * FROM todo";
  $result = mysqli_query($con, $query);
  $num = mysqli_num_rows($result);
   for($i = 1; $i <= $num; $i++):
    $row = mysqli_fetch_assoc($result);
   ?>
   <tr>
     <td><?= $i; ?></td>
     <td><?= $row['task']; ?></td>
     <td><?= $row['date']; ?></td>
     <td><?= $row['time']; ?>&nbsp; <a class="btn btn-info" href="edit.php?id=<?= $row['id']; ?>">Edit</a>&nbsp; <a class="btn btn-danger" onclick=" return confirm('Are you sure you want to delete this?')" href="delete.php?id=<?= $row['id']; ?>">Delete</a></td>
   </tr>
 <?php endfor; ?>
 </div>
 </div>
</div>
<?php require 'footer.php'; ?>
