<!DOCTYPE html>
<html lang="en">
<head>
 <!-- CSS only -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>chatt app</title>
</head>
<body>
  <?php
  session_start();
  if(isset($_SESSION['userName'])){

    echo'welcome  '. $_SESSION['userName'];
    echo '<br><a href="login.php">log out</a>';

  }
  else{
      header("location:logout.php");
  }
  

  ?>
  <div id="main">
  <div id="message">

  <?php
  include("connection.php");

  if(isset($_POST['login'])){

  $message=$_POST['message'];
  $user=$_SESSION['userName'];

  $query="insert into message(id,message,userName)values('','$message','$user')";
            if(mysqli_query($con,$query)){

              echo '<h5 style="color:red">'.$user.'</h5>';	
              echo '<p>'.$message.'</p>';

            }else{

                echo '<script type="text/javascript">alert("sorry");</script>';	
            }

}

?>
  
  
  </div>

  

  <form method="post">
  <div class="form-group">
    <input type="text" class="form-control" height="50px" placeholder="type your message here" name="message">
  <button type="submit" class="btn btn-primary " name="login">Submit</button>
</form></div>
  
  </div>
</body>
</html>