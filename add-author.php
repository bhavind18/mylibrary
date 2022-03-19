<?php 
include "db.php";
include "header1.php";
?>
<?php
 if(isset($_POST['save']))
  {
   $authorname = $_POST['authorname'];
   $query = "INSERT INTO author(author_name) VALUES('$authorname')";
   $run = mysqli_query($conn,$query);
   
   if($run)
   { 
   ?>
     <script>
     alert("New Auyhor Added Successfull");
      window.location = 'author.php';
      </script>
     <?php
   }
   
   
  }
?>
<div id="admin-content">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h2 class="admin-heading">Add Author</h2>
       </div>
       <div class="offset-md-7 col-md-2">
         <a class="add-new badge rounded-pill bg-dark text-white" href="author.php">All Authors</a>
        </div>
     </div>
     
     <div class="row">
        <div class="offset-md-3 col-md-6">
          <form method="POST">
            <div class="form-group">
              <label>Author Name</label>
              <input type="text" name="authorname" class="form-control">
              <input type="submit" id="save" name="save" class="btn btn-success" value="Save">
            </div>
          </form>
     </div>
  </div>
  </div>