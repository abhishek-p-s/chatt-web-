<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chatt app</title>
</head>
<body>
  <?php
  session_start();
  if(isset($_SESSION['userName'])){

    echo'welcome  '. $_SESSION['userName'];
    echo '<br><a href="login.php">log out</a>';

  }else{
      header("location:logout.php");
  }
  

  ?>
</body>
</html>