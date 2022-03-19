<?php
include "db.php";
include "header1.php";
if(isset($_GET['search']))
{
  $search_book = $_GET['search'];
}
?>
<h2 class="page-heading text-center text-danger">Search Book Name: <?php echo $search_book; ?></h2>
<?php
include "db.php";
 $query = "SELECT * FROM book
  WHERE book_name LIKE '%{$search_book}%'";
  $run = mysqli_query($conn,$query) or die("query failed".mysqli_error($conn));
   if(mysqli_num_rows($run) > 0)
  {
    while ($row = mysqli_fetch_assoc($run))
     {
       ?>
       <div class="container">
         <div class="row">
       <form>
        <div class="row">
         <h2><?php $book = $row['book_name'];
          echo  $book; ?></h2> 
        </div>
        </form>
       
        </div>
        </div>
      
       <?php 
       
      }
    }
         else
         {
           echo "<h2>No record found</h2>";
         }
 
?>