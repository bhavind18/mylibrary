<?php 
include "db.php";
include "header1.php";
?>

<div id="admin-content">
<div class="container">
  <div class="row">
     <div class="col-md-4">
       <h2 class="admin-heading">All Category</h2>
     </div>
     <div class="offset-md-5 col-md-2">
        <a class="add-new badge rounded-pill bg-dark text-white" href="add-category.php">Add Category</a>
         </div>
   </div>
   <div class="row">
     <div class="col-md-12">
        <table class="table table-striped border border-primary rounded-2">
          <thead>
            <th>S.No</th>
            <th>Category Name</th>
            <th>Edit</th>
            <th>Delete</th>
          </thead>
          
         <tbody>
    <?php 
     $query = "SELECT * FROM category";
     $run = mysqli_query($conn,$query);
     if(mysqli_num_rows($run) > 0)
     {
       while($row = mysqli_fetch_assoc($run))
       { ?>
         <tr>
            <td><?php echo $row['category_id']; ?></td>
            <td><?php echo $row['category_name']; ?></td>
              <td>
              <a class="btn btn-warning" href="edit-category.php?upd=<?php echo $row['category_id']; ?>">Edit</a>
              </td>
              <td>
                <a onclick="return delfun()" class="btn btn-danger" href="delete-category.php?del=<?php echo $row['category_id']; ?>">Delete</a>
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
<script>
   function delfun()
   {
    return confirm('are you sure delete this category');
   }
</script>

