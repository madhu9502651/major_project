<?php
include "intro.php";
$query1="SELECT * FROM restaurents.logo";
$res=mysqli_query($con,$query1);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<div class="nav">
        <div><img src=".\foddieee.jpg"></div>
        <div >
            <ul class="navbar"> 
                <!-- <li><h3 id="logo">FODDIE</h3> </li> -->
            <a  href="home.php"><i class="fas fa-home"></i> Home</a>
            <a  href="restaurents.php"><i class="fas fa-hotel"></i> RESTARENTS</a>
            <a  href="about.php"><i class="fas fa-globe-asia"></i> ABOUT</a>
            <a  href="contact.php"><i class="fas fa-id-card"></i> CONTACT US</a>
                <!-- <li><button class="btn"><a href="register.php">REGISTER</a></button></li>  -->
            </ul>
        </div>
        <div ><button class="btn"><a href="register.php">REGISTER</a></button></div>
</div>


    <div class="img1">
        <img src="./pizza.jpg">
    </div>

 

    
    <div class="logos">
        <div class="res">
        <?php
            while($row=mysqli_fetch_assoc($res)){
        ?>
            <div class="bor">
            <form method="POST" action="menu.php"> 

                 <img src="<?php echo $row['image'];?>" >
                    <h3><?php echo $row["name"];?></h3>
                    <h3><?php echo $row["discount"];?> %  off</h3>
                    <input type="hidden"  name="txt" value="<?php echo $row['id'];?>">
                    <button name="bt">show</button>
            </form>
            </div>   
        <?php } ?>
            
        </div>  
    </div> 

    
      
    


    
    

    <div class="footer">
        
        <div >
            <h2>Mail Us</h2>
            <a href="#">Foddie123@gmail.com</a>
            <a href="#">Foddie At Tirupathi</a>
            <a href="#">Andhra Pradesh</a>
        </div>
        <div >
            <h2>Help</h2>
            <a href="#">FAQ</a>
            <a href="#">Services</a>
        </div>
        <div >
            <h2>Social Media</h2>
            <div class="row1">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"> </i></a>
                <a href="#"><i class="fab fa-whatsapp"> </i></a>
                <a href="#"><i class="fab fa-twitter"> </i></a>
            </div>
        </div>
        <div >
            <h2>Telephone</h2>
            <a href="#">1234567889</a>
        </div>
   
    </div>
</body>
</html>