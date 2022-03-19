<?php 
include "db.php";
include "header1.php";
?>
<?php
if(isset($_GET['del']))
{
  $id = $_GET['del'];
  $query = "DELETE FROM author WHERE author_id = $id";
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
       <h2 class="admin-heading">All Authors</h2>
     </div>
     <div class="offset-md-6 col-md-3">
        <a class="add-new badge rounded-pill bg-dark text-white" href="add-author.php">Add Author</a>
         </div>
   </div>
   <div class="row">
     <div class="col-md-12">
        <table class="table table-striped border border-primary rounded-2">
          <thead>
            <th>S.No</th>
            <th>Author Name</th>
            <th>Edit</th>
            <th>Delete</th>
          </thead>
          
         <tbody>
    <?php 
     $query = "SELECT * FROM author";
     $run = mysqli_query($conn,$query);
     if(mysqli_num_rows($run) > 0)
     {
       while($row = mysqli_fetch_assoc($run))
       { ?>
         <tr>
            <td><?php echo $row['author_id']; ?></td>
            <td><?php echo $row['author_name']; ?></td>
              <td>
              <a class="btn btn-warning" href="edit-author.php?upd=<?php echo $row['author_id']; ?>">Edit</a>
              </td>
              <td>
                <a class="btn btn-danger" href="<?php $_SERVER['PHP_SELF']; ?>?del=<?php echo $row['author_id']; ?>">Delete</a>
              </td>
            </tr>
      <?php
      
       }
     }
            
    ?>
          </tbody>

        </table>  
     </div>
   </div>
</div>
</div>