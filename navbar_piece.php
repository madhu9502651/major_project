<?php
error_reporting(0);
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    
     <style>
          .nav{
         display: flex;
         justify-content:center;
         background-color: black;
         width:100vw;
         position:fixed;
         z-index:1;
     }
     .nav .navbar a{
        text-decoration: none;
        color:whitesmoke;
        margin:1vw;
        font-size:1.4vw;
     }
     .nav .navbar a:hover{
         border-bottom:0.4vh solid goldenrod;
         border-radius:0.4vw;
     }
      .bt .btn{
        position:fixed;
         height:5vh;
         left:90vw;
         top:2.6vh;
         border-radius:0.5vw;
         border:none;
         background-color:skyblue;
        z-index:1;
     }
      .bt  a{
         text-decoration:none;
     }
      .bt  a:hover{
        border-bottom:0.4vh solid goldenrod;
        border-radius:0.4vw;
     }
     .nav img{
         width:14vw;
         height:7vh;
         position: relative;
         top:0.25vh;
         left:-33.3vh;
         border:none;
         border-radius:0.4vw;;
     }
     .nav .menu{
        color:#fff;
     }
     .nav .navbar #men{
            display:none;
        }
    #check{
        display:none;
    } 


      @media (max-width: 940px){
         ul{
            position:fixed;
            top:45px;
            left:-110vw;
            background-color:#111;
            height:50vh;
            margin-bottom:53vh;
            width:100vw;
            transition:all 0.7s ease;
        }
        .nav img{
            left:-25.29vh;
            top:0.37vh;
            width:25vw;
        }
        .nav .menu i{
                display:block;
        }
        
        #check:checked ~ .menu i:before{
            content: "\f00d";
        }
        .nav ul a{
           
            display:block;
            margin:1vh;
        }
         .nav ul a:hover{
           
            background-color:gold;
            color:black;
        }
         .nav .bt .btn{
            position:absolute;
            top:40vh;
            left:50vw;
            
        }
        .nav .navbar a{
            font-size:19px;
            padding:12px 0px 12px 30vw;
            align-items:center;
        }
        .nav .navbar #men{
            position:fixed;
            top:3.7vh;
            right:4%;
            font-size:20px;
            cursor:pointer;
            display:block;
        }
        
        .nav .navbar #check{
            position:fixed;
            top:3.5vh;
            right:15%;
            font-size:20px;
            cursor:pointer;
        }
        .bt .btn{
            top:2.2vh;
            left:60vw;
            border-radius:7px;
        }
        #gap{
            transition:all 0.7s ease;
        }
        
     }  
    </style>
    <script>
        var k=0;
        function f(){
            k++;
            if(k%2==1){
            var b=document.getElementById("box").style.left='1.5vw';
            var c=document.getElementById("gap").style.padding='42vw';
                    }
            if(k%2==0){
            var b=document.getElementById("box").style.left='-110vw';
            var c=document.getElementById("gap").style.padding='0vw';
                 }
            }
    </script>
</head> 
<body>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
    <div class="nav">
         <div><img src=".\foddieee.jpg"></div>
            <ul id="box" class="navbar">
                <a  href="home.php"><i class="fas fa-home"></i> Home</a>
                <a  href="restaurents.php"><i class="fas fa-hotel"></i> RESTAURANTS</a>
                <a  href="about.php"><i class="fas fa-globe-asia"></i> ABOUT</a>
                <a  href="contact.php"><i class="fas fa-id-card"></i> CONTACT US</a>
                <a  href="cart.php"><i class="fas fa-shopping-cart"></i></i> CART</a>
                 <input type="checkbox" id="check">
                 <label for="check" class="menu">
                     <i id="men"  onclick="f()" class="fas fa-bars"></i>
                </label>
            </ul>   
        </div>
        <div id="gap"></div> 
        <?php 
        if(isset($_SESSION["name"])){

        ?>
        <div class="bt"><button class="btn" name="logout"><a href="logout.php">LOGOUT</a></button></div>
        <?php } else{

        ?>
        <div class="bt"><button class="btn"><a href="register.php">REGISTER</a></button></div>
        <?php } ?>   
        
</div>
</body>
</html>