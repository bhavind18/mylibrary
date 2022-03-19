<?php
include "db.php";
include "header1.php";
?>
<?php
  if(isset($_GET['upd']))
  {
    $id = $_GET['upd'];
    $query = "SELECT * FROM category WHERE category_id = $id";
    $run = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($run);
    //echo $row['category_name'];
    
  }
?>
<?php
  if(isset($_POST['update']))
  {
    $cid = $_POST['category_id'];
    $aname = $_POST['category_name'];
    
    $query = "UPDATE category SET  category_name = '$aname' WHERE category_id = $id";
    $run = mysqli_query($conn,$query);
    if($run)
      { ?>
       <script>
         alert("Update Successfull");
         window.location = 'category.php';
      </script>
      <?php
   }
  }
?>
<div id="admin-content">
  <div class="container">
    <div class="row">
    <div class="col-md-4">
      <h2 class="admin-heading">Update Category</h2>
     </div>
     </div>
     <div class="row">
      <div class="offset-md-3 col-md-6">
         <form action="" method="post">
             <div class="form-group">
                <input type="hidden" class="form-control"  name="category_id" value="<?php echo $row['category_id']; ?>" required>
               </div>
               
               <div class="form-group">
                      <label>Author Name</label>
                      <input type="text" class="form-control" name="category_name" value="<?php echo $row['category_name']; ?>" required>
                </div>
                  <input type="submit" name="update" class="btn btn-danger" value="Update" required>
              </form>
    </div>
  </div>
</div>
</div>