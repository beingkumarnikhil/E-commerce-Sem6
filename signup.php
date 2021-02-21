<?php
$con = mysqli_connect("localhost","root","","test");
$gr = $_POST['uname'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$room = $_POST['room'];
$pwd = $_POST['pwd'];

if(!$con)
{
echo "Failed To Connect <br>".mysqli_connect_error();
}
$sql = "INSERT INTO signup (grno,name,phonno,roomno,pwd) values ('$gr','$name','$phone','$room','$pwd')";
;

if(mysqli_query($con,$sql))
{

    header("Location: index.php");
}
else
{
echo "Error <br>".mysqli_error($con);
}
mysqli_close($con);
?>