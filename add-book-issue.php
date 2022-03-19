<?php 
include "db.php";
include "header1.php";
?>
<div id="admin-content">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h2 class="admin-heading">Add Book Issue</h2>
       </div>
       <div class="offset-md-7 col-md-2">
         <a class="add-new badge rounded-pill bg-dark text-white" href="book_issue.php">All Book issue</a>
        </div>
     </div>
   <div class="row">
      <div class="offset-md-3 col-md-6">  
     
     <?php 
    if(isset($_POST['save']))
    {

      $issue_name = $_POST['student_name'];
      $issue_book = $_POST['book_name'];
      $issue_date = date('Y-m-d');
      $return_date = date('Y-m-d');
      
      $sql = "INSERT INTO book_issue(issue_name,issue_book,issue_date,return_date,issue_status) VALUES ('{$issue_name}','{$issue_book}','{$issue_date}','$return_date','N')";
          if(mysqli_query($conn, $sql)){
     //   $result = mysqli_query($conn, $sql)
         $update = "UPDATE book SET book_status = 'N'  WHERE book_id = '$issue_book'";
             $result = mysqli_query($conn, $update)
              ?>
              <script>

// alert("New Category Added Successfull");

      window.location = 'book_issue.php';
      </script>
            <?php
    }
    }
     ?>
     
     
     
     <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
          <div class="form-group">
              <label>Student Name</label>
              <select class="form-control" name="student_name" required>
                <option value="">Select Name</option>
                <?php
                $sql = "SELECT * FROM student";
                $result = mysqli_query($conn, $sql) or die("SQL query failed.");
                if(mysqli_num_rows($result) > 0){ //check result rows
                    while($row = mysqli_fetch_assoc($result)){
                      echo "<option value='{$row['student_id']}'>{$row['student_name']}</option>";
                    }
                } ?>
              </select>
          </div>
          <div class="form-group">
              <label>Book Name</label>
              <select class="form-control" name="book_name" required>
                <option value="">Select Name</option>
                <?php
                $sql = "SELECT * FROM book WHERE book_status = 'Y'";
                $result = mysqli_query($conn, $sql) or die("SQL query failed.");
                if(mysqli_num_rows($result) > 0){ // check result rows
                    while($row = mysqli_fetch_assoc($result)){
                      echo "<option value='{$row['book_id']}'>{$row['book_name']}</option>";
                    }
                } ?>
              </select>
          </div>
          <input type="submit" name="save" class="btn btn-danger" value="save" required>
        </form>
 </div>
 </div>
 </div>
</div>