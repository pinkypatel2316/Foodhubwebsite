<html> 
<head>
        <style>
            .design{
            box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
            /* opacity:0.5; */
            z-index:30;
            border:2px solid black;
            margin-top:4rem; 
            /* margin-right:28rem; */
            height:30rem;
            width:25rem;
            padding-top:4rem;
            border-radius:10%;
            background-color: lightcoral;
            margin-left: 4rem;
            padding-left: 1rem;

        }
        input{

            background-color:white;
            color:black;
            font-size:20px;
            padding: 0.5rem;

        }
        </style>
   </head>
 <body>
    
 <basefont face="Cambria" size="4"> <br> 
 <center> 
 <!-- <img src="img.jpg" width="585" height="335" /><br />  -->
     
    <div class="design">
 <b>Login:</b> 
 <br><br><br>
 <form name="f1" method="post" action="match.php"> 
 <!-- <table align="center" width="100" height="150" cellspacing=”15”>  -->
 <!-- <tr><td> -->
    <b><font color="black" size="5.5px">Login ID:</font></b>
<!-- </td>  -->
 <!-- <td> -->
    <input type="text" name="t1" placeholder="username"><br><br><br>
<!-- </td>  -->
 
 <b><font color="black" size="5.5px">Password:</font></b> 
 <input type="password" name="t2" placeholder="password"> <br><br><br>
  
 
 <b><font color="white"><input type="submit" name="b1" value="Submit" ></font></b>
 <div class="signup">
    <a href="registration.php">signup</a>
     
 </div>
 <!-- <input type="submit" name="b3" value=<a href="registration.php" >sign up</a>> -->
 <br><br>

 <!-- <input type="reset" name="b2" value="forget password"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
 <b><font color="black" size="4px"><a href="registration.php"><p>forget password?</p></a></font></b>
    
 
</form>
    </div>
    </center> 
 </basefont>
 </body> 
 </html> 

 <!-- <?php
// if(isset($_POST["b1"]))
// {
    
//     else{
//         echo "<script>alert('You are not our daily customer plz first signup')</script>";
//     }
// }
//     else if(isset($_POST["b3"]))
//     {
//         header("Location: registration.php");
//     } -->



//  ?>