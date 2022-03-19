<?php include "header1.php";
 include "db.php";
?>
<main>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
  
    <div class="carousel-item active">
      <img src="img/l1.jpg" class="d-block w-100" alt="..."/>
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    
    <div class="carousel-item">
      <img src="img/l3.jpg" class="d-block w-100" alt="..."/>
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    
    <div class="carousel-item">
      <img src="img/l4.jpg" class="d-block w-100" alt="..."/>
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
    
    <div class="carousel-item">
      <img src="img/l5.jpg" class="d-block w-100" alt="..."/>
      <div class="carousel-caption d-none d-md-block">
        <h5>Fourth slide</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
    
    
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



   <div class="container marketing">
 
     <div class="row">
       
      <div class="col-lg-4">
       <svg class="bd-placeholder-img rounded-circle" width="140" height="140" focusable="false">
        <rect width="100%" height="100%" fill    
        ="yellow" />
        <text class="svgtxt"  x="50%" y="50%" dominant-baseline="middle" text-anchor="middle">   
          <?php 
              $query = "SELECT COUNT(author_name) AS total_author FROM author";
              $run = mysqli_query($conn,$query);
              if(mysqli_num_rows($run) > 0)
              {
             while($row = mysqli_fetch_assoc($run))
                {
                  echo  $row['total_author'];
                }
              }
            ?>
        </text>
        
       </svg> 
        <h2><b>Author</b></h2>
        <p>Total Count of author number list in single number</p>
        <p><a class="btn btn-secondary" href="author.php">View details &raquo;</a></p>
      </div>
      
      
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" focusable="false"><rect width="100%" height="100%" fill="yellow"/>
        <text class="svgtxt" x="50%" y="50%" dominant-baseline="middle" text-anchor="middle">  
      
          <?php 
              $query = "SELECT COUNT(category_name) AS cat_total FROM category";
              $run = mysqli_query($conn,$query);
              if(mysqli_num_rows($run) > 0)
              {
             while($row = mysqli_fetch_assoc($run))
                {
                  echo $row['cat_total'];
                }
              }
            ?>
            
            </text>
       </svg> 
        
        <h2><b>Category</b></h2>
        <p>Total Count of Category number list in single number</p>
        <p><a class="btn btn-secondary" href="category.php">View details &raquo;</a></p>
      </div>
      

      <div class="col-lg-4">
       <svg class="bd-placeholder-img rounded-circle" width="140" height="140" focusable="false"><rect width="100%" height="100%" fill="yellow"/>
        <text class="svgtxt"  x="50%" y="50%" dominant-baseline="middle" text-anchor="middle">   
          <?php 
              $query = "SELECT COUNT(*) AS book_total FROM book";
              $run = mysqli_query($conn,$query);
              if(mysqli_num_rows($run) > 0)
              {
             while($row = mysqli_fetch_assoc($run))
                {
                  echo $row['book_total'];
                }
              }
            ?>
            </text>
       </svg> 

        <h2><b>Books</b></h2>
        <p>Total Count of Category number list in single number</p>
        <p><a class="btn btn-secondary" href="book.php">View details &raquo;</a></p>
      </div>
    </div>
    
  </div>


</main>