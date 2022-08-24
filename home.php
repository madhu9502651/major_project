<?php
// session_start();
include "intro.php";
$query1="SELECT * FROM restaurents.logo";
$res=mysqli_query($con,$query1);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style2.css">
    <style>
        button{
            background-color:gold;
            border:none;
            border-radius:0.5vh;
            height:4vh;
        }
        .heading{
            font-size:3vw;
            display:flex;
            justify-content:center;
            color:brown;
            margin-bottom:3vh;
        }
        .logos .res .bor{
            animation: anm 2s;
        } 
        .logos .res .bor img{
            transition:all 1s ease-in-out;
        }
        .logos .res .bor img:hover{
            transform:skewX(-10deg);
        }
        .logos .res .bor .bt{
            transition:all 0.4s ease-in-out;
        }
        .logos .res .bor .bt:hover{
            background-color:rgba(0,0,200,0.6);
            color:white;
        }
        @keyframes anm {
            0%{
                margin-top:70vh;
            }
            100%{
                margin-top:2vh;
            }
        }
        @media (max-width:940px){
            .heading{
                font-size:4.5vw;
            }
        }
    </style>
</head>
<body>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<?php 
include "navbar_piece.php";
?>


    <div class="img1">
        <img src="./pizza.jpg">
    </div>

 

    <div class="heading">RESTAURANTS</div>
    <div class="logos">
        <div class="res">
        <?php
            while($row=mysqli_fetch_assoc($res)){
        ?>
            <div class="bor">
            <form method="GET" action="menu.php"> 

                 <img src="<?php echo $row['image'];?>" >
                    <h3><?php echo $row["name"];?></h3>
                    <h3><?php echo $row["discount"];?> %  off</h3>
                    <input type="hidden"  name="txt" value="<?php echo $row['id'];?>">
                    <button class ="bt" name="bt" style="cursor:pointer">show</button>
            </form>
            </div>   
        <?php } ?>
            
        </div>  
    </div> 

    

    <?php include "footer_piece.php"?>
</body>
</html>