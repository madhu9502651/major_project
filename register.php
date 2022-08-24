<!DOCTYPE html>
<html lang="en">
<head>
  <style>
       .max{
        background-image:url(".\\12.jpg");
        background-size:100% 100%;
        background-position: center;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
        width:100vw;
        height:100vh;
        z-index:0; 
      }
       .max .min{
          position:relative;
          background-color:rgb(102, 194, 247);
          width:20vw;;
          height:80%;
          color:black;
          font-size:1.1vw;
          z-index:0;
          opacity:0.85;
          border-radius: 10px;
      } 
      h3{
          margin-left:28%;
          font-style:oblique;
          text-transform:capitalize;
      }
      .max .min .box{
          opacity:1;
          width:140px;
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
      }
      p{
          font-size: 1vw;
          margin-top: 6vh;
          margin-left:1.5vw;
      }
      p button{
          font-size:1.1vw;
          border-radius:5px;
          border:none;
        background-color:rgba(0,0,200,0.6);
      }
      .min button  a{
        color:white;
        color:black;
      }
      
      .max .min .bt{
        height:4vh;
        font-size:1.1vw;
        border-radius:0.4vw;
        border:none;
        margin:2vh 0vw 0vw 8vw;
        color:white;
        background-color:rgba(0,0,200,0.6);
      }
      .max .min input[type=text],.max .min input[type=password],.max .min input[type=email]{
          width:10vw;
          
      } 
      .max .min .bt:hover,.max .min .bt1:hover{
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
        .max .min p{
            font-size:12px;
            
        }
        .max .min .bt{
            height:2vh;
            
        }
        .max .min .bt1{
            height:2vh;
            width:5vw;
        }
        .max .min{
          height:50%;
        }
        .max .min h3{
            
            font-size:10px;
        }
        .max .min p{
          position:relative;
          top:-3vh;
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
  <form method="POST" action="db_register.php">
    <div class="max">
        <div class="min">
            <h3>username</h3>
            <input name="user" id="user" required type="text" class="box" placeholder="username" >
            <h3>Email</h3>
            <input name="email" id="email" required class="box" placeholder="Email" type="email">
            <h3>password</h3>
            <input name="pass" id="pass" class="box" required placeholder="password" type="password">
            <h3>confirm password</h3>
            <input name="cpass" id="cpass" class="box" required placeholder="password" type="password">
            <div><button style="cursor:pointer" name="signup" class="bt">SIGN UP</button></div>
            <p>Already have an account ?
            <button class="bt1" style="cursor:pointer"><a style="color:white;text-decoration:none" href="login.php">login</a></button>
            </p>
            
        </div>
    </div>
  </form>
    <?php
      include "footer_piece.php";
      ?>
</body>
</html>