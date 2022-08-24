<?php 
include "intro.php";
if(isset($_POST["delete"])){
    session_start();
    $varr1=$_SESSION["name"];
    $name=$_POST["na"];
    $sno=$_POST["s_no"];
    $querr1="DELETE from db.$varr1 WHERE sno='$sno'";
    $ans=mysqli_query($con,$querr1);
}
echo "<script>alert(' $name has delted from your cart ');window.location.href='cart.php'</script>"
?>