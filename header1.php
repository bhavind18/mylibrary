<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>MyLibrary</title>
   <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="header1.css" rel="stylesheet"> 
  </head>
  <body>
  
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
    
   <!--  <a class="navbar-brand" href="#"><b class="badge bg-info text-dark">My Library</b></a> -->

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="menu">
        
        <ul class="offset-md-1 navbar-nav me-auto mb-2 mb-md-0">
         
          <li class="nav-item">
            
            <a class="nav-link <?php if
             (basename($_SERVER['PHP_SELF']) ==
             'dashboard1.php') echo 'active' ?> " href="dashboard1.php">Dashboard
             </a>
             
          </li>
          
          <li class="nav-item">
            <a class="nav-link <?php if
             (basename($_SERVER['PHP_SELF']) ==
             'author.php') echo 'active' ?> " href="author.php">Author
             </a>
            <!--<a href="author.php">Author</a>-->
          </li>
          
          <li class="nav-item">
            <a class="nav-link <?php if
             (basename($_SERVER['PHP_SELF']) ==
             'category.php') echo 'active' ?> " href="category.php">Category
             </a>
           <!-- <a href="category.php">Category</a>-->
          </li>
          
          <li class="nav-item">
            <a class="nav-link <?php if
             (basename($_SERVER['PHP_SELF']) ==
             'book.php') echo 'active' ?> " href="book.php">Book
             </a>
            <!--<a href="book.php">Book</a>-->
          </li>
          
          <li class="nav-item">
            <a class="nav-link <?php if
             (basename($_SERVER['PHP_SELF']) ==
             'student.php') echo 'active' ?> " href="student.php">Student
             </a>
          <!--  <a href="student.php">Student Reg</a>-->
          </li>
          
          <li class="nav-item">
             <a class="nav-link <?php if
             (basename($_SERVER['PHP_SELF']) ==
             'book_issue.php') echo 'active' ?> " href="book_issue.php">BookIssue
             </a>
          <!--  <a href="book_issue.php">Book Issue</a>-->
          </li>
        
          
          <li class="offset-md-2 nav-item dropdown">
          <a class="nav-link dropdown-toggle
           badge bg-info text-dark
          " href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            MyLibrary
          </a>
          
          
          <ul class="dropdown-menu dropdown-menu-dark"  aria-labelledby="navbarDarkDropdownMenuLink">
            <li>
               <a class="dropdown-item" href="#">
                welcome <?php echo $_SESSION['username']; ?>
               </a>
              </li>
              <li>
                <a class="dropdown-item" href="logout.php">Logout</a>
                </li>
          </ul>
        </li>
      
      
        </ul>
 
        
        </div>
  
      </div>
    </div>
  </nav>

  </body>
</html>