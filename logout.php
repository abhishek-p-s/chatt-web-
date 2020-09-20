<?php
session_start();
if(isset($_SESSION['userName']))
{
    unset($_SESSION['userName']);
    header("location:login.php");

}else{
    header("location:login.php");
}

?>