<?php
include "db.php" ;
include "header1.php" ;
?> 
<?php
if(isset($_GET['del']))
{
  $id = $_GET['del'];
  $query = "DELETE FROM book WHERE book_id = $id";
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
                <h2 class="admin-heading">All Books</h2>
            </div>
            <div class="offset-md-7 col-md-2">
                <a class="add-new badge rounded-pill bg-dark text-white" href="add-book.php">Add Book</a>
            </div>
        </div>
        
        <div class="row">
        <div class="col-md-12">
<?php
$query = "SELECT *  FROM book
LEFT JOIN category ON book.book_category = category.category_id
LEFT JOIN author ON book.book_author  = author.author_id";
$run = mysqli_query($conn,$query);
if(mysqli_num_rows($run) > 0)
 {
   ?>
    <table class="table table-striped border border-primary rounded-2">
           <thead>
            <th>S.No</th>
            <th>Book Name</th>
            <th>Category</th>
            <th>Author</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>
          </thead>
          <?php
       while($row = mysqli_fetch_assoc($run))
       { ?>
          <tbody>
         <tr>
              <td><?php echo $row['book_id']; ?></td>
              <td><?php echo $row['book_name']; ?></td>
              <td><?php echo $row['book_category']; ?></td>
              <td><?php echo $row['book_author']; ?></td>
              <td>
                <?php
                    if($row['book_status'] == 'Y'){
                        echo "<span class='badge bg-success'>Available</span>";
                    }else{
                        echo "<span class='badge bg-danger'>Issued</span>";
                    } ?>
              </td>
              <td>
              <a class="btn btn-warning" href="edit-book.php?upd=<?php echo $row['book_id']; ?>">Edit</a>
              </td>
              <td>
              <a class="btn btn-danger" href="<?php $_SERVER['PHP_SELF']; ?>?del=<?php  echo $row['book_id']; ?>">Delete</a>
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
    
 
    
    