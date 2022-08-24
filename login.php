


<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .max{
        background-image:url(.\\12.jpg);
        background-size:100% 100%;
        background-position: center;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
        width:100vw;
        height:100vh;
        /* position: relative; */
        z-index:-1;
      }
      .max .min{
          position:relative;
          background-color:rgb(102, 194, 247);
          width:20%;
          height:53%;
          color:black;
          z-index:0;
          font-size:1.1vw;
          justify-content: space-around;
          align-items:center;
          opacity:0.85;
          border-radius: 10px;
      }
      h3{
          position:relative;
          top:2.9vh;
          margin-left:28%;
          font-style:oblique;
          text-transform:capitalize;
      }
      .max .min .box{
          opacity:1;
          width:10vw;
          background-color:black;
          text-align: center;
          color:white;
          font-size: 20px;
          border-radius:5px;
          margin-left:28%;
          outline:0;
          padding:5px;
          border:none;
          border-bottom:2px solid white;
          position:relative;
          top:2vh;
      }
      button{
        /* margin:2vh 0vw 0vw 8vw; */
       
      }
      .max .min img{
          position:absolute;
          width:20vw;
          height:15vh;
          top:-26%;
          left:0%;
          border:none;
          border-radius:8px;
      }
      .max .min .b{
          height:4vh;
          margin:2vh 0vh 0vh 9vw;
          border-radius:5px;
          font-size:1.1vw;
          border:none;
          color:white;
          background-color:rgba(0,0,200,0.6);
      }
      .max .min .b:hover{
        background-color:gold;
        color:black;
      }
      .max .min{
          animation:ani 2s; 
        }
        @keyframes ani {
          0%{
            margin-right:-60vw;
        }
        100%{
            margin-right:0vw;
        }
     }

    @media (max-width:580px) {
      .max .min .b{
            height:2.5vh;
            
        }
        .max .min{
          height:40%;
        }
        .max .min #un{
            padding-top:9vh;
            
        }
        .max .min h3{
            
            font-size:10px;
        }
        .max .min .box{
            width:14vw;
            left:-2vh;
        }
        .max .min{
          animation:ani 2s; 
        }
        @keyframes ani {
          0%{
            margin-right:-60vw;
        }
        100%{
            margin-right:0vw;
        }
     }
    }
    </style>
</head>
<body>
    <?php
    include "navbar_piece.php";
    ?>
    <form method="POST" action="db_login.php">
    <div class="max">
        
        <div class="min">
            <img class="im" src=".\foddieee.jpg">
            <h3 id="un">username</h3>
            <input  name="usern"  required type="text" class="box" placeholder="username" >
            <h3>password</h3>
            <input class="box"  name="p_word" required placeholder="password" type="password"><br><br>
            <button style="cursor:pointer" name="submit" class="b">LOGIN</button>
        </div>
    
            
    </div>
    </form>
    <?php
    include "footer_piece.php";
    ?>
</body>
</html>