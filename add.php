<?php
$con = mysqli_connect("localhost","root","","test");
session_start();
$un = $_POST['hii'];
$pw1 = $_POST['que'];
$pw2 = $_POST['h1'];
$pw3 = $_POST['h2'];
$pw4 = $_SESSION["C1name"];

if(!$con)
{
echo "Failed To Connect <br>".mysqli_connect_error();
}
$sql = "INSERT INTO $un (uname,iname,que,remark) values ('$pw4','$pw2','$pw1','$pw3')";
if(mysqli_query($con,$sql))
{

    header("Location: cart.php");
}
else
{
echo "Error <br>".mysqli_error($con);
}
mysqli_close($con);
?>