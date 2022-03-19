<?php 

include "db.php";

include "header1.php";
?>
<?php
  if(isset($_POST['save']))
  {
   $categoryname = $_POST['categoryname'];
   $query = "INSERT INTO category(category_name) VALUES('$categoryname')";
   $run = mysqli_query($conn,$query);
   
   if($run)
   { ?>
     <script>
     alert("New Category Added Successfull");
      window.location = 'category.php';
      </script>
     <?php
   }
   
   
  }
?>
<div id="admin-content">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h2 class="admin-heading">Add Category</h2>
       </div>
       <div class="offset-md-7 col-md-2">
         <a class="add-new badge rounded-pill bg-dark text-white" href="category.php">All Category</a>
        </div>
     </div>
     
     <div class="row">
        <div class="offset-md-3 col-md-6">
          <form method="POST">
            <div class="form-group">
              <label>Category Name</label>
              <input type="text" name="categoryname" class="form-control">
              <input type="submit" id="save" name="save" class="btn btn-success" value="Save">
            </div>
          </form>
     </div>
  </div>
  </div>
  </div>