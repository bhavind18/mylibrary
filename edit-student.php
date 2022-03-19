<?php
include "db.php";
include "header1.php";
?>
<?php
  if(isset($_GET['upd']))
  {
    $id = $_GET['upd'];
    $query = "SELECT * FROM author WHERE author_id = $id";
    $run = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($run);
    //echo $row['author_name'];
    
  }
?>
<?php
if(isset($_POST['submit'])){

//validate inputs

  $student_id = $_POST['student_id'];
  $student_name = $_POST['studentname'];
  $student_gender = $_POST['gender'];
  $student_class = $_POST['class'];
  $student_phone = $_POST['phone'];
  $student_email = $_POST['email'];
//update query
  $sql = "UPDATE student SET student_name = '$student_name', student_gender = '$student_gender', student_class = '$student_class', student_phone = '$student_phone', student_email = '$student_email'
          WHERE student_id = '$student_id'";
  if(mysqli_query($conn, $sql)){
    //header("student.php"); // redirect
   ?>
   <script>
         //alert("Update Successfull");
         window.location = 'student.php';
      </script>
   <?php
  }
} ?>
      
      
      
     <!--  <script>
         alert("Update Successfull");
         window.location = 'author.php';
      </script>-->

<div id="admin-content">
  <div class="container">
    <div class="row">
    <div class="col-md-4">
      <h2 class="admin-heading">Update Author</h2>
     </div>
     </div>
     <div class="row">
      <div class="offset-md-3 col-md-6">
      <?php
         $student_id = $_GET['sid'];
         $sql = "SELECT * FROM student WHERE student_id = '{$student_id}'";
         $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
         while($row = mysqli_fetch_assoc($result)){ ?>
        <form class="" action="" method="post" autocomplete="off">

                  <div class="form-group">

                      <input type="hidden" class="form-control" name="student_id" value="<?php echo $row['student_id']; ?>" required>
                  </div>
                    <div class="form-group">
                        <label>Student Name</label>
                        <input type="text" class="form-control"  name="studentname" value="<?php echo $row['student_name']; ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Gender</label>
                        <select name="gender" class="form-control">
                            <option value="male" <?php echo ($row['student_gender'] == 'male') ? 'selected' : ''; ?> >Male</option>
                            <option value="female" <?php echo ($row['student_gender'] == 'female') ? 'selected' : ''; ?> >Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Class</label>
                        <input type="text" class="form-control"  name="class" value="<?php echo $row['student_class']; ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="number" class="form-control"  name="phone" value="<?php echo $row['student_phone']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control"  name="email" value="<?php echo $row['student_email']; ?>" required>
                    </div>
                    <input type="submit" name="submit" class="btn btn-danger" value="Update" required>
                </form>
                <?php }
              }  ?>
              
    </div>
  </div>
</div>
</div>