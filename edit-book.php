<?php
include "db.php";
include "header1.php";
?>
<?php
  if(isset($_GET['upd']))
  {
    $id = $_GET['upd'];
    $query = "SELECT * FROM book WHERE book_id = $id";
    $run = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($run);
    //echo $row['author_name'];
    
  }
?>
<?php
  if(isset($_POST['update']))
  {
    $aid = $_POST['book_id'];
    $book = $_POST['book_name'];
    $category = $_POST['book_category'];
    $author = $_POST['book_author'];
    
    $query = "UPDATE book SET  book_name = '$book', book_category = '$category', book_author = '$author' WHERE book_id = $id";
    $run = mysqli_query($conn,$query);
    if($run)
      { ?>
       <script>
         alert("Update Successfull");
         window.location = 'book.php';
      </script>
      <?php
   }
  }
?>
<div id="admin-content">
  <div class="container">
    <div class="row">
    <div class="col-md-4">
      <h2 class="admin-heading">Update Book</h2>
     </div>
     </div>
     <div class="row">
      <div class="offset-md-3 col-md-6">
         <form action="" method="post">
             <div class="form-group">
                <input type="hidden" class="form-control"  name="book_id" value="<?php echo $row['book_id']; ?>" required>
               </div>
               
               <div class="form-group">
                      <label>Book Name</label>
                      <input type="text" class="form-control" name="book_name" value="<?php echo $row['book_name']; ?>" required>
                </div>
                
   <div class="form-group">
           <label for="exampleInputCategory"> Category</label>
           <select class="form-control" name="book_category">
             <option selected>Select Category</option>
<?php

$query1 = "SELECT * FROM category";
$run1 = mysqli_query($conn, $query1) or die("query failed");

if(mysqli_num_rows($run1) > 0)
{
  while($row1 = mysqli_fetch_assoc($run1))
  {
    if($row['book_category'] == $row1['category_id'])
    {
      $selected = "selected";
    }
    else
    {
      $selected = "";
    }
    echo "
    <option {$selected} value='{$row1['category_name']}'>{$row1['category_name']}</option>
    ";
  }
}
 ?>
           </select>
         </div> 
  <div class="form-group">
           <label for="exampleInputCategory"> Author</label>
           <select class="form-control" name="book_author">
             <option selected>Select Author</option>
<?php

$query1 = "SELECT * FROM author";
$run1 = mysqli_query($conn, $query1) or die("query failed");

if(mysqli_num_rows($run1) > 0)
{
  while($row1 = mysqli_fetch_assoc($run1))
  {
    if($row['author'] == $row1['author_id'])
    {
      $selected = "selected";
    }
    else
    {
      $selected = "";
    }
    echo "
    <option {$selected} value='{$row1['author_name']}'>{$row1['author_name']}</option>
    ";
  }
}
 ?>
           </select>
         </div> 
         
                
                
                
                
             
                
                  <input type="submit" name="update" class="btn btn-danger" value="Update" required>
              </form>
    </div>
  </div>
</div>
</div>