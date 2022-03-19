<?php
session_start();
include "db.php";
?>
<?php
  if(isset($_POST['submit']))
  {
   $username = $_POST['username'];
   $password = $_POST['password'];
   
   $query = "SELECT *  FROM admin WHERE username = '$username' and password = '$password'";
   $run = mysqli_query($conn, $query);
   if(mysqli_num_rows($run) > 0)
   {
     while($row = mysqli_fetch_assoc($run))
     {
       $_SESSION['id'] = $row['id'];
       $_SESSION['username'] = $row['username'];
       ?>
       <script>
       // alert("New Category Added Successfull");
        window.location = 'dashboard1.php';
      </script>
       <?php
     }
   }
   else {
     echo "login faild";
   }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="login.css" rel="stylesheet">
  
    <title>Mylibrary</title>
  </head>

  <body class="text-center">
    <form class="form-signin" method="post">
      <img class="mb-4" src="person-circle.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Username</label>
      <input name="username" type="text" id="inputEmail" class="form-control" placeholder="Enter Username" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
      
      </div>
      <button name="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    
    
    </form>
  </body>
</html>
