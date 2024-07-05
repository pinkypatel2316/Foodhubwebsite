    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <    <style>
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
            margin-left: 35rem;
            padding-left: 1rem;

        }
        input{

            background-color:white;
            color:black;
            font-size:20px;
            /* padding: 0.5rem; */

        }
        /* @media only screen and (max-width:600px){
               .design
               {
                  width:20rem;
                  /* margin-left:20rem;     */
                  /* margin-right:10rem; */
               /* } */
        /* } */ 
        </style>
    </head>
    <body>
        <div class="design">
        <form name="form1" method="POST"  action="insertuser.php">
   <b>First name:&nbsp;&nbsp;&nbsp;<input type="text" name="name1" value=""><br></b><br>
   <b>Last name:&nbsp;&nbsp;&nbsp;<input type="text" name="name2" value=""><br></b><br>
   <b>Contact no.:&nbsp;<input type="number" name="phoneno" value=""><br></b><br>
   <b>item bought:&nbsp;<input type="text" name="selecteditemle" value=""><br></b><br>
   <b> price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="pricele" value=""><br></b><br><br><br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="pay">
</form>
        </div>

</body>
    </html>









   
