<?php
include 'intro.php';
if(isset($_POST["submit"])){
	$usern=$_POST["usern"];
	$pass=$_POST["p_word"];
    $query="SELECT * FROM users.info WHERE  username='$usern'";
	$res=mysqli_query($con,$query);
	$fetch=mysqli_fetch_assoc($res);
	$sel_pass=$fetch["password"];
	$sel_usern=$fetch["username"];
    $row=mysqli_num_rows($res);
    if($row ===1 ){
		if($sel_pass==$pass){
        echo ("<script>alert('login successfull ');window.location.href='home.php';</script>");
		session_start();
		$_SESSION['name']=$usern;
		}
		else{
			echo ("<script>alert('wrong password');window.location.href='login.php';</script>");
		} 
        }
    else{
		echo ("<script>alert('user doesnt exists');window.location.href='login.php';</script>"); 

	} 
	
}



?>





