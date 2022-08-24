<?php

include "intro.php";
if(isset($_GET["bt"])){
    $value=$_GET["txt"];
   
}
$q="SELECT * FROM menu.item WHERE id='$value'";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .max{
            display:flex;
            background-color:skyblue;
            text-align: center;
            align-items:center;
            justify-content:center;
        }
        .max .min{
            display:flex;
            justify-content:space-between;
            
        }
        .max .min .items{
            text-align:center;
            margin:5vh;
            border:0.5vh solid pink;
            border-radius:0.5vw;
        }
        .max .min .items img{
            width:20vw;
            height:25vh;
            border-radius:1.5vw;
        }
        .max .min .items .tbx{
            width:5vw;
        }
        button{
            background-color:gold;
            border:none;
            border-radius:0.5vh;
            height:4vh;
            color:blue;
           
        }
        .max .min .items{
            animation: anm 2s;
        }
        @keyframes anm {
            0%{
                margin-top:70vh;
            }
            100%{
                margin-top:5vh;
            }
        }
        .max .min .items img{
            transition:all 1s ease-in-out;
        }
        .max .min .items img:hover{
            transform:skewX(-5deg);
        }
        .max .min .items button{
            transition:all 0.4s ease-in-out;
        }
        .max .min .items button:hover{
            background-color:rgba(0,0,200,0.4);
            color:white;
        }
    </style>
</head>
<body>
    <?php include "navbar_piece.php"?>
<?php

 while($row=mysqli_fetch_assoc($result)){
    
?>
    <div class="max">
        <div class="min">
            <div class="items">
                <form method="POST" action="cart.php" >
                    <img src="<?php echo $row['image'];?>" >
                    <h3><?php echo $row["name"];?></h3>
                    <h3>Rs. <?php echo $row["price"];?> /-</h3>
                    <h3><?php echo $row["discount"];?> % off</h3>
                    <input type="hidden" name="item_name" value="<?php echo $row["name"];?>">
                    <input type="hidden" name="item_price" value="<?php echo $row["price"];?>">
                    <input type="hidden" name="img1" value="<?php echo $row["image"];?>">
                    <input class="tbx" type="number" name="t" placeholder="Quantity" min="1">
                    <input type="hidden" name="tb" value="<?php echo $row['food_id'];?>">
                    <button class="bt"name="btn" style="cursor:pointer">add to cart</button>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>
<?php include "footer_piece.php"?> 
</body>
</html>