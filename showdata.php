<html>
  <head>
  <style>
    body{
  background-color:white;
    }
  </style>
  </head>
  <body>
<?php 
$link = mysqli_connect("localhost", "root", "", "project");
if($link === false)
die("ERROR: Could not connect. " . mysqli_connect_error());
$sql = "SELECT * FROM userinfo";
if($result = mysqli_query($link, $sql)){
if(mysqli_num_rows($result) > 0)
{
echo "<table border='2px'>";
echo "<tr>";
echo "<th>firstname</th>";
echo "<th>lastname</th>";
echo "<th>Mobile number</th>";
echo "<th>selecteditem</th>";
echo "<th>price</th>";

echo "</tr>";
while($row = mysqli_fetch_array($result)){
    echo "<tr>";
  //  echo "<td>" . $row['person_id'] . "</td>";
    echo "<td>" . $row['firstname'] . "</td>";
    echo "<td>" . $row['lastname'] . "</td>";
    echo "<td>" . $row['MobileNo'] . "</td>";
    echo "<td>" . $row['selectditem'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";

    echo "</tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
    } else{
    echo "No records matching your query were found.";
    }
    } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    mysqli_close($link);
  
    ?>
    </body>

    </html>