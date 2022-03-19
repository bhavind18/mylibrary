<?php 
include "db.php";
//include "header.php";
?>

<?php
if(isset($_GET['del']))
{
  $id = $_GET['del'];
  $query = "DELETE FROM category WHERE category_id = $id";
  $run = mysqli_query($conn,$query);
  if($run)
   {
     echo "record deleted";
      ?>
      <script>
       // alert("New Auyhor Added Successfull");
        window.location = 'category.php';
      </script>
      <?php
   } 
   else
   {
     echo "faild to delete";
   }
}
?>