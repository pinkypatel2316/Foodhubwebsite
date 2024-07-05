<?php 
$link = mysqli_connect("localhost","root", "", "project");
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error( ));
}
$sql = "CREATE TABLE mess2(firstname VARCHAR(60),lastname VARCHAR(59),email VARCHAR(50), mypassword VARCHAR(58),MobileNo INTEGER,Gender VARCHAR(40))";
if (mysqli_query($link, $sql))
echo "Table persons created successfully";
else
{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>
