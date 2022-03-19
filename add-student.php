<?php 
include "db.php";
include "header1.php";
?>
<?php
 if(isset($_POST['save']))
  {
   $studentname = $_POST['studentname'];
   $gender = $_POST['gender'];
   $class = $_POST['class'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $query = "INSERT INTO student(student_name,student_gender,student_class,student_phone,student_email) VALUES('$studentname','$gender','$class','$phone','$email')";
   $run = mysqli_query($conn,$query);
   
   if($run)
   { 
   ?>
     <script>
     alert("New Student Added Successfull");
      window.location = 'student.php';
      </script>
     <?php
   }
   
   
  }
?>
<div id="admin-content">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h2 class="admin-heading">Add Student</h2>
       </div>
       <div class="offset-md-7 col-md-2">
         <a class="add-new badge rounded-pill bg-dark text-white" href="student.php">All Students</a>
        </div>
     </div>
     
     <div class="row">
        <div class="offset-md-3 col-md-6">
          <form method="POST">
                   <div class="form-group">
                       <label>Student Name</label>
                        <input type="text" class="form-control" placeholder="Student Name" name="studentname" value="" required>
                    </div>
                
                    <div class="form-group">
                        <label>Gender</label>
                        <select name="gender" class="form-control">
                            <option value="male" selected>Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Class</label>
                        <input type="text" class="form-control" placeholder="Class" name="class" value="" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="number" class="form-control" placeholder="Phone" name="phone" value="" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email" value="" required>
                    </div>
                    <input type="submit" name="save" class="btn btn-danger" value="save" required>
          </form>
     </div>
  </div>
  </div>