<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Registration</title>
</head>
<body class="bg-info">
    <?php

    require_once("connection.php");

    if(isset($_POST['register'])){
        $firstName=$_POST['first'];
        $lastName=$_POST['last'];
        $userName=$_POST['user'];
        $password=$_POST['password'];
        if($firstName !="" and $lastName !="" and $userName !="" and $password!=""){


            $query="insert into regitration(firstName,lastName,userName,passwords)values('$firstName','$lastName','$userName','$password')";
            if(mysqli_query($con,$query)){

                header("location:login.php");

            }else{

                echo '<script type="text/javascript">alert("sorry");</script>';	
            }

        }else{
            echo '<script type="text/javascript">alert("fill all the boxes");</script>';	
        }
       
        

    }


    ?>
<div id="main">
<h1>REGISTRATION</h1>
<form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter name" name="first">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter last name" name="last">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="user name" name="user">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" placeholder="Password" name="password">
  </div>
 <div class="text-center">
  <button type="submit" class="btn bg-success " name="register">Submit</button>
  <a class="btn bg-success" href="login.php">login your account</a></div>
</form>

</div>
    
</body>
</html>