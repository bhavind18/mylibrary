<?php
include "db.php" ;
include "header1.php" ;
?> 
<?php
if(isset($_GET['del']))
{
  $id = $_GET['del'];
  $query = "DELETE FROM book_issue WHERE issue_id = $id";
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
                <h2 class="admin-heading">Book issue</h2>
            </div>
            <div class="offset-md-7 col-md-2">
                <a class="add-new badge rounded-pill bg-dark text-white" href="add-book-issue.php">Book issue add</a>
            </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <?php
            $query = "SELECT * FROM book_issue
            LEFT JOIN student ON book_issue.issue_name = student.student_id
             LEFT JOIN book ON book_issue.issue_book = book.book_id
            ";
            $run = mysqli_query($conn, $query);
            ?>
            <table class="table table-striped">
              <thead>
                <th>S.No</th>
                <th>Student Name</th>
                <th>Book Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>issue date</th>
                <th>return date</th>
                <th>Status</th>
                <!--<th>edit</th>-->
                <th>delete</th>
              </thead>
            
            <tbody>
                <?php if(mysqli_num_rows($run) > 0){
            
                while($row = mysqli_fetch_assoc($run)) { 
                  if((date('Y-m-d') > $row['return_date']) && $row['issue_status'] == "N"){
                     
                  }
                  
                  ?>
                <tr <?php ?>>
                  <td><?php echo $row['issue_id']; ?></td>
                  <td><?php echo $row['student_name']; ?></td>
                  <td><?php echo $row['book_name']; ?></td>
                  <td><?php echo $row['student_phone']; ?></td>
                  <td><?php echo $row['student_email']; ?></td>
                  <td><?php echo date('d M, Y',strtotime($row['issue_date'])); ?></td>
                  <td><?php echo date('d M, Y',strtotime($row['return_date'])); ?></td>
                  <td>
                  <?php if($row['issue_status'] == 'Y'){
                    echo "<span class='badge bg-success'>Returned</span>";
                  }else{
                    echo "<span class='badge bg-danger'>Issued</span>";
                  } ?>
                  </td>
                  <!--<td class="edit">
                    <a href="edit-issue-book.php?iid=<?php //echo $row['issue_id']; ?>"  class="btn btn-success">Edit</a>
                  </td>-->
                  <!-- <td class="edit">
                    <a href="#"  class="btn btn-success">Edit</a>

                  </td>-->
              
                  <td>
                <a class="btn btn-danger" href="<?php $_SERVER['PHP_SELF']; ?>?del=<?php echo $row['issue_id']; ?>">Delete</a>
              </td>
                </tr>
                <?php
                    //$serial++;
                  }
                }else{ ?>
                  <tr>
                    <td colspan="10">No Books Issued</td>
                  </tr>
                <?php } ?>
              </tbody>
              
              
            </table>
          </div>
        </div>
     </div>
   </div>