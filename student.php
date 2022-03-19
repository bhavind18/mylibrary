<?php 
include "db.php";
include "header1.php";
?>
<?php
if(isset($_GET['del']))
{
  $id = $_GET['del'];
  $query = "DELETE FROM student WHERE student_id = $id";
  $run = mysqli_query($conn,$query);
  if($run)
  {
    
  }
}
?>

<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2 class="admin-heading">All Student</h2>
            </div>
            <div class="offset-md-7 col-md-2">
                <a class="add-new badge rounded-pill bg-dark text-white" href="add-student.php">Add Student</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
             <?php
              $sql = "SELECT * FROM student ORDER BY student_id DESC";
              $result = mysqli_query($conn, $sql);
               ?>
                <table class="table">
                    <thead>
                      <th>S.No</th>
                      <th>Student Name</th>
                      <th>Gender</th>
                      <th>class</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </thead>
                    <tbody>
                      <?php if(mysqli_num_rows($result) > 0){
                      while($row = mysqli_fetch_assoc($result)) { ?>
                      <tr>
                         <td><?php echo $row['student_id']; ?></td>
                        <td><?php echo $row['student_name']; ?></td>
                        <td><?php echo ucfirst($row['student_gender']); ?></td>
                        <td><?php echo ucfirst($row['student_class']); ?></td>
                        <td><?php echo $row['student_phone']; ?></td>
                        <td><?php echo $row['student_email']; ?></td>
                  
                        <td class="edit">
                          <a href="edit-student.php?sid=<?php echo $row['student_id']; ?>" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                <a class="btn btn-danger" href="<?php $_SERVER['PHP_SELF']; ?>?del=<?php echo $row['student_id']; ?>">Delete</a>
              </td>
                      </tr>
                    <?php //$serial++;
                      }
                    }else{ ?>
                      <tr>
                        <td colspan="8">No Students Found</td>
                      </tr>
                    <?php } ?>
                    </tbody>
                </table>
         
            </div>
        </div>
    </div>
</div>

