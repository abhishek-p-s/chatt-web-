<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css.css">
<link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet">
 <!-- CSS only -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <title>chatt app</title>
</head>
<body  class="bg-info">

  <?php
  session_start();
  if(isset($_SESSION['userName'])){

   
    echo '<header class="bg-success" >
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
           
          </li>
          <li class="nav-item active">';
          echo'<h1> '. $_SESSION['userName'].'</h1>
          </li>
        </ul>
      </div>
    </nav>
    </header>';
    echo' <a class="btn bg-success" href="logout.php">log out your account</a>';
   

  }
  else{
      header("location:logout.php");
  }
  

  ?>
  <div id="main">
  <div id="message">

  <?php

include("connection.php");

  $query="select * from message";
  $result=mysqli_query($con,$query);
  while($row=mysqli_fetch_assoc($result)){
    $message=$row['message'];
    $userName=$row['userName'];
    echo '<h5 style="color:green">'.$userName.'</h5>';	
    echo '<p>'.$message.'</p>';
    echo'<hr>';

  }


 

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
    <div class="text-center pt-3">
  <button type="submit" class="btn bg-success pt-2 " name="login">Submit</button></div>
</form></div>
  
  </div>
</body>
</html>