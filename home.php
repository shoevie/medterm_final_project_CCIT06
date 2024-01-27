<?php include 'db_conn.php';?>
<?php include 'header.php';?>
<?php
session_start();
?>

<div class="box1">
<h2>Students Information</h2>
<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD STUDENTS</button>
<a href="logout.php" class="btn btn-info" type="button">Logout</a>
</div>
  <table class="table table-hover table-bordered table-striped" >
    <thead>
      <tr class="name">
        <th>ID</th>
        <th>Student Id</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Message</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>

      <?php

      $query = "SELECT * FROM `graduates`";

      $result = mysqli_query($conn, $query);

      if(!$result){
        die("query Failed".mysqli_error());
      }
      else{
        
        while($row = mysqli_fetch_assoc($result)){
        ?>

        <tr>
           <td><?php echo $row['id'];?></td>
           <td><?php echo $row['student_id'];?></td>
           <td><?php echo $row['first_name'];?></td>
           <td><?php echo $row['middle_name'];?></td>
           <td><?php echo $row['last_name'];?></td>
           <td><?php echo $row['gender'];?></td>
           <td><?php echo $row['message'];?></td>
           <td><a href="update_page.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a></td>
           <td><a href="delete_page.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
        </tr>
        <?php   
        }
      }
      ?>
    </tbody>
  </table>
  </div>

</body>
</html>


<?php
if (isset($_GET['insert_msg'])) {
  echo "<h6>".$_GET['insert_msg']."</h6>";
}
?>

<?php
if (isset($_GET['delete_msg'])) {
  echo "<h6>".$_GET['delete_msg']."</h6>";
}
?>

<?php
if (isset($_GET['update_msg'])) {
  echo "<h6>".$_GET['update_msg']."</h6>";
}
?>
<?php
if (isset($_GET['login_msg'])) {
  echo "<h6>".$_GET['login_msg']."</h6>";
}
?>

<form action="add_data.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">ADD STUDENTS</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <div class="form-group">
        <label for="student_id">Student Id</label>
        <input type="text" name="student_id" class="form-control">
      </div>
      <div class="form-group">
        <label for="fname">First Name</label>
        <input type="text" name="fname" class="form-control">
      </div>
      <div class="form-group">
        <label for="mname">MIddle Name</label>
        <input type="text" name="mname" class="form-control">
      </div>
      <div class="form-group">
        <label for="lname">Last Name</label>
        <input type="text" name="lname" class="form-control">
      </div>
      <div class="form-group">
        <label for="gen">Gender</label>
        <input type="text" name="gen" class="form-control">
      </div>
      <div class="form-group">
        <label for="mssg">Message</label>
        <input type="text" name="mssg" class="form-control">
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
        <input type="submit" class="btn btn-success" name="add_students" value="ADD">
      </div>
      
    </div>
  </div>
</div>
</form>


 