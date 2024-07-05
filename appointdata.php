<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "project");
if (!$link) {
    die("could not connect: " . mysqli_connect_error());
}

if (isset($_POST["name1"]) && isset($_POST["name2"])) {
    $username = $_POST["name1"];
    $namelast = $_POST["name2"];
    $ret = "SELECT * FROM userinfo WHERE firstname='$username' AND lastname='$namelast'";
    $retval = mysqli_query($link, $ret);
    
    if ($retval) {
        if (mysqli_num_rows($retval) > 0) {
            echo "<table>";
            while ($row = mysqli_fetch_array($retval)) {
                echo "<tr>";
                echo "<td>" . $row['firstname'] . "</td>";
                echo "<td>" . $row['lastname'] . "</td>";
                echo "<td>" . $row['MobileNo'] . "</td>";
                echo "<td>" . $row['selectditem'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            mysqli_free_result($retval);
        } else {
            echo "No records matching your query were found.";
        }
    } else {
        echo "ERROR: Could not execute $ret. " . mysqli_error($link);
    }

    mysqli_close($link);
  }

?>
</body>
</html>
