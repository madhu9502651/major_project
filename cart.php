<?php
error_reporting(0);
?>


<?php
session_start();
include "intro.php";


if(isset($_SESSION["name"])){
  if(isset($_POST["btn"])){
    $quan=$_POST["t"];
    $name=$_POST["item_name"];
    $price=$_POST["item_price"];
    $img1=$_POST["img1"];
    $food_id=$_POST["tb"];
    if(isset($_SESSION['name'])){
    $user=$_SESSION['name'];
    $q1="SELECT  username from users.info where username='$user'";
    $ress=mysqli_query($con,$q1);
    $rows=mysqli_fetch_assoc($ress);
    $anss= $rows["username"];
    $q1="INSERT INTO db.$anss(quan,food_id,name1,price1,image) VALUES (' $quan','$food_id','$name','$price','$img1')";
    $r=mysqli_query($con,$q1);
    }
  }
}
  else{
    echo "<script>alert('please login to add items to cart');window.location.href='login.php'</script>";
  }

  echo ("<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>");

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <style>
      body{
        background-color:whitesmoke;
        background-size:100vw 100vh;
        
      }
      .max{
        
        
        display:flex;
        justify-content:center;
        border:none;
      }
      .max .table{
        border:0.5vh solid brown;
        margin:2vw;
      }
      .padding{
        padding:7vh;
      }
      .max .table .added_item{
        margin:4vh;
      }
      .po button{
        margin:0vw 0vw 3vh 47vw;
        background-color:rgba(0,0,200,0.6);
        color:whitesmoke;
        height:5vh;
        border-radius:0.5vw;
        border:none;
        cursor: pointer;
      }
       img{
         border:0.1px solid whitesmoke;
         border-radius:0.7vw;
          width:12vw;
          height:18vh;
      }
      .dele{
        background-color:red;
        border:none;
        border-radius:0.3vw;
        font-size:1.5vw;
        position:relative;
        left:0.5vw;
      }
      .po button:hover{
        background-color:rgba(0,150,0,0.8);
        
      }
      @media (max-width:940px){
        #imgg img{
          width:22vw;
          height:15vh;
        }
        .dell button{
          height:3vh;
          border-radius:5px;
        }
        .dell button i{
            font-size:3vw;
        }
        .po button{
          border-radius:7px;
        }
      }
  </style>
</head>
<body>
<?php include "navbar_piece.php" ?>
  <div class="padding"></div>

<?php
  if(isset($_SESSION["name"])){
    $var=$_SESSION["name"];
    $sql3 = "SELECT SUM((price1)*(quan)) AS value_sum FROM db.$var";
    $sql2 = "SELECT * from db.$var";
    $resul = mysqli_query($con,$sql2);
    $r = mysqli_query($con,$sql3);
    $ro=mysqli_fetch_assoc($r);
    $sum=$ro['value_sum'];
    
    
?>



<?php
session_start();
$var3=$_SESSION["name"];
$sql3= "SELECT * from db.$var3";
$result1 = mysqli_query($con,$sql3);
$count=mysqli_num_rows($result1);

if(isset($_POST["bb"])){
  if($count==0){
  echo "<script>alert('Your cart is empty please add items');window.location.href='restaurents.php'</script>";
  }
else{
  $qq="DELETE from db.$var";
  $rr=mysqli_query($con,$qq);
 echo "<script>alert('YOUR ORDER has placed ');window.location.href='home.php'</script>";
}
}
?>



<?php 
session_start();
$var3=$_SESSION["name"];
$sql3= "SELECT * from db.$var3";
$result1 = mysqli_query($con,$sql3);
$count=mysqli_num_rows($result1);
if($count==0){
?>
<div style="text-align:center"><h3 style="color:red;">YOUR Cart Is Empty Click Here To Start Your Shopping <a href="restaurents.php">click here</a></h3></div>

<?php } ?>
<div class="max">
<table border="1" class="table">
            <tr>
                <th style="color:green">IMAGE</th>
                <th style="color:green">Food Name</th>
                <th style="color:green">Food Cost</th>
                <th style="color:green">Quantity</th>
                <th style="color:green">Total cost</th>
                <th style="color:green">update</th>
            </tr>
            <?php
            while($rows=mysqli_fetch_assoc($resul))
            {
            ?>    
            <div class ="added_item">
                <tr>
                  <form method="POST" action="del.php">
                    <input type="hidden"  name="na" value="<?php echo $rows["name1"]?>">
                    <input type="hidden"  name="s_no" value="<?php echo $rows["sno"]?>">
                    <td id="imgg" style="padding:2vw"><img src="<?php echo $rows['image'];?>" ></td>
                    <td style="padding:2vw"><?php echo $rows["name1"]?></td>
                    <td style="padding:2vw"><?php echo $rows["price1"]?></td>
                    <td style="padding:2vw"><?php echo $rows["quan"] ?></td>
                    <td style="padding:2vw" class="total">
                        <div ><?php echo $rows["price1"]*$rows["quan"]?></div>
                    </td>
                    <td class="dell" style="padding:2vw"><button style="cursor:pointer" name="delete" class="dele"><i class="far fa-trash-alt"></i></button></td>
                  </form>
                </tr>
            </div>
            <?php
            }
            ?>
            <div >
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="padding:2vw">Total</td>
                    <td style="padding:2vw"><?php echo $sum ?></td>
                    <td></td>
                </tr>
            </div>
        </table>

 
    
</div>
   
   <?php } ?>
   <form method="POST">
   <div class="po" ><button name="bb">PLACE ORDER</button></div>
   </form>
   <?php 
      
   ?>
   <?php include "footer_piece.php" ?>
</body>
</html>