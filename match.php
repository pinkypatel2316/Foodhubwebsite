<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "project");
if (!$link) {
    die("could not connect:" . mysqli_connect_error());
}
if (isset($_POST["b1"])) {
    $username = $_POST["t1"];
    $pwd = $_POST["t2"];
    $ret = "SELECT * From mess2 WHERE firstname='$username'";
    $retval = mysqli_query($link, $ret);
    if ($retval) {
        if (mysqli_num_rows($retval) > 0) {
            while ($row = mysqli_fetch_array($retval))
             {
                if ($row["password"] == $pwd) {
                    $_SESSION["fname"] = $row["firstname"];
                    header('Location: appoint.php');
                } else {
                    echo "invalid password or username ";
                }
            }
        } else {
            echo("not have an account");
            header('Location: Registration.php');
        }
    }
}

mysqli_close($link);
?>