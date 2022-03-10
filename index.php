<?php
session_start();
include "db.php";
?>
<?php
  if(isset($_POST['submit']))
  {
   $username = $_POST['uname'];
   $password = $_POST['psw'];
   
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
        window.location = 'dashboard.php';
      </script>
       <?php
     }
   }
   else {
     echo "login faild";
   }
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="login.css">
</head>
<body>

<form action="#" method="post">
  <div class="imgcontainer">
    <img src="images/library1.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button name="submit" type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>
