<?php
include "intro.php";
session_start();
if(isset($_SESSION['name'])){
    $var=$_SESSION['name'];
    $q1="SELECT  username from users.info where username='$var'";
    $ress=mysqli_query($con,$q1);
    $_SESSION['value']=$ress;
}
?>