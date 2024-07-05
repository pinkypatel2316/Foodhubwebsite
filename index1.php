<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
      <!-- <link rel="stylesheet" href="style1.css"> -->
      <style>
       *{
        margin-bottom:0;
       }
 .navbar{
    display: flex;
    /* background:dark-brown; */
    padding:1rem;
    color:white;
    justify-content:end;
    background-image:url("main.jpg");
    
    color:red;
    
}
.nav-items{
    flex-basis: 50%;
    padding-left:36rem;
    display:flex;
    justify-content: flex-end;
    color:white;
    gap:1rem;
    /* background-color: blueviolet; */
}
.nav-items >*
{
    margin-top: 1rem;
    /* background-color: brown; */
}
.nav-items a{
    margin-top: 1.4rem;
    text-align: right;
    text-decoration: none;
    color:red;
    text-decoration-style: solid;
     font-family:sans-serif;
    font-family: Arial, Helvetica, sans-serif;
    text-transform: uppercase;
    font-size: 1.2rem;
    padding-left:2.5rem;

}
.btn{
    color:black;
    padding:0.3rem 0.5rem;
    background: none;
    cursor: pointer;
    border-radius: 16px;
    border:2px solid  rgb(3, 3, 103);
}
.btn:hover{
    color:white;
    background-color: rgb(3, 3, 103);
}
.nav-items a:hover{
    text-decoration: underline;
}
.n{
    color:chocolate;
    font-size:25;

}
.m{
    color:chocolate;
    font-size:25;
}
.t{
    display:flex;
    width:100%;
    margin-top: 1rem;
    gap:2rem;
    flex-wrap: wrap;
    font-style: italic;
    font-size:25px;
    /* background-color: red; */
}
.rightnav{
    width : 20%;
    background-color: rgb(222, 237, 22);
    /* width : 50%; */
    text-align: right;
}
body{
    /* background-image:url("index2photo.jpg");   */
    background-image:url("main3.jpeg");
    background-repeat: no-repeat;
    /* opacity:1; */

}
h1{
    color:red;
    font-size:6rem;
    padding-left:30rem;

}
.main{
     /* display:flex;  */
    /* float:right;  */
}
.left{
    /* border:2px solid black; */
    /* margin-left: */
    width:1000px;
     margin-top:3rem; 
     margin-left:30rem;
     background-image:url("main.jpg");
} 
.right{
    /* border:2px solid black; */
    width:1000px;
     margin-top:3rem; 
     margin-left:30rem;
     background-image:url("main.jpg");
} 
.left a,.right a{
font-size:4rem;
 text-decoration:none;
   
    color:red;
     /* padding-right:600px; 
     padding-left:60px;   */
}


.copyright{
    width:100%;
    text-align:center;
    /* padding:25px 0; */
    font-weight: 400;
     height:0.5rem;
     margin-top:12rem;
}
.copyright i{
    color:#ff004f;
}


















      </style>
</head>


    <nav class="navbar">
         <div class="logo">
            <img src="logo2.png" height='60'>
        </div> 
        <div class="nav-items">
            <a href="index1.php"><i class="fa-solid fa-house"></i>Home</a>
            <a href="catalogue2.html">catalogue</a>
            <a href="login.php">Login</a>
            <a href="registration.php">sign up</a>
            <a href="mycart.php"><i class="fa-solid fa-cart-shopping"></i>My cart</a>
      </div>
      </nav>
      <h1 id="type"></h1>

      <i class="fa-solid fa-house"></i>
      <script>
        let name=['F','O','O','D',' ',' ','H','U','B'];
        var index=0;
        typeBody= document.getElementById("type");
        function addLetter()
        {
            span=document.createElement("span");
            span.textContent=name[index];
            index++;
            typeBody.appendChild(span);
            if(index>name.length)
            {
                clearInterval(interval);
            }
        }
        interval=setInterval(addLetter,100);
      </script>
     <div class="main">
      <div class="left">
      <a href="dishlist.html">VEGETERIAN</a>
      </div>
      <div class="right">
      <a href="dishlist2.html">NON-VEGETERIAN</a>
      </div>
       </div>
      
      <div class="copyright">
        <p>Copyright © 2023 All rights reserved </p>
     </div>
      </body>
      </html>