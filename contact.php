<!DOCTYPE html>
<html lang="en">
<head>
    <style>
         .max1{
            background-image:url(".\\cover.jfif");
            height:100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            background-size:100vw 100vh;
            background-repeat:no-repeat;
            z-index:-1;
        }
        .max1 .min1{
            background-color:cornflowerblue;
            width:20vw;
            height:70vh;
            display:flex;
            justify-content:center;
            align-items: center;
            border-radius: 10px;
            text-align: center;
        }
        .max1 .min1 img{
        position:absolute;
        top:15%;
        left:39.9%;
        width:20vw;
        height:70vh;   
        border-radius: 10px;
        width:20vw;
        height:15vh;
        }
        p{
    font-size:1.3vw;
    }
    .max1 .min1{
        animation:anm 2s;
    }
    .max1 img{
        animation:anm1 2s ;
    }

    @keyframes anm{
        0%{
            margin-left:-60vw;
            /* margin-bottom:-80vh; */
        }
        100%{
            margin-left:0vw;
            /* margin-bottom:0vh; */
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
    @media (max-width:580px){
    .max1 .min1{
          height:50%;
        }
    .max1 .min1 p{
        font-size:10px;
        }
        
    } 
    </style>
</head>
<body>
    <?php
    include "navbar_piece.php";
   
    ?>
    <div class="max1">
        
        <div class="min1">
            <img class="im1" src=".\foddieee.jpg">
            <br>
            <p>
                <i><b>FODDIE located at Tirupathi <br><br>
               Mail : Foddie123@gmail.com<br><br>
               mobile :1234567889<br><br>
               located at Tirupathi ,Andhra pradesh.<br>
            </b></i>
            </p>
        </div>
    </div>
    <div>
    <?php
        include "footer_piece.php"
        ?>
    </div>
        
</body>
</html>