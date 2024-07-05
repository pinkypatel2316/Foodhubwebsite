<?php 
$link = mysqli_connect("localhost","root", "", "project");
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error( ));
}
$sql = "CREATE TABLE userinfo(firstname VARCHAR(100),lastname VARCHAR(100),MobileNo INTEGER,selectditem VARCHAR(100),price INTEGER)";
if (mysqli_query($link, $sql))
echo "Table userinfo created successfully";
else
{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>
