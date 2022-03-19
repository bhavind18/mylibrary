<?php
include "db.php" ;
include "header1.php" ;
?> 
<?php
  if(isset($_POST['save']))
  {
    $book_name = $_POST['book_name'];
    $book_category = $_POST['category'];
    $book_author = $_POST['author'];
    
    $query = "SELECT book_name FROM book WHERE book_name = '{$book_name}'";
    $run = mysqli_query($conn, $query);
    if(mysqli_num_rows($run) > 0)
    {
       echo "<div class='alert alert-danger'>Book name already exist.</div>";
    }else
    {
      $sql1 ="INSERT INTO book(book_name,book_category,book_author,book_status) VALUES ('{$book_name}','{$book_category}','{$book_author}','Y')";
      
      if(mysqli_query($conn, $sql1))
      {
       // header("$base_url/book.php");
       ?>
       <script>
        alert("New Auyhor Added Successfull");
        window.location = 'book.php';
      </script>
     <?php
      }  
    }
  }
?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2 class="admin-heading">Add Books</h2>
            </div>
            <div class="offset-md-7 col-md-2">
                <a class="add-new badge rounded-pill bg-dark text-white" href="book.php">All Book</a>
            </div>
        </div>
        
 <div class="row">
   <div class="offset-md-3 col-md-6">
      <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        
          <div class="form-group">
            <label>Book Name</label>
              <input type="text" name="book_name"   value="" class="form-control">
          </div>
          
          <div class="form-grouo">
            <label>Category</label>
            <select class="form-control" name="category">
              <option value="">Select Category</option>
              <?php 
                $query = "SELECT * FROM category";
                $run = mysqli_query($conn,$query);
                if(mysqli_num_rows($run) > 0)
                {
                  while($row = mysqli_fetch_assoc($run)){
                    echo "<option value='{$row['category_name']}'>{$row['category_name']}</option>";
                  }
                }
              ?>
            </select>
          </div>
          
          <div class="form-group">
            <label>Author</label>
            <select class="form-control" name="author">
              <option value="">Select Author</option>
              <?php
               $query = "SELECT * FROM author";
               $run = mysqli_query($conn,$query);
               if(mysqli_num_rows($run) > 0){
                 while($row = mysqli_fetch_assoc($run)){
                   echo "<option value='{$row['author_name']}'>{$row['author_name']}</option>";
                 }
               }
              ?>
            </select>
          </div>
            
          
          <input type="submit" id="save" name="save" class="btn btn-success" value="Save">
          </form>
     </div>
  </div>
        
       </div>
      </div>