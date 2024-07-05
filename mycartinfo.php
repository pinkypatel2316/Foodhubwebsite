<?php
    if(isset($_POST['submit'])) {
        
        $link = mysqli_connect('localhost', 'root', '', 'project');
        
        if($link === false) {
            die("Failed to connect: " . mysqli_connect_error());
        }
        
        $first = $_POST["name1"];
        $last = $_POST["name2"];

        // if(mysqli_query($link, $sql)) {
            $username = $_POST["name1"];
            $namelast = $_POST["name2"];
        
            $ret = "SELECT * FROM userinfo WHERE firstname='$username' AND lastname='$namelast'";
            $retval = mysqli_query($link, $ret);
            
            if ($retval) {
                if (mysqli_num_rows($retval) > 0) {
                    echo "<table border='2px'>";
                    while ($row = mysqli_fetch_array($retval)) {
                        echo "<tr>";
                        echo "<td>" . $row['firstname'] . "</td>";
                        echo "<td>" . $row['lastname'] . "</td>";
                        echo "<td>" . $row['MobileNo'] . "</td>";
                        echo "<td>" . $row['selectditem'] . "</td>";
                        // $sum=$sum+ $row['price'] ;
                        echo "<td>" . $row['price'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    // echo"Total=".$sum;
                    mysqli_free_result($retval);
                } else {
                    echo "No records matching your query were found.";
                }
            } else {
                echo "ERROR: Could not execute $ret. " . mysqli_error($link);
            }
        
            
        
        } 