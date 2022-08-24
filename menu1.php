<?php
include "intro.php";
if(isset($_POST["bt"])){
    $value=$_POST["txt"];
   
}
$q="SELECT * FROM menu.items WHERE id='$value'";
$result=mysqli_query($con,$q);


?>
<!-- _____________________________________________________ -->
<?php
if(isset($_POST["btn"])){
    $quan=$_POST["t"];
    $food_id=$_POST["tb"];
    $q11="INSERT INTO user.name (quan,food_id) VALUES (' $quan','$food_id')";
    $r=mysqli_query($con,$q11);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .max{
            background-color:skyblue;
        }
        .max .min{
            display:flex;
            justify-content:space-between;
            border:0.5vh solid pink;
        }
        .max .min .items{
            text-align:center;
        }
        .max .min .items img{
            width:20vw;
            height:19vh;
        }
    </style>
</head>
<body>
<?php
 while($row=mysqli_fetch_assoc($result)){
?>
    <div class="max">
        <div class="min">
            <div class="items">
                <form method="POST" >
                    <img src="<?php echo $row['image'];?>" >
                    <h3><?php echo $row["name"];?></h3>
                    <input type="number" name="t" >
                    <input type="hidden" name="tb" value="<?php echo $row['food_id'];?>">
                    <button name="btn">click</button>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>
      
</body>
</html>