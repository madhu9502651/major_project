<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .footer{
        color: whitesmoke;
        background-color: black;
        height:20vh;
    }
    .footer a{
    text-decoration: none;
    display:grid;
    color:whitesmoke;
    position: relative;
    transition: 0.7s;
    }
    .footer a:hover{
    transform:translateX(0.6vw);
    }
    .footer h2{
        font-style: oblique;
    }
    .footer{
        display:flex;
        justify-content:space-evenly;
    }
    .footer .row1 {
        display: flex;
        justify-content:space-between;
        position: relative;
        top:1vh;
        
    }
    .footer .row1 a{
        font-size:25px;
    }
    @media (max-width:940px){
        h2{
            font-size:3.5vw;
        }
    }
    </style>
</head>
<body>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<div class="footer">
        
        <div >
            <h2>Mail Us</h2>
            <a href="#">Foddie123@gmail.com</a>
            <a href="#">Foddie At Tirupathi</a>
            <a href="#">Andhra Pradesh</a>
        </div>
        <div >
            <h2>Help</h2>
            <a href="#">FAQ</a>
            <a href="#">Services</a>
        </div>
        <div >
            <h2>Social Media</h2>
            <div class="row1">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"> </i></a>
                <a href="#"><i class="fab fa-whatsapp"> </i></a>
                <a href="#"><i class="fab fa-twitter"> </i></a>
            </div>
        </div>
        <div >
            <h2>Telephone</h2>
            <a href="#">1234567889</a>
        </div>
   
    </div>
</body>
</html>