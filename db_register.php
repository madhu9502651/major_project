<?php

include 'intro.php';
if(isset($_POST["signup"])){
    $usern=$_POST["user"];
	$email=$_POST["email"];
	$pass=$_POST["pass"];
    $cpass=$_POST["cpass"];
	}
$query1="SELECT * FROM users.info WHERE username='$usern'";
$res1=mysqli_query($con,$query1);
$row1=mysqli_num_rows($res1);

$query2="SELECT * FROM users.info WHERE email='$email'";
$res2=mysqli_query($con,$query2);
$row2=mysqli_num_rows($res2);

if($row1>0){
    echo ("<script>alert('username already exists');window.location.href='register.php';</script>");
}
else if($row2>0){
     //echo ("<script> document.getElementById('email').style.border='2px solid red'</script>");

    echo ("<script>alert('mail already exists');window.location.href='register.php';</script>");
}
else if($pass!== $cpass){
    // echo ("<script> document.getElementById('pass').style.border='2px solid red'</script>");

   echo ("<script>alert('password and confirm password doesnot matched');window.location.href='register.php';</script>"); 
}
else if($pass===$cpass && $row1===0 && $row2===0){
    $sql="insert into users.info(email,password,username) values('$email','$pass','$usern')";
    $res11=mysqli_query($con, $sql);
    $sql2="CREATE TABLE db.$usern(quan int,name1 varchar(50),price1 int, image varchar(50),food_id int,sno int NOT NULL auto_increment ,PRIMARY KEY (sno))";
    $res12=mysqli_query($con, $sql2);
    echo ("<script>alert('sign up successfull ');window.location.href='login.php';</script>"); 
 }
 
		

?>