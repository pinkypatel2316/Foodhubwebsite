

<html>
<style>
    * {
        background-color: white;
    }
    .form{
        border:2px solid black;
        padding: 3rem;
        margin-left: 30rem;
        margin-right: 30rem;
        background-color: lightcoral;
        box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
            /* opacity:0.5; */
            z-index:30;
            border:2px solid black;
    }
</style>
<!-- <?php
//alert("Not already a cutomer");
?> -->

<head>
    <title>Sign Up</title>
</head>

<body bgcolor="#E4F0F8">

    <center>
        <font color="blue" size="6" face="arial">Sign Up</font>
    </center><br />
    <center>
    <form class="form" action="" method="post">
        First Name
        <font color="red"></font>
        <input type='text' name='firstname' /><br /><br /><br>
        Last Name<font color="red"></font>
        </font> &nbsp;&nbsp;&nbsp;
        <input type='text' name='lastname' /><br /><br /><br>
        EmailAddress<font color="red"></font> &nbsp;&nbsp;&nbsp;
        <input type='text' name='email' /><br />
        <font color="red"></font> &nbsp;&nbsp;&nbsp;
        <font color="redblue"></font><br /><br /><br>
        Password(minimum 6 characters)
        <font color="red"></font> &nbsp;&nbsp;&nbsp;
        <input type='password' name='pass'><br /><br /><br>
        Address<font color="red"></font> &nbsp;&nbsp;&nbsp;
        <textarea rows="2" cols="20" id='addr' /></textarea> <br /> <br /><br>
        Mobile No<font color="red"></font> &nbsp;&nbsp;&nbsp;
        <input type='text' name='mobileno' /><br /><br>
        Gender: <input type='radio' name="gender">male
        <input type='radio' name="gender">female<br /><br /><br>
        <input type='Submit' name='submit' value="submit" />
        <input type='Reset' value='reset' />
</center>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $link = mysqli_connect('localhost', 'root', '', 'project');
        if (!$link)
            die("Failed to connect" . mysqli_connect_error());
        $fname = htmlspecialchars($_POST["firstname"]);
        $lname = htmlspecialchars($_POST["lastname"]);
        $email = htmlspecialchars($_POST["email"]);
        $password = htmlspecialchars($_POST["pass"]);
        $Contact = htmlspecialchars($_POST["mobileno"]);
        $gender = htmlspecialchars($_POST["gender"]);
        echo($gender);
        $sql = "INSERT INTO mess2 VALUES('$fname','$lname','$email','$password','$Contact','$gender')";
        if (mysqli_query($link, $sql))
            header("Location: appoint.php");
        else
            echo " not Inserted" . mysqli_error($link);
        mysqli_close($link);
    }
    ?>
</body>

</html>