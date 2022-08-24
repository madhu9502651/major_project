<!DOCTYPE html>
<html lang="en">
<head>
    <style>
  

.max{
            
            background-image:url(".\\cover2.jpg");
            background-size:100vw 100vh;
            background-repeat:no-repeat;
            background-position:center;
            height:100vh;
            display: flex;
            justify-content:center;
            align-items: center;
            position: relative;
            z-index:-1;
        }
.max .min{
            background-color:cornflowerblue;
            width:20vw;
            height:70vh;
            display:flex;
            justify-content:center;
            align-items: center;
            border-radius: 10px;
            text-align: center;
            position:relative;
            top:8vh;
        }
    .max  img{
        position:absolute;
        top:9.5vh;
        left:39.8%;
        width:20vw;
        height:70vh;   
        border-radius: 10px;
        width:20vw;
        height:15vh;
        z-index:1;
    }
    .max .min{
        animation:anm 2s;
    }
    .max img{
        animation:anm1 2s ;
    }

    @keyframes anm{
        0%{
            margin-left:-60vw;
        }
        100%{
            margin-left:0vw;
        }
    }

    @keyframes anm1{
        0%{
            margin-left:-30vw;
        }
        100%{
            margin-left:0vw;
        }
    }
    @media (max-width:580px) {
        .max .min {
            font-size:12px;
            
        }
        
    }
    </style>
</head>
<body>
    <?php
    include "navbar_piece.php";
    ?>
    <div class="max">
       <div class="img"> <img class="im" src=".\foddieee.jpg"></div>
        <div class="min">
            <p><i><b>
                
            FODDIE is a unique website where you can find many restaurents.
               Foddie has collaborated with many top restaurents to supply food 
               to you ontime.<br><br>
               FODDIE provide you the best quality food and more disounts ontime.
               our website helps you search for restaurents near by you,And provide 
               you a great discount on your first seven orders <br><br><br>
                </i></b>
                CREATED BY MADHU AND YESHWANTH ~ NIT agartala
               <br>
               
            </p>
        </div>
    </div>
    <?php
    include "footer_piece.php";
    ?>
</body>
</html>