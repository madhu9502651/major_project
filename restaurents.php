<?php
include "intro.php";
$query1="SELECT * FROM restaurents.logo";
$res=mysqli_query($con,$query1);
?>



<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="style2.css">
    <style>
        
        .heading{
            font-size:3vw;
            display:flex;
            justify-content:center;
            color:brown;
            
        }
        .space{
            padding:2vw;
        }
        button{
            background-color:gold;
            border:none;
            border-radius:0.5vh;
            height:4vh;
        }
        .logos .res .bor{
            animation: anm 1.5s ;
        } 
        .logos .res .bor img{
            transition:all 1s ease-in-out;
        }
        .logos .res .bor img:hover{
            transform:skewX(-10deg);
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
            .space{
                padding:10vw;
            }
            .heading{
                font-size:12px;
            }
        }
         
    </style>
</head>
<body>
    <?php include "navbar_piece.php";?>
    <div class="space"> </div>
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
                    <button class="bt" name="bt" style="cursor:pointer">show</button>
            </form>
            </div>   
        <?php } ?>
            
        </div>  
    </div> 
    <?php include "footer_piece.php";?>
</body>
</html>